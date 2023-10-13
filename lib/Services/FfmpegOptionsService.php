<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class FfmpegOptionsService extends ApiService
{
    protected static array $endpoints        = [
        'getEncodingFfmpegoptions'  => [
            '/Encoding/FfmpegOptions',
            'GET',
            '\\EmbyClient\\Model\\Emby\\Web\\GenericEdit\\EditObjectContainer',
            false,
        ],
        'postEncodingFfmpegoptions' => [
            '/Encoding/FfmpegOptions',
            'POST',
            'void',
            false,
        ],
    ];
    protected static array $parameters       = [
        'getEncodingFfmpegoptions'  => [],
        'postEncodingFfmpegoptions' => [],
    ];
    protected static array $queryParameters  = [];
    protected static array $pathParameters   = [];
    protected static array $headerParameters = [];

    /**
     * Gets the ffmpeg options
     * Requires authentication as user.
     */
    public function getEncodingFfmpegoptions(): \EmbyClient\Model\Emby\Web\GenericEdit\EditObjectContainer
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Updates the ffmpeg options
     * Requires authentication as administrator.
     */
    public function postEncodingFfmpegoptions(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }
}
