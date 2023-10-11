<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Notifications\Api;

use EmbyClient\Model\RefName;

#[RefName('Emby.Notifications.Api.NotificationsSummary')]
class NotificationsSummary extends \EmbyClient\Model
{
    protected static array $mapping = [
        'maxUnreadNotificationLevel' => \EmbyClient\Model\Notifications\NotificationLevel::class,
    ];

    protected int $unreadCount;
    protected \EmbyClient\Model\Notifications\NotificationLevel $maxUnreadNotificationLevel;

    public function getUnreadCount(): int
    {
        return $this->unreadCount;
    }

    public function getMaxUnreadNotificationLevel(): \EmbyClient\Model\Notifications\NotificationLevel
    {
        return $this->maxUnreadNotificationLevel;
    }
}
