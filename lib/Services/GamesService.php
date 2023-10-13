<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class GamesService extends ApiService
{
    protected static array $endpoints        = [
        'getGamesSystemsummaries' => [
            '/Games/SystemSummaries',
            'GET',
            'array',
            '\\EmbyClient\\Model\\GameSystemSummary',
        ],
    ];
    protected static array $queryParameters  = [
        '/Games/SystemSummaries' => [
            'userId' => true,
        ],
    ];
    protected static array $pathParameters   = [];
    protected static array $headerParameters = [];

    /**
     * Finds games similar to a given game.
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\GameSystemSummary[]
     */
    public function getGamesSystemsummaries(string $userId): array
    {
        return $this->makeApiCall(__FUNCTION__, $userId);
    }
}
