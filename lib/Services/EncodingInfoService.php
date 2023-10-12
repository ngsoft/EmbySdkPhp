<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class EncodingInfoService extends ApiService
{
    protected static array $endpoints        = [
        'getEncodingTonemapoptions'             => [
            '/Encoding/ToneMapOptions',
            'GET',
            '\\EmbyClient\\Model\\MediaEncoding\\Configuration\\ToneMapping\\ToneMapOptionsVisibility',
        ],
        'getEncodingCodecinformationVideo'      => [
            '/Encoding/CodecInformation/Video',
            'GET',
            'array',
        ],
        'getEncodingCodecconfigurationDefaults' => [
            '/Encoding/CodecConfiguration/Defaults',
            'GET',
            'array',
        ],
    ];
    protected static array $queryParameters  = [];
    protected static array $pathParameters   = [];
    protected static array $headerParameters = [];

    /**
     * Gets available tone mapping options
     * Requires authentication as administrator.
     */
    public function getEncodingTonemapoptions(): \EmbyClient\Model\MediaEncoding\Configuration\ToneMapping\ToneMapOptionsVisibility
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets details about available video encoders and decoders
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\MediaEncoding\Codecs\VideoCodecs\VideoCodecBase[]
     */
    public function getEncodingCodecinformationVideo(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets default codec configurations
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\Configuration\CodecConfiguration[]
     */
    public function getEncodingCodecconfigurationDefaults(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }
}
