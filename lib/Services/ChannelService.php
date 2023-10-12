<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class ChannelService extends ApiService
{
    protected static array $endpoints        = [
        'getChannels' => [
            '/Channels',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
        ],
    ];
    protected static array $queryParameters  = [
        '/Channels' => [
            'userId'     => true,
            'startIndex' => true,
            'limit'      => true,
        ],
    ];
    protected static array $pathParameters   = [];
    protected static array $headerParameters = [];

    /**
     * Gets available channels
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getChannels(
        string $userId,
        null|int $limit = null,
        null|int $startIndex = null
    ): \EmbyClient\Model\QueryResult\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $userId, $limit, $startIndex);
    }
}
