<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class MediaInfoService extends ApiService
{
    protected static array $endpoints        = [
        'postLivestreamsOpen'       => [
            '/LiveStreams/Open',
            'POST',
            '\\EmbyClient\\Model\\MediaInfo\\LiveStreamResponse',
            false,
        ],
        'postLivestreamsClose'      => [
            '/LiveStreams/Close',
            'POST',
            'void',
            false,
        ],
        'postLivestreamsMediainfo'  => [
            '/LiveStreams/MediaInfo',
            'POST',
            'mixed',
            false,
        ],
        'getPlaybackBitratetest'    => [
            '/Playback/BitrateTest',
            'GET',
            'mixed',
            false,
        ],
        'getItemsByIdPlaybackinfo'  => [
            '/Items/{Id}/PlaybackInfo',
            'GET',
            '\\EmbyClient\\Model\\MediaInfo\\PlaybackInfoResponse',
            false,
        ],
        'postItemsByIdPlaybackinfo' => [
            '/Items/{Id}/PlaybackInfo',
            'POST',
            '\\EmbyClient\\Model\\MediaInfo\\PlaybackInfoResponse',
            false,
        ],
    ];
    protected static array $queryParameters  = [
        '/LiveStreams/Close'       => [
            'liveStreamId' => true,
        ],
        '/LiveStreams/MediaInfo'   => [
            'liveStreamId' => true,
        ],
        '/Playback/BitrateTest'    => [
            'size' => true,
        ],
        '/Items/{Id}/PlaybackInfo' => [
            'userId' => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/Items/{Id}/PlaybackInfo' => [
            'id' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Opens a media source
     * Requires authentication as user.
     */
    public function postLivestreamsOpen(): \EmbyClient\Model\MediaInfo\LiveStreamResponse
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Closes a media source
     * Requires authentication as user.
     */
    public function postLivestreamsClose(string $liveStreamId): void
    {
        $this->makeApiCall(__FUNCTION__, $liveStreamId);
    }

    /**
     * Closes a media source
     * Requires authentication as user.
     */
    public function postLivestreamsMediainfo(string $liveStreamId): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $liveStreamId);
    }

    public function getPlaybackBitratetest(int $size): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $size);
    }

    /**
     * Gets live playback media info for an item
     * Requires authentication as user.
     */
    public function getItemsByIdPlaybackinfo(
        string $id,
        string $userId
    ): \EmbyClient\Model\MediaInfo\PlaybackInfoResponse {
        return $this->makeApiCall(__FUNCTION__, $id, $userId);
    }

    /**
     * Gets live playback media info for an item
     * Requires authentication as user.
     */
    public function postItemsByIdPlaybackinfo(string $id): \EmbyClient\Model\MediaInfo\PlaybackInfoResponse
    {
        return $this->makeApiCall(__FUNCTION__, $id);
    }
}
