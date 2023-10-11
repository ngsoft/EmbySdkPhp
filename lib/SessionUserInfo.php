<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Session.SessionUserInfo')]
class SessionUserInfo extends \EmbyClient\Model
{
    protected string $userId;
    protected string $userName;
    protected int $userInternalId;

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function getUserName(): string
    {
        return $this->userName;
    }

    public function getUserInternalId(): int
    {
        return $this->userInternalId;
    }
}
