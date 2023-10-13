<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class LocalizationService extends ApiService
{
    protected static array $endpoints        = [
        'getLocalizationParentalratings' => [
            '/Localization/ParentalRatings',
            'GET',
            'array',
            '\\EmbyClient\\Model\\ParentalRating',
        ],
        'getLocalizationOptions'         => [
            '/Localization/Options',
            'GET',
            'array',
            '\\EmbyClient\\Model\\Globalization\\LocalizatonOption',
        ],
        'getLocalizationCountries'       => [
            '/Localization/Countries',
            'GET',
            'array',
            '\\EmbyClient\\Model\\Globalization\\CountryInfo',
        ],
        'getLocalizationCultures'        => [
            '/Localization/Cultures',
            'GET',
            'array',
            '\\EmbyClient\\Model\\Globalization\\CultureDto',
        ],
    ];
    protected static array $queryParameters  = [];
    protected static array $pathParameters   = [];
    protected static array $headerParameters = [];

    /**
     * Gets known parental ratings
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\ParentalRating[]
     */
    public function getLocalizationParentalratings(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets localization options
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\Globalization\LocalizatonOption[]
     */
    public function getLocalizationOptions(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets known countries
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\Globalization\CountryInfo[]
     */
    public function getLocalizationCountries(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets known cultures
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\Globalization\CultureDto[]
     */
    public function getLocalizationCultures(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }
}
