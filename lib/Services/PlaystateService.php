<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class PlaystateService extends ApiService
{
    protected static array $endpoints        = [
        'postSessionsPlaying'                       => [
            '/Sessions/Playing',
            'POST',
            'void',
            false,
        ],
        'postSessionsPlayingProgress'               => [
            '/Sessions/Playing/Progress',
            'POST',
            'void',
            false,
        ],
        'postSessionsPlayingPing'                   => [
            '/Sessions/Playing/Ping',
            'POST',
            'void',
            false,
        ],
        'postSessionsPlayingStopped'                => [
            '/Sessions/Playing/Stopped',
            'POST',
            'void',
            false,
        ],
        'postUsersByUseridPlayeditemsById'          => [
            '/Users/{UserId}/PlayedItems/{Id}',
            'POST',
            '\\EmbyClient\\Model\\UserItemDataDto',
            false,
        ],
        'deleteUsersByUseridPlayeditemsById'        => [
            '/Users/{UserId}/PlayedItems/{Id}',
            'DELETE',
            '\\EmbyClient\\Model\\UserItemDataDto',
            false,
        ],
        'postUsersByUseridPlayingitemsById'         => [
            '/Users/{UserId}/PlayingItems/{Id}',
            'POST',
            'void',
            false,
        ],
        'deleteUsersByUseridPlayingitemsById'       => [
            '/Users/{UserId}/PlayingItems/{Id}',
            'DELETE',
            'void',
            false,
        ],
        'postUsersByUseridItemsByItemidUserdata'    => [
            '/Users/{UserId}/Items/{ItemId}/UserData',
            'POST',
            'void',
            false,
        ],
        'postUsersByUseridPlayingitemsByIdProgress' => [
            '/Users/{UserId}/PlayingItems/{Id}/Progress',
            'POST',
            'void',
            false,
        ],
        'postUsersByUseridPlayingitemsByIdDelete'   => [
            '/Users/{UserId}/PlayingItems/{Id}/Delete',
            'POST',
            'void',
            false,
        ],
        'postUsersByUseridPlayeditemsByIdDelete'    => [
            '/Users/{UserId}/PlayedItems/{Id}/Delete',
            'POST',
            '\\EmbyClient\\Model\\UserItemDataDto',
            false,
        ],
    ];
    protected static array $parameters       = [
        'postSessionsPlaying'                       => [],
        'postSessionsPlayingProgress'               => [],
        'postSessionsPlayingPing'                   => [
            'playSessionId',
        ],
        'postSessionsPlayingStopped'                => [],
        'postUsersByUseridPlayeditemsById'          => [
            'userId',
            'datePlayed',
            'id',
        ],
        'deleteUsersByUseridPlayeditemsById'        => [
            'userId',
            'id',
        ],
        'postUsersByUseridPlayingitemsById'         => [
            'userId',
            'id',
            'mediaSourceId',
            'canSeek',
            'playMethod',
            'liveStreamId',
            'playSessionId',
            'subtitleStreamIndex',
            'audioStreamIndex',
        ],
        'deleteUsersByUseridPlayingitemsById'       => [
            'userId',
            'id',
            'mediaSourceId',
            'nextMediaType',
            'liveStreamId',
            'playSessionId',
            'positionTicks',
        ],
        'postUsersByUseridItemsByItemidUserdata'    => [
            'userId',
            'itemId',
        ],
        'postUsersByUseridPlayingitemsByIdProgress' => [
            'userId',
            'id',
            'mediaSourceId',
            'isPaused',
            'isMuted',
            'playMethod',
            'liveStreamId',
            'playSessionId',
            'repeatMode',
            'subtitleOffset',
            'playbackRate',
            'volumeLevel',
            'subtitleStreamIndex',
            'audioStreamIndex',
            'positionTicks',
        ],
        'postUsersByUseridPlayingitemsByIdDelete'   => [
            'userId',
            'id',
            'mediaSourceId',
            'nextMediaType',
            'liveStreamId',
            'playSessionId',
            'positionTicks',
        ],
        'postUsersByUseridPlayeditemsByIdDelete'    => [
            'userId',
            'id',
        ],
    ];
    protected static array $queryParameters  = [
        '/Sessions/Playing/Ping'                     => [
            'playSessionId' => true,
        ],
        '/Users/{UserId}/PlayedItems/{Id}'           => [
            'datePlayed' => true,
        ],
        '/Users/{UserId}/PlayingItems/{Id}'          => [
            'mediaSourceId'       => true,
            'canSeek'             => true,
            'audioStreamIndex'    => true,
            'subtitleStreamIndex' => true,
            'playMethod'          => true,
            'liveStreamId'        => true,
            'playSessionId'       => true,
            'nextMediaType'       => true,
            'positionTicks'       => true,
        ],
        '/Users/{UserId}/PlayingItems/{Id}/Progress' => [
            'mediaSourceId'       => true,
            'positionTicks'       => true,
            'isPaused'            => true,
            'isMuted'             => true,
            'audioStreamIndex'    => true,
            'subtitleStreamIndex' => true,
            'volumeLevel'         => true,
            'playMethod'          => true,
            'liveStreamId'        => true,
            'playSessionId'       => true,
            'repeatMode'          => true,
            'subtitleOffset'      => true,
            'playbackRate'        => true,
        ],
        '/Users/{UserId}/PlayingItems/{Id}/Delete'   => [
            'mediaSourceId' => true,
            'nextMediaType' => true,
            'positionTicks' => true,
            'liveStreamId'  => true,
            'playSessionId' => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/Users/{UserId}/PlayedItems/{Id}'           => [
            'userId' => true,
            'id'     => true,
        ],
        '/Users/{UserId}/PlayingItems/{Id}'          => [
            'userId' => true,
            'id'     => true,
        ],
        '/Users/{UserId}/Items/{ItemId}/UserData'    => [
            'userId' => true,
            'itemId' => true,
        ],
        '/Users/{UserId}/PlayingItems/{Id}/Progress' => [
            'userId' => true,
            'id'     => true,
        ],
        '/Users/{UserId}/PlayingItems/{Id}/Delete'   => [
            'userId' => true,
            'id'     => true,
        ],
        '/Users/{UserId}/PlayedItems/{Id}/Delete'    => [
            'userId' => true,
            'id'     => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Reports playback has started within a session
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Playback-Check-ins API Documentation: Playback Check ins
     */
    public function postSessionsPlaying(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Reports playback progress within a session
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Playback-Check-ins API Documentation: Playback Check ins
     */
    public function postSessionsPlayingProgress(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Pings a playback session
     * Requires authentication as user.
     */
    public function postSessionsPlayingPing(string $playSessionId): void
    {
        $this->makeApiCall(__FUNCTION__, $playSessionId);
    }

    /**
     * Reports playback has stopped within a session
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Playback-Check-ins API Documentation: Playback Check ins
     */
    public function postSessionsPlayingStopped(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Marks an item as played
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Playback-Check-ins API Documentation: Playback Check ins
     */
    public function postUsersByUseridPlayeditemsById(
        string $userId,
        string $datePlayed,
        string $id
    ): \EmbyClient\Model\UserItemDataDto {
        return $this->makeApiCall(__FUNCTION__, $userId, $datePlayed, $id);
    }

    /**
     * Marks an item as unplayed
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Playback-Check-ins API Documentation: Playback Check ins
     */
    public function deleteUsersByUseridPlayeditemsById(
        string $userId,
        string $id
    ): \EmbyClient\Model\UserItemDataDto {
        return $this->makeApiCall(__FUNCTION__, $userId, $id);
    }

    /**
     * Reports that a user has begun playing an item
     * Requires authentication as user.
     */
    public function postUsersByUseridPlayingitemsById(
        string $userId,
        string $id,
        string $mediaSourceId,
        bool $canSeek,
        \EmbyClient\Model\PlayMethod $playMethod,
        string $liveStreamId,
        string $playSessionId,
        null|int $subtitleStreamIndex = null,
        null|int $audioStreamIndex = null
    ): void {
        $this->makeApiCall(__FUNCTION__, $userId, $id, $mediaSourceId, $canSeek, $playMethod, $liveStreamId, $playSessionId, $subtitleStreamIndex, $audioStreamIndex);
    }

    /**
     * Reports that a user has stopped playing an item
     * Requires authentication as user.
     */
    public function deleteUsersByUseridPlayingitemsById(
        string $userId,
        string $id,
        string $mediaSourceId,
        string $nextMediaType,
        string $liveStreamId,
        string $playSessionId,
        null|int $positionTicks = null
    ): void {
        $this->makeApiCall(__FUNCTION__, $userId, $id, $mediaSourceId, $nextMediaType, $liveStreamId, $playSessionId, $positionTicks);
    }

    /**
     * Updates userdata for an item
     * Requires authentication as user.
     */
    public function postUsersByUseridItemsByItemidUserdata(
        string $userId,
        string $itemId
    ): void {
        $this->makeApiCall(__FUNCTION__, $userId, $itemId);
    }

    /**
     * Reports a user's playback progress
     * Requires authentication as user.
     */
    public function postUsersByUseridPlayingitemsByIdProgress(
        string $userId,
        string $id,
        string $mediaSourceId,
        bool $isPaused,
        bool $isMuted,
        \EmbyClient\Model\PlayMethod $playMethod,
        string $liveStreamId,
        string $playSessionId,
        \EmbyClient\Model\RepeatMode $repeatMode,
        int $subtitleOffset,
        float $playbackRate,
        null|int $volumeLevel = null,
        null|int $subtitleStreamIndex = null,
        null|int $audioStreamIndex = null,
        null|int $positionTicks = null
    ): void {
        $this->makeApiCall(__FUNCTION__, $userId, $id, $mediaSourceId, $isPaused, $isMuted, $playMethod, $liveStreamId, $playSessionId, $repeatMode, $subtitleOffset, $playbackRate, $volumeLevel, $subtitleStreamIndex, $audioStreamIndex, $positionTicks);
    }

    /**
     * Reports that a user has stopped playing an item
     * Requires authentication as user.
     */
    public function postUsersByUseridPlayingitemsByIdDelete(
        string $userId,
        string $id,
        string $mediaSourceId,
        string $nextMediaType,
        string $liveStreamId,
        string $playSessionId,
        null|int $positionTicks = null
    ): void {
        $this->makeApiCall(__FUNCTION__, $userId, $id, $mediaSourceId, $nextMediaType, $liveStreamId, $playSessionId, $positionTicks);
    }

    /**
     * Marks an item as unplayed
     * Requires authentication as user.
     */
    public function postUsersByUseridPlayeditemsByIdDelete(
        string $userId,
        string $id
    ): \EmbyClient\Model\UserItemDataDto {
        return $this->makeApiCall(__FUNCTION__, $userId, $id);
    }
}
