<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class DynamicHlsService extends ApiService
{
    protected static array $endpoints        = [
        'getAudioByIdMasterM3u8'                                     => [
            '/Audio/{Id}/master.m3u8',
            'GET',
            'mixed',
        ],
        'getAudioByIdMainM3u8'                                       => [
            '/Audio/{Id}/main.m3u8',
            'GET',
            'mixed',
        ],
        'getVideosByIdMasterM3u8'                                    => [
            '/Videos/{Id}/master.m3u8',
            'GET',
            'mixed',
        ],
        'getVideosByIdMainM3u8'                                      => [
            '/Videos/{Id}/main.m3u8',
            'GET',
            'mixed',
        ],
        'getVideosByIdSubtitlesM3u8'                                 => [
            '/Videos/{Id}/subtitles.m3u8',
            'GET',
            'mixed',
        ],
        'getVideosByIdLiveSubtitlesM3u8'                             => [
            '/Videos/{Id}/live_subtitles.m3u8',
            'GET',
            'mixed',
        ],
        'getAudioByIdHls1ByPlaylistidBySegmentidBySegmentcontainer'  => [
            '/Audio/{Id}/hls1/{PlaylistId}/{SegmentId}.{SegmentContainer}',
            'GET',
            'mixed',
        ],
        'getVideosByIdHls1ByPlaylistidBySegmentidBySegmentcontainer' => [
            '/Videos/{Id}/hls1/{PlaylistId}/{SegmentId}.{SegmentContainer}',
            'GET',
            'mixed',
        ],
    ];
    protected static array $queryParameters  = [
        '/Audio/{Id}/master.m3u8'          => [
            'deviceProfileId'      => true,
            'deviceId'             => true,
            'container'            => true,
            'audioCodec'           => true,
            'enableAutoStreamCopy' => true,
            'audioSampleRate'      => true,
            'audioBitRate'         => true,
            'audioChannels'        => true,
            'maxAudioChannels'     => true,
            'static'               => true,
            'profile'              => true,
            'level'                => true,
            'framerate'            => true,
            'maxFramerate'         => true,
            'copyTimestamps'       => true,
            'startTimeTicks'       => true,
            'width'                => true,
            'height'               => true,
            'maxWidth'             => true,
            'maxHeight'            => true,
            'videoBitRate'         => true,
            'subtitleStreamIndex'  => true,
            'subtitleMethod'       => true,
            'maxRefFrames'         => true,
            'maxVideoBitDepth'     => true,
            'videoCodec'           => true,
            'audioStreamIndex'     => true,
            'videoStreamIndex'     => true,
        ],
        '/Audio/{Id}/main.m3u8'            => [
            'deviceProfileId'      => true,
            'deviceId'             => true,
            'container'            => true,
            'audioCodec'           => true,
            'enableAutoStreamCopy' => true,
            'audioSampleRate'      => true,
            'audioBitRate'         => true,
            'audioChannels'        => true,
            'maxAudioChannels'     => true,
            'static'               => true,
            'profile'              => true,
            'level'                => true,
            'framerate'            => true,
            'maxFramerate'         => true,
            'copyTimestamps'       => true,
            'startTimeTicks'       => true,
            'width'                => true,
            'height'               => true,
            'maxWidth'             => true,
            'maxHeight'            => true,
            'videoBitRate'         => true,
            'subtitleStreamIndex'  => true,
            'subtitleMethod'       => true,
            'maxRefFrames'         => true,
            'maxVideoBitDepth'     => true,
            'videoCodec'           => true,
            'audioStreamIndex'     => true,
            'videoStreamIndex'     => true,
        ],
        '/Videos/{Id}/master.m3u8'         => [
            'deviceProfileId'      => true,
            'deviceId'             => true,
            'container'            => true,
            'audioCodec'           => true,
            'enableAutoStreamCopy' => true,
            'audioSampleRate'      => true,
            'audioBitRate'         => true,
            'audioChannels'        => true,
            'maxAudioChannels'     => true,
            'static'               => true,
            'profile'              => true,
            'level'                => true,
            'framerate'            => true,
            'maxFramerate'         => true,
            'copyTimestamps'       => true,
            'startTimeTicks'       => true,
            'width'                => true,
            'height'               => true,
            'maxWidth'             => true,
            'maxHeight'            => true,
            'videoBitRate'         => true,
            'subtitleStreamIndex'  => true,
            'subtitleMethod'       => true,
            'maxRefFrames'         => true,
            'maxVideoBitDepth'     => true,
            'videoCodec'           => true,
            'audioStreamIndex'     => true,
            'videoStreamIndex'     => true,
        ],
        '/Videos/{Id}/main.m3u8'           => [
            'deviceProfileId'      => true,
            'deviceId'             => true,
            'container'            => true,
            'audioCodec'           => true,
            'enableAutoStreamCopy' => true,
            'audioSampleRate'      => true,
            'audioBitRate'         => true,
            'audioChannels'        => true,
            'maxAudioChannels'     => true,
            'static'               => true,
            'profile'              => true,
            'level'                => true,
            'framerate'            => true,
            'maxFramerate'         => true,
            'copyTimestamps'       => true,
            'startTimeTicks'       => true,
            'width'                => true,
            'height'               => true,
            'maxWidth'             => true,
            'maxHeight'            => true,
            'videoBitRate'         => true,
            'subtitleStreamIndex'  => true,
            'subtitleMethod'       => true,
            'maxRefFrames'         => true,
            'maxVideoBitDepth'     => true,
            'videoCodec'           => true,
            'audioStreamIndex'     => true,
            'videoStreamIndex'     => true,
        ],
        '/Videos/{Id}/subtitles.m3u8'      => [
            'subtitleSegmentLength' => true,
            'manifestSubtitles'     => true,
        ],
        '/Videos/{Id}/live_subtitles.m3u8' => [
            'subtitleSegmentLength' => true,
            'manifestSubtitles'     => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/Audio/{Id}/master.m3u8'                                       => [
            'id' => true,
        ],
        '/Audio/{Id}/main.m3u8'                                         => [
            'id' => true,
        ],
        '/Videos/{Id}/master.m3u8'                                      => [
            'id' => true,
        ],
        '/Videos/{Id}/main.m3u8'                                        => [
            'id' => true,
        ],
        '/Videos/{Id}/subtitles.m3u8'                                   => [
            'id' => true,
        ],
        '/Videos/{Id}/live_subtitles.m3u8'                              => [
            'id' => true,
        ],
        '/Audio/{Id}/hls1/{PlaylistId}/{SegmentId}.{SegmentContainer}'  => [
            'segmentContainer' => true,
            'segmentId'        => true,
            'id'               => true,
            'playlistId'       => true,
        ],
        '/Videos/{Id}/hls1/{PlaylistId}/{SegmentId}.{SegmentContainer}' => [
            'segmentContainer' => true,
            'segmentId'        => true,
            'id'               => true,
            'playlistId'       => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Gets an audio stream using HTTP live streaming.
     * Requires authentication as user.
     */
    public function getAudioByIdMasterM3u8(
        string $deviceProfileId,
        bool $static,
        \EmbyClient\Model\Dlna\SubtitleDeliveryMethod $subtitleMethod,
        bool $copyTimestamps,
        string $id,
        string $level,
        string $profile,
        string $videoCodec,
        string $deviceId,
        bool $enableAutoStreamCopy,
        string $audioCodec,
        string $container,
        null|int $subtitleStreamIndex = null,
        null|int $videoBitRate = null,
        null|int $maxHeight = null,
        null|int $maxWidth = null,
        null|int $height = null,
        null|int $maxAudioChannels = null,
        null|int $maxVideoBitDepth = null,
        null|int $audioStreamIndex = null,
        null|int $audioSampleRate = null,
        null|int $audioBitRate = null,
        null|int $startTimeTicks = null,
        null|int $maxRefFrames = null,
        null|int $width = null,
        null|float $framerate = null,
        null|int $audioChannels = null,
        null|int $videoStreamIndex = null,
        null|float $maxFramerate = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $deviceProfileId, $static, $subtitleMethod, $copyTimestamps, $id, $level, $profile, $videoCodec, $deviceId, $enableAutoStreamCopy, $audioCodec, $container, $subtitleStreamIndex, $videoBitRate, $maxHeight, $maxWidth, $height, $maxAudioChannels, $maxVideoBitDepth, $audioStreamIndex, $audioSampleRate, $audioBitRate, $startTimeTicks, $maxRefFrames, $width, $framerate, $audioChannels, $videoStreamIndex, $maxFramerate);
    }

    /**
     * Gets an audio stream using HTTP live streaming.
     * Requires authentication as user.
     */
    public function getAudioByIdMainM3u8(
        string $deviceProfileId,
        bool $static,
        \EmbyClient\Model\Dlna\SubtitleDeliveryMethod $subtitleMethod,
        bool $copyTimestamps,
        string $id,
        string $level,
        string $profile,
        string $videoCodec,
        string $deviceId,
        bool $enableAutoStreamCopy,
        string $audioCodec,
        string $container,
        null|int $subtitleStreamIndex = null,
        null|int $videoBitRate = null,
        null|int $maxHeight = null,
        null|int $maxWidth = null,
        null|int $height = null,
        null|int $maxAudioChannels = null,
        null|int $maxVideoBitDepth = null,
        null|int $audioStreamIndex = null,
        null|int $audioSampleRate = null,
        null|int $audioBitRate = null,
        null|int $startTimeTicks = null,
        null|int $maxRefFrames = null,
        null|int $width = null,
        null|float $framerate = null,
        null|int $audioChannels = null,
        null|int $videoStreamIndex = null,
        null|float $maxFramerate = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $deviceProfileId, $static, $subtitleMethod, $copyTimestamps, $id, $level, $profile, $videoCodec, $deviceId, $enableAutoStreamCopy, $audioCodec, $container, $subtitleStreamIndex, $videoBitRate, $maxHeight, $maxWidth, $height, $maxAudioChannels, $maxVideoBitDepth, $audioStreamIndex, $audioSampleRate, $audioBitRate, $startTimeTicks, $maxRefFrames, $width, $framerate, $audioChannels, $videoStreamIndex, $maxFramerate);
    }

    /**
     * Gets a video stream using HTTP live streaming.
     * Requires authentication as user.
     */
    public function getVideosByIdMasterM3u8(
        string $deviceProfileId,
        bool $static,
        \EmbyClient\Model\Dlna\SubtitleDeliveryMethod $subtitleMethod,
        bool $copyTimestamps,
        string $id,
        string $level,
        string $profile,
        string $videoCodec,
        string $deviceId,
        bool $enableAutoStreamCopy,
        string $audioCodec,
        string $container,
        null|int $subtitleStreamIndex = null,
        null|int $videoBitRate = null,
        null|int $maxHeight = null,
        null|int $maxWidth = null,
        null|int $height = null,
        null|int $maxAudioChannels = null,
        null|int $maxVideoBitDepth = null,
        null|int $audioStreamIndex = null,
        null|int $audioSampleRate = null,
        null|int $audioBitRate = null,
        null|int $startTimeTicks = null,
        null|int $maxRefFrames = null,
        null|int $width = null,
        null|float $framerate = null,
        null|int $audioChannels = null,
        null|int $videoStreamIndex = null,
        null|float $maxFramerate = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $deviceProfileId, $static, $subtitleMethod, $copyTimestamps, $id, $level, $profile, $videoCodec, $deviceId, $enableAutoStreamCopy, $audioCodec, $container, $subtitleStreamIndex, $videoBitRate, $maxHeight, $maxWidth, $height, $maxAudioChannels, $maxVideoBitDepth, $audioStreamIndex, $audioSampleRate, $audioBitRate, $startTimeTicks, $maxRefFrames, $width, $framerate, $audioChannels, $videoStreamIndex, $maxFramerate);
    }

    /**
     * Gets a video stream using HTTP live streaming.
     * Requires authentication as user.
     */
    public function getVideosByIdMainM3u8(
        string $deviceProfileId,
        bool $static,
        \EmbyClient\Model\Dlna\SubtitleDeliveryMethod $subtitleMethod,
        bool $copyTimestamps,
        string $id,
        string $level,
        string $profile,
        string $videoCodec,
        string $deviceId,
        bool $enableAutoStreamCopy,
        string $audioCodec,
        string $container,
        null|int $subtitleStreamIndex = null,
        null|int $videoBitRate = null,
        null|int $maxHeight = null,
        null|int $maxWidth = null,
        null|int $height = null,
        null|int $maxAudioChannels = null,
        null|int $maxVideoBitDepth = null,
        null|int $audioStreamIndex = null,
        null|int $audioSampleRate = null,
        null|int $audioBitRate = null,
        null|int $startTimeTicks = null,
        null|int $maxRefFrames = null,
        null|int $width = null,
        null|float $framerate = null,
        null|int $audioChannels = null,
        null|int $videoStreamIndex = null,
        null|float $maxFramerate = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $deviceProfileId, $static, $subtitleMethod, $copyTimestamps, $id, $level, $profile, $videoCodec, $deviceId, $enableAutoStreamCopy, $audioCodec, $container, $subtitleStreamIndex, $videoBitRate, $maxHeight, $maxWidth, $height, $maxAudioChannels, $maxVideoBitDepth, $audioStreamIndex, $audioSampleRate, $audioBitRate, $startTimeTicks, $maxRefFrames, $width, $framerate, $audioChannels, $videoStreamIndex, $maxFramerate);
    }

    /**
     * Gets an HLS subtitle playlist.
     * Requires authentication as user.
     */
    public function getVideosByIdSubtitlesM3u8(
        string $id,
        int $subtitleSegmentLength,
        string $manifestSubtitles
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $id, $subtitleSegmentLength, $manifestSubtitles);
    }

    /**
     * Gets an HLS subtitle playlist.
     * Requires authentication as user.
     */
    public function getVideosByIdLiveSubtitlesM3u8(
        string $id,
        int $subtitleSegmentLength,
        string $manifestSubtitles
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $id, $subtitleSegmentLength, $manifestSubtitles);
    }

    public function getAudioByIdHls1ByPlaylistidBySegmentidBySegmentcontainer(
        string $segmentContainer,
        string $segmentId,
        string $id,
        string $playlistId
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $segmentContainer, $segmentId, $id, $playlistId);
    }

    public function getVideosByIdHls1ByPlaylistidBySegmentidBySegmentcontainer(
        string $segmentContainer,
        string $segmentId,
        string $id,
        string $playlistId
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $segmentContainer, $segmentId, $id, $playlistId);
    }
}
