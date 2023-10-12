<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class BrandingService extends ApiService
{
    protected static array $endpoints        = [
        'getBrandingConfiguration' => [
            '/Branding/Configuration',
            'GET',
            '\\EmbyClient\\Model\\Branding\\BrandingOptions',
        ],
        'getBrandingCss'           => [
            '/Branding/Css',
            'GET',
            'mixed',
        ],
        'getBrandingCssCss'        => [
            '/Branding/Css.css',
            'GET',
            'mixed',
        ],
    ];
    protected static array $queryParameters  = [];
    protected static array $pathParameters   = [];
    protected static array $headerParameters = [];

    /**
     * Gets branding configuration
     * No authentication required.
     */
    public function getBrandingConfiguration(): \EmbyClient\Model\Branding\BrandingOptions
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets custom css
     * No authentication required.
     */
    public function getBrandingCss(): mixed
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets custom css
     * No authentication required.
     */
    public function getBrandingCssCss(): mixed
    {
        return $this->makeApiCall(__FUNCTION__);
    }
}
