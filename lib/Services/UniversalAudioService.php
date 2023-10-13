<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class UniversalAudioService extends ApiService
{
    protected static array $endpoints        = [
        'getAudioByIdUniversalByContainer' => [
            '/Audio/{Id}/universal.{Container}',
            'GET',
            'mixed',
            false,
        ],
        'getAudioByIdUniversal'            => [
            '/Audio/{Id}/universal',
            'GET',
            'mixed',
            false,
        ],
    ];
    protected static array $queryParameters  = [
        '/Audio/{Id}/universal.{Container}' => [
            'deviceId'       => true,
            'startTimeTicks' => true,
        ],
        '/Audio/{Id}/universal'             => [
            'deviceId'       => true,
            'startTimeTicks' => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/Audio/{Id}/universal.{Container}' => [
            'id'        => true,
            'container' => true,
        ],
        '/Audio/{Id}/universal'             => [
            'id' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Gets an audio stream
     * Requires authentication as user.
     */
    public function getAudioByIdUniversalByContainer(
        string $id,
        string $deviceId,
        string $container,
        null|int $startTimeTicks = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $id, $deviceId, $container, $startTimeTicks);
    }

    /**
     * Gets an audio stream
     * Requires authentication as user.
     */
    public function getAudioByIdUniversal(
        string $id,
        string $deviceId,
        null|int $startTimeTicks = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $id, $deviceId, $startTimeTicks);
    }
}
