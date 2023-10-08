<?php

declare(strict_types=1);

namespace EmbyClient\EmbyConnect\Model;

use EmbyClient\Model;

class LocalUser extends Model
{
    protected string $localUserId;
    protected string $accessToken;

    protected string $address;

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getLocalUserId(): string
    {
        return $this->localUserId;
    }

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }
}
