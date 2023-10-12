<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class ToneMapOptionsService extends ApiService
{
    protected static array $endpoints        = [
        'getEncodingFulltonemapoptions'    => [
            '/Encoding/FullToneMapOptions',
            'GET',
            '\\EmbyClient\\Model\\Emby\\Web\\GenericEdit\\EditObjectContainer',
        ],
        'postEncodingFulltonemapoptions'   => [
            '/Encoding/FullToneMapOptions',
            'POST',
            'void',
        ],
        'getEncodingPublictonemapoptions'  => [
            '/Encoding/PublicToneMapOptions',
            'GET',
            '\\EmbyClient\\Model\\Emby\\Web\\GenericEdit\\EditObjectContainer',
        ],
        'postEncodingPublictonemapoptions' => [
            '/Encoding/PublicToneMapOptions',
            'POST',
            'void',
        ],
    ];
    protected static array $queryParameters  = [];
    protected static array $pathParameters   = [];
    protected static array $headerParameters = [];

    /**
     * Gets the tone mapping options
     * Requires authentication as user.
     */
    public function getEncodingFulltonemapoptions(): \EmbyClient\Model\Emby\Web\GenericEdit\EditObjectContainer
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Updates the tone mapping options
     * Requires authentication as administrator.
     */
    public function postEncodingFulltonemapoptions(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets the tone mapping options
     * Requires authentication as user.
     */
    public function getEncodingPublictonemapoptions(): \EmbyClient\Model\Emby\Web\GenericEdit\EditObjectContainer
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Updates the tone mapping options
     * Requires authentication as administrator.
     */
    public function postEncodingPublictonemapoptions(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }
}
