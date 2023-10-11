<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Notifications\Api;

use EmbyClient\Model\RefName;

#[RefName('Emby.Notifications.Api.NotificationResult')]
class NotificationResult extends \EmbyClient\Model
{
    protected static array $mapping = [
        'notifications' => Notification::class,
    ];

    /** @var Notification[] */
    protected array $notifications;
    protected int $totalRecordCount;

    /**
     * @return Notification[]
     */
    public function getNotifications(): array
    {
        return $this->notifications;
    }

    public function getTotalRecordCount(): int
    {
        return $this->totalRecordCount;
    }
}
