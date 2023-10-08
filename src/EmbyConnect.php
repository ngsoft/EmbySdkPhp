<?php

declare(strict_types=1);

namespace EmbyClient;

use EmbyClient\EmbyConnect\AuthenticatedUser;
use Psr\Cache\InvalidArgumentException;

class EmbyConnect
{
    public const BASEPATH              = 'https://connect.emby.media/service';
    public const SERVERS_ENDPOINT      = '/servers';
    public const AUTHENTICATE_ENDPOINT = '/user/authenticate';

    /**
     * @return Connection|Connection[]
     */
    public static function connect(string $username, string $password, ?string $serverName = null): array|Connection
    {
        static $cache = [];

        if ( ! isset($cache[$username][$password]))
        {
            $cache[$username] ??= [];

            $key = sha1(sprintf(
                '%s::%s:%s',
                static::class,
                $username,
                $password
            ));

            try
            {
                if ($data = Cache::get($key))
                {
                    if ($valid = ! empty($data))
                    {
                        /**
                         * @var Connection $connection
                         */
                        foreach ($data as $connection)
                        {
                            if ( ! $connection->testConnection())
                            {
                                $valid = false;
                            }
                        }

                        if ($valid)
                        {
                            var_dump('cache hit!');
                            $cache[$username][$password] = $data;
                        }
                    }
                }
            } catch (InvalidArgumentException)
            {
            }

            if ( ! isset($cache[$username][$password]))
            {
                $request = HttpClient::createRequest(
                    self::BASEPATH . self::AUTHENTICATE_ENDPOINT,
                    'POST'
                )
                    ->withHeader('Content-Type', 'application/json')
                    ->withHeader('X-Application', sprintf(
                        '%s/%s',
                        ApiClient::APP,
                        ApiClient::VERSION
                    ))
                    ->withBody(
                        HttpClient::getHttpFactory()->createStream(
                            json_encode([
                                'nameOrEmail' => $username,
                                'rawpw'       => $password,
                            ])
                        )
                    )
                ;

                $result  = [];

                if ($resp = HttpClient::sendApiRequest($request))
                {
                    $authUser = AuthenticatedUser::make($resp);

                    if ($authUser->getUser()->isActive())
                    {
                        foreach ($authUser->getServerList() as $sName => $server)
                        {
                            if ($localUser = $server->getLocalUser())
                            {
                                $result[$sName] = Connection::getConnection($localUser->getAddress(), $localUser->getAccessToken());
                            }
                        }
                    }
                }

                if ( ! empty($result))
                {
                    try
                    {
                        Cache::set($key, $result);
                        $cache[$username][$password] = $result;
                    } catch (InvalidArgumentException)
                    {
                    }
                }
            }
        }

        if ( ! isset($cache[$username][$password]))
        {
            throw new \RuntimeException(
                'Cannot Connect to Emby Connect.'
            );
        }

        $result       = $cache[$username][$password];

        if (isset($serverName))
        {
            if ( ! isset($result[$serverName]))
            {
                throw new \RuntimeException(
                    'Cannot Connect to Emby Server ' . $serverName
                );
            }
            $result = $result[$serverName];
        }

        return $result;
    }
}
