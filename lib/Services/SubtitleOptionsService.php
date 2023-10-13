<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class SubtitleOptionsService extends ApiService
{
    protected static array $endpoints        = [
        'getEncodingSubtitleoptions'  => [
            '/Encoding/SubtitleOptions',
            'GET',
            '\\EmbyClient\\Model\\Emby\\Web\\GenericEdit\\EditObjectContainer',
            false,
        ],
        'postEncodingSubtitleoptions' => [
            '/Encoding/SubtitleOptions',
            'POST',
            'void',
            false,
        ],
    ];
    protected static array $parameters       = [
        'getEncodingSubtitleoptions'  => [],
        'postEncodingSubtitleoptions' => [],
    ];
    protected static array $queryParameters  = [];
    protected static array $pathParameters   = [];
    protected static array $headerParameters = [];

    /**
     * Gets the subtitle options
     * Requires authentication as user.
     */
    public function getEncodingSubtitleoptions(): \EmbyClient\Model\Emby\Web\GenericEdit\EditObjectContainer
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Updates the subtitle options
     * Requires authentication as administrator.
     */
    public function postEncodingSubtitleoptions(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }
}
