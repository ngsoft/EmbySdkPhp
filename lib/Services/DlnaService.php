<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class DlnaService extends ApiService
{
    protected static array $endpoints        = [
        'getDlnaProfileinfos'    => [
            '/Dlna/ProfileInfos',
            'GET',
            'array',
            '\\EmbyClient\\Model\\Emby\\Dlna\\Profiles\\DlnaProfile',
        ],
        'postDlnaProfiles'       => [
            '/Dlna/Profiles',
            'POST',
            'void',
            false,
        ],
        'getDlnaProfilesById'    => [
            '/Dlna/Profiles/{Id}',
            'GET',
            '\\EmbyClient\\Model\\Emby\\Dlna\\Profiles\\DlnaProfile',
            false,
        ],
        'postDlnaProfilesById'   => [
            '/Dlna/Profiles/{Id}',
            'POST',
            'void',
            false,
        ],
        'deleteDlnaProfilesById' => [
            '/Dlna/Profiles/{Id}',
            'DELETE',
            'void',
            false,
        ],
        'getDlnaProfilesDefault' => [
            '/Dlna/Profiles/Default',
            'GET',
            '\\EmbyClient\\Model\\Emby\\Dlna\\Profiles\\DlnaProfile',
            false,
        ],
    ];
    protected static array $queryParameters  = [];
    protected static array $pathParameters   = [
        '/Dlna/Profiles/{Id}' => [
            'id' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Gets a list of profiles
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\Emby\Dlna\Profiles\DlnaProfile[]
     */
    public function getDlnaProfileinfos(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Creates a profile
     * Requires authentication as administrator.
     */
    public function postDlnaProfiles(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets a single profile
     * Requires authentication as administrator.
     */
    public function getDlnaProfilesById(string $id): \EmbyClient\Model\Emby\Dlna\Profiles\DlnaProfile
    {
        return $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Updates a profile
     * Requires authentication as administrator.
     */
    public function postDlnaProfilesById(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Deletes a profile
     * Requires authentication as administrator.
     */
    public function deleteDlnaProfilesById(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Gets the default profile
     * Requires authentication as administrator.
     */
    public function getDlnaProfilesDefault(): \EmbyClient\Model\Emby\Dlna\Profiles\DlnaProfile
    {
        return $this->makeApiCall(__FUNCTION__);
    }
}
