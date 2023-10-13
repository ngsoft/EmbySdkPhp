<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class NotificationsService extends ApiService
{
    protected static array $endpoints        = [
        'getNotificationsTypes'           => [
            '/Notifications/Types',
            'GET',
            'array',
            '\\EmbyClient\\Model\\Notifications\\NotificationTypeInfo',
        ],
        'getNotificationsServices'        => [
            '/Notifications/Services',
            'GET',
            'array',
            '\\EmbyClient\\Model\\NameIdPair',
        ],
        'postNotificationsAdmin'          => [
            '/Notifications/Admin',
            'POST',
            'void',
            false,
        ],
        'getNotificationsByUserid'        => [
            '/Notifications/{UserId}',
            'GET',
            '\\EmbyClient\\Model\\Emby\\Notifications\\Api\\NotificationResult',
            false,
        ],
        'getNotificationsByUseridSummary' => [
            '/Notifications/{UserId}/Summary',
            'GET',
            '\\EmbyClient\\Model\\Emby\\Notifications\\Api\\NotificationsSummary',
            false,
        ],
        'postNotificationsByUseridRead'   => [
            '/Notifications/{UserId}/Read',
            'POST',
            'void',
            false,
        ],
        'postNotificationsByUseridUnread' => [
            '/Notifications/{UserId}/Unread',
            'POST',
            'void',
            false,
        ],
    ];
    protected static array $parameters       = [
        'getNotificationsTypes'           => [],
        'getNotificationsServices'        => [],
        'postNotificationsAdmin'          => [
            'name',
            'description',
            'imageUrl',
            'url',
            'level',
        ],
        'getNotificationsByUserid'        => [
            'userId',
            'limit',
            'startIndex',
            'isRead',
        ],
        'getNotificationsByUseridSummary' => [
            'userId',
        ],
        'postNotificationsByUseridRead'   => [
            'userId',
            'ids',
        ],
        'postNotificationsByUseridUnread' => [
            'userId',
            'ids',
        ],
    ];
    protected static array $queryParameters  = [
        '/Notifications/Admin'           => [
            'name'        => true,
            'description' => true,
            'imageUrl'    => true,
            'url'         => true,
            'level'       => true,
        ],
        '/Notifications/{UserId}'        => [
            'isRead'     => true,
            'startIndex' => true,
            'limit'      => true,
        ],
        '/Notifications/{UserId}/Read'   => [
            'ids' => true,
        ],
        '/Notifications/{UserId}/Unread' => [
            'ids' => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/Notifications/{UserId}'         => [
            'userId' => true,
        ],
        '/Notifications/{UserId}/Summary' => [
            'userId' => true,
        ],
        '/Notifications/{UserId}/Read'    => [
            'userId' => true,
        ],
        '/Notifications/{UserId}/Unread'  => [
            'userId' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Gets notification types
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\Notifications\NotificationTypeInfo[]
     */
    public function getNotificationsTypes(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets notification types
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\NameIdPair[]
     */
    public function getNotificationsServices(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Sends a notification to all admin users
     * Requires authentication as user.
     */
    public function postNotificationsAdmin(
        string $name,
        string $description,
        string $imageUrl,
        string $url,
        \EmbyClient\Model\Notifications\NotificationLevel $level
    ): void {
        $this->makeApiCall(__FUNCTION__, $name, $description, $imageUrl, $url, $level);
    }

    /**
     * Gets notifications
     * Requires authentication as user.
     */
    public function getNotificationsByUserid(
        string $userId,
        null|int $limit = null,
        null|int $startIndex = null,
        null|bool $isRead = null
    ): \EmbyClient\Model\Emby\Notifications\Api\NotificationResult {
        return $this->makeApiCall(__FUNCTION__, $userId, $limit, $startIndex, $isRead);
    }

    /**
     * Gets a notification summary for a user
     * Requires authentication as user.
     */
    public function getNotificationsByUseridSummary(string $userId): \EmbyClient\Model\Emby\Notifications\Api\NotificationsSummary
    {
        return $this->makeApiCall(__FUNCTION__, $userId);
    }

    /**
     * Marks notifications as read
     * Requires authentication as user.
     */
    public function postNotificationsByUseridRead(
        string $userId,
        string $ids
    ): void {
        $this->makeApiCall(__FUNCTION__, $userId, $ids);
    }

    /**
     * Marks notifications as unread
     * Requires authentication as user.
     */
    public function postNotificationsByUseridUnread(
        string $userId,
        string $ids
    ): void {
        $this->makeApiCall(__FUNCTION__, $userId, $ids);
    }
}
