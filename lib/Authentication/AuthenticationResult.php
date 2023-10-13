<?php

declare(strict_types=1);

namespace EmbyClient\Model\Authentication;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Controller.Authentication.AuthenticationResult')]
class AuthenticationResult extends \EmbyClient\Model
{
    protected static array $mapping = [
        'user'        => \EmbyClient\Model\UserDto::class,
        'sessionInfo' => \EmbyClient\Model\Session\SessionInfo::class,
    ];

    protected \EmbyClient\Model\UserDto $user;
    protected \EmbyClient\Model\Session\SessionInfo $sessionInfo;
    protected string $accessToken;
    protected string $serverId;

    public function getUser(): \EmbyClient\Model\UserDto
    {
        return $this->user;
    }

    public function getSessionInfo(): \EmbyClient\Model\Session\SessionInfo
    {
        return $this->sessionInfo;
    }

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    public function getServerId(): string
    {
        return $this->serverId;
    }
}
