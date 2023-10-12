<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class SuggestionsService extends ApiService
{
    protected static array $endpoints        = [
        'getUsersByUseridSuggestions' => [
            '/Users/{UserId}/Suggestions',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
        ],
    ];
    protected static array $queryParameters  = [];
    protected static array $pathParameters   = [
        '/Users/{UserId}/Suggestions' => [
            'userId' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Gets items based on a query.
     * No authentication required.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getUsersByUseridSuggestions(string $userId): \EmbyClient\Model\QueryResult\BaseItemDto
    {
        return $this->makeApiCall(__FUNCTION__, $userId);
    }
}
