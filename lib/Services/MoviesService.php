<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class MoviesService extends ApiService
{
    protected static array $endpoints        = [
        'getMoviesRecommendations' => [
            '/Movies/Recommendations',
            'GET',
            'array',
        ],
    ];
    protected static array $queryParameters  = [
        '/Movies/Recommendations' => [
            'categoryLimit'    => true,
            'itemLimit'        => true,
            'userId'           => true,
            'parentId'         => true,
            'enableImages'     => true,
            'enableUserData'   => true,
            'imageTypeLimit'   => true,
            'enableImageTypes' => true,
        ],
    ];
    protected static array $pathParameters   = [];
    protected static array $headerParameters = [];

    /**
     * Gets movie recommendations
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\RecommendationDto[]
     */
    public function getMoviesRecommendations(
        int $categoryLimit,
        int $itemLimit,
        string $userId,
        string $parentId,
        string $enableImageTypes,
        null|int $imageTypeLimit = null,
        null|bool $enableUserData = null,
        null|bool $enableImages = null
    ): array {
        return $this->makeApiCall(__FUNCTION__, $categoryLimit, $itemLimit, $userId, $parentId, $enableImageTypes, $imageTypeLimit, $enableUserData, $enableImages);
    }
}
