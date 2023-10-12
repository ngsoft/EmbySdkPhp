<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class VideoService extends ApiService
{
    protected static array $endpoints        = [
        'getVideosByIdStreamByContainer' => [
            '/Videos/{Id}/stream.{Container}',
            'GET',
            'mixed',
        ],
        'getVideosByIdStream'            => [
            '/Videos/{Id}/stream',
            'GET',
            'mixed',
        ],
    ];
    protected static array $queryParameters  = [
        '/Videos/{Id}/stream.{Container}' => [
            'deviceProfileId'      => true,
            'deviceId'             => true,
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
        '/Videos/{Id}/stream'             => [
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
    ];
    protected static array $pathParameters   = [
        '/Videos/{Id}/stream.{Container}' => [
            'id'        => true,
            'container' => true,
        ],
        '/Videos/{Id}/stream'             => [
            'id' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Gets a video stream
     * Requires authentication as user.
     */
    public function getVideosByIdStreamByContainer(
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
     * Gets a video stream
     * Requires authentication as user.
     */
    public function getVideosByIdStream(
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
}
