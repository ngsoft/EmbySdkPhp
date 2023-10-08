<?php

declare(strict_types=1);

namespace EmbyClient\EmbyConnect\Model;

use EmbyClient\Connection;
use EmbyClient\HttpClient;
use EmbyClient\Model;

class Server extends Model
{
    public const BASEPATH                  = '%s/emby';
    public const CONNECT_EXCHANGE_ENDPOINT = '/Connect/Exchange';
    protected string $id;
    protected string $url;
    protected string $name;
    protected string $systemId;
    protected string $accessKey;
    protected string $localAddress;
    protected string $userType;
    protected string $supporterKey;

    protected LocalUser|null $localUser    = null;
    protected Connection|null $connection  = null;

    public function getLocalUser(): ?LocalUser
    {
        if (null === $this->localUser)
        {
            foreach ([$this->getLocalAddress(), $this->getUrl()] as $host)
            {
                $basepath = sprintf(self::BASEPATH, $host);

                if ($resp = HttpClient::sendApiRequest(
                    HttpClient::createRequest($basepath . self::CONNECT_EXCHANGE_ENDPOINT)
                        ->withHeader('X-Emby-Token', $this->getAccessKey())
                ))
                {
                    $resp['address'] = $host;

                    $this->localUser = LocalUser::make($resp);
                    break;
                }
            }
        }

        return $this->localUser;
    }

    public function getConnection(): ?Connection
    {
        return $this->connection;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSystemId(): string
    {
        return $this->systemId;
    }

    public function getAccessKey(): string
    {
        return $this->accessKey;
    }

    public function getLocalAddress(): string
    {
        return $this->localAddress;
    }

    public function getUserType(): string
    {
        return $this->userType;
    }

    public function getSupporterKey(): string
    {
        return $this->supporterKey;
    }
}
