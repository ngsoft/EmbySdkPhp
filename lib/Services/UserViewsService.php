<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class UserViewsService extends ApiService
{
    protected static array $endpoints        = [
        'getUsersByUseridViews' => [
            '/Users/{UserId}/Views',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
        ],
    ];
    protected static array $queryParameters  = [
        '/Users/{UserId}/Views' => [
            'includeExternalContent' => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/Users/{UserId}/Views' => [
            'userId' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * @see https://github.com/MediaBrowser/Emby/wiki/Browsing-the-Library API Documentation: Browsing the Library
     */
    public function getUsersByUseridViews(
        string $userId,
        null|bool $includeExternalContent = null
    ): \EmbyClient\Model\QueryResult\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $userId, $includeExternalContent);
    }
}
