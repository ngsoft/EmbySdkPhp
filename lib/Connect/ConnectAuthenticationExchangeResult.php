<?php

declare(strict_types=1);

namespace EmbyClient\Model\Connect;

use EmbyClient\RefName;

#[RefName('Emby.Server.Connect.ConnectAuthenticationExchangeResult')]
class ConnectAuthenticationExchangeResult extends \EmbyClient\Model
{
    protected string $localUserId;
    protected string $accessToken;

    public function getLocalUserId(): string
    {
        return $this->localUserId;
    }

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }
}
