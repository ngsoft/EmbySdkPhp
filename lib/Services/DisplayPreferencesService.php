<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class DisplayPreferencesService extends ApiService
{
    protected static array $endpoints        = [
        'getDisplaypreferencesById'                    => [
            '/DisplayPreferences/{Id}',
            'GET',
            '\\EmbyClient\\Model\\DisplayPreferences',
        ],
        'postDisplaypreferencesByDisplaypreferencesid' => [
            '/DisplayPreferences/{DisplayPreferencesId}',
            'POST',
            'void',
        ],
    ];
    protected static array $queryParameters  = [
        '/DisplayPreferences/{Id}'                   => [
            'userId' => true,
            'client' => true,
        ],
        '/DisplayPreferences/{DisplayPreferencesId}' => [
            'userId' => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/DisplayPreferences/{Id}'                   => [
            'id' => true,
        ],
        '/DisplayPreferences/{DisplayPreferencesId}' => [
            'displayPreferencesId' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Gets a user's display preferences for an item
     * Requires authentication as user.
     */
    public function getDisplaypreferencesById(
        string $id,
        string $userId,
        string $client
    ): \EmbyClient\Model\DisplayPreferences {
        return $this->makeApiCall(__FUNCTION__, $id, $userId, $client);
    }

    /**
     * Updates a user's display preferences for an item
     * Requires authentication as user.
     */
    public function postDisplaypreferencesByDisplaypreferencesid(
        string $displayPreferencesId,
        string $userId
    ): void {
        $this->makeApiCall(__FUNCTION__, $displayPreferencesId, $userId);
    }
}
