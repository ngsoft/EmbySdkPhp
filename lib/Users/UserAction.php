<?php

declare(strict_types=1);

namespace EmbyClient\Model\Users;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Users.UserAction')]
class UserAction extends \EmbyClient\Model
{
    protected static array $mapping = [
        'type' => UserActionType::class,
        'date' => \DateTimeImmutable::class,
    ];

    protected string $id;
    protected string $serverId;
    protected string $userId;
    protected string $itemId;
    protected UserActionType $type;
    protected \DateTimeImmutable $date;
    protected int $positionTicks;

    public function getId(): string
    {
        return $this->id;
    }

    public function getServerId(): string
    {
        return $this->serverId;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function getItemId(): string
    {
        return $this->itemId;
    }

    public function getType(): UserActionType
    {
        return $this->type;
    }

    public function getDate(): \DateTimeImmutable
    {
        return $this->date;
    }

    public function getPositionTicks(): int
    {
        return $this->positionTicks;
    }
}
