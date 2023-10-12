<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class DashboardService extends ApiService
{
    protected static array $endpoints        = [
        'getWebConfigurationpage'  => [
            '/web/ConfigurationPage',
            'GET',
            'mixed',
        ],
        'getWebConfigurationpages' => [
            '/web/ConfigurationPages',
            'GET',
            'array',
        ],
        'getWebStrings'            => [
            '/web/strings',
            'GET',
            'mixed',
        ],
    ];
    protected static array $queryParameters  = [];
    protected static array $pathParameters   = [];
    protected static array $headerParameters = [];

    public function getWebConfigurationpage(): mixed
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * @return \EmbyClient\Model\Emby\Web\Api\ConfigurationPageInfo[]
     */
    public function getWebConfigurationpages(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    public function getWebStrings(): mixed
    {
        return $this->makeApiCall(__FUNCTION__);
    }
}
