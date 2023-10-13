<?php

declare(strict_types=1);

namespace EmbyClient;

use EmbyClient\EmbyConnect\AuthenticatedUser;

final class EmbyConnect
{
    public const BASEPATH                   = 'https://connect.emby.media/service';
    public const SERVERS_ENDPOINT           = '/servers';
    public const AUTHENTICATE_ENDPOINT      = '/user/authenticate';
    private const EMBY_TOKEN_CACHE_VALIDITY = 600;

    /**
     * @var array<string,Connection>
     */
    private static array $connections       = [];

    /**
     * @return Connection|Connection[]
     */
    public static function connect(string $username, string $password, ?string $serverName = null): array|Connection
    {
        static $cache      = [];

        if ( ! isset($cache[$username][$password]))
        {
            $cache[$username] ??= [];

            $key = sha1(sprintf(
                '%s::%s:%s',
                self::class,
                $username,
                $password
            ));

            if ($data = Cache::get($key))
            {
                if ($valid = count($data) > 0)
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
                        $cache[$username][$password] = $data;
                    }
                }
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
                        Client::APP,
                        Client::VERSION
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
                    Cache::set($key, $result, self::EMBY_TOKEN_CACHE_VALIDITY);
                    $cache[$username][$password] = $result;
                }
            }
        }

        if ( ! isset($cache[$username][$password]))
        {
            throw new \RuntimeException(
                'Cannot Connect to Emby Connect.'
            );
        }

        $result            = $cache[$username][$password];

        self::$connections = array_merge(self::$connections, $result);

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

    public static function getConnection(string $name): ?Connection
    {
        return self::$connections[$name] ?? null;
    }

    /**
     * @return Connection[]
     */
    public static function getConnections(): array
    {
        return self::$connections;
    }
}
