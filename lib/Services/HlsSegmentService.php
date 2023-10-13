<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class HlsSegmentService extends ApiService
{
    protected static array $endpoints        = [
        'deleteVideosActiveencodings'     => [
            '/Videos/ActiveEncodings',
            'DELETE',
            'mixed',
            false,
        ],
        'postVideosActiveencodingsDelete' => [
            '/Videos/ActiveEncodings/Delete',
            'POST',
            'mixed',
            false,
        ],
    ];
    protected static array $parameters       = [
        'deleteVideosActiveencodings'     => [
            'deviceId',
            'playSessionId',
        ],
        'postVideosActiveencodingsDelete' => [
            'deviceId',
            'playSessionId',
        ],
    ];
    protected static array $queryParameters  = [
        '/Videos/ActiveEncodings'        => [
            'deviceId'      => true,
            'playSessionId' => true,
        ],
        '/Videos/ActiveEncodings/Delete' => [
            'deviceId'      => true,
            'playSessionId' => true,
        ],
    ];
    protected static array $pathParameters   = [];
    protected static array $headerParameters = [];

    public function deleteVideosActiveencodings(
        string $deviceId,
        string $playSessionId
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $deviceId, $playSessionId);
    }

    public function postVideosActiveencodingsDelete(
        string $deviceId,
        string $playSessionId
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $deviceId, $playSessionId);
    }
}
