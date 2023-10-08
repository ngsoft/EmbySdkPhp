<?php

declare(strict_types=1);

namespace EmbyClient\EmbyConnect;

use EmbyClient\ApiClient;
use EmbyClient\EmbyConnect;
use EmbyClient\EmbyConnect\Model\Server;
use EmbyClient\EmbyConnect\Model\User;
use EmbyClient\HttpClient;
use EmbyClient\Model;

class AuthenticatedUser extends Model
{
    protected static array $mapping  = [
        'user' => User::class,
    ];

    protected string $accessToken;

    protected User $user;

    /**
     * @var null|array<string,Server>
     */
    protected array|null $serverList = null;

    public function getServerList(): array
    {
        if (null === $this->serverList)
        {
            $this->serverList = [];

            if ($this->user->isActive())
            {
                $request = HttpClient::createRequest(
                    HttpClient::getHttpFactory()->createUri(
                        EmbyConnect::BASEPATH . EmbyConnect::SERVERS_ENDPOINT
                    )
                        ->withQuery(
                            http_build_query([
                                'userId' => $this->getUser()->getId(),
                            ])
                        )
                )->withHeader('X-Application', sprintf(
                    '%s/%s',
                    ApiClient::APP,
                    ApiClient::VERSION
                ))->withHeader('X-Connect-UserToken', $this->getAccessToken());

                if ($resp = HttpClient::sendApiRequest($request))
                {
                    foreach ($resp as $item)
                    {
                        $this->serverList[$item['Name']] = Server::make($item);
                    }
                }
            }
        }

        return $this->serverList;
    }

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    public function getUser(): User
    {
        return $this->user;
    }
}
