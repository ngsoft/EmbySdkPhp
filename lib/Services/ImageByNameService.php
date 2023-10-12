<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class ImageByNameService extends ApiService
{
    protected static array $endpoints        = [
        'getImagesMediainfo'              => [
            '/Images/MediaInfo',
            'GET',
            'array',
        ],
        'getImagesRatings'                => [
            '/Images/Ratings',
            'GET',
            'array',
        ],
        'getImagesGeneral'                => [
            '/Images/General',
            'GET',
            'array',
        ],
        'getImagesGeneralByNameByType'    => [
            '/Images/General/{Name}/{Type}',
            'GET',
            'mixed',
        ],
        'getImagesRatingsByThemeByName'   => [
            '/Images/Ratings/{Theme}/{Name}',
            'GET',
            'mixed',
        ],
        'getImagesMediainfoByThemeByName' => [
            '/Images/MediaInfo/{Theme}/{Name}',
            'GET',
            'mixed',
        ],
    ];
    protected static array $queryParameters  = [];
    protected static array $pathParameters   = [
        '/Images/General/{Name}/{Type}'    => [
            'name' => true,
            'type' => true,
        ],
        '/Images/Ratings/{Theme}/{Name}'   => [
            'name'  => true,
            'theme' => true,
        ],
        '/Images/MediaInfo/{Theme}/{Name}' => [
            'name'  => true,
            'theme' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Gets all media info image by name
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\ImageByNameInfo[]
     */
    public function getImagesMediainfo(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets all rating images by name
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\ImageByNameInfo[]
     */
    public function getImagesRatings(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets all general images by name
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\ImageByNameInfo[]
     */
    public function getImagesGeneral(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets a general image by name
     * No authentication required.
     */
    public function getImagesGeneralByNameByType(
        string $name,
        string $type
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $name, $type);
    }

    /**
     * Gets a rating image by name
     * No authentication required.
     */
    public function getImagesRatingsByThemeByName(
        string $name,
        string $theme
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $name, $theme);
    }

    /**
     * Gets a media info image by name
     * No authentication required.
     */
    public function getImagesMediainfoByThemeByName(
        string $name,
        string $theme
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $name, $theme);
    }
}
