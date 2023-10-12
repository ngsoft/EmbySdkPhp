<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class ActivityLogService extends ApiService
{
    protected static array $endpoints        = [
        'getSystemActivitylogEntries' => [
            '/System/ActivityLog/Entries',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\ActivityLogEntry',
        ],
    ];
    protected static array $queryParameters  = [
        '/System/ActivityLog/Entries' => [
            'startIndex' => true,
            'limit'      => true,
            'minDate'    => true,
        ],
    ];
    protected static array $pathParameters   = [];
    protected static array $headerParameters = [];

    /**
     * Gets activity log entries
     * Requires authentication as administrator.
     */
    public function getSystemActivitylogEntries(
        string $minDate,
        null|int $limit = null,
        null|int $startIndex = null
    ): \EmbyClient\Model\QueryResult\ActivityLogEntry {
        return $this->makeApiCall(__FUNCTION__, $minDate, $limit, $startIndex);
    }
}
