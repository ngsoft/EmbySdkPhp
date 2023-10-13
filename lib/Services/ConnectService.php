<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class ConnectService extends ApiService
{
    protected static array $endpoints        = [
        'getConnectPending'              => [
            '/Connect/Pending',
            'GET',
            'mixed',
            false,
        ],
        'getConnectExchange'             => [
            '/Connect/Exchange',
            'GET',
            '\\EmbyClient\\Model\\Connect\\ConnectAuthenticationExchangeResult',
            false,
        ],
        'postUsersByIdConnectLink'       => [
            '/Users/{Id}/Connect/Link',
            'POST',
            '\\EmbyClient\\Model\\Connect\\UserLinkResult',
            false,
        ],
        'deleteUsersByIdConnectLink'     => [
            '/Users/{Id}/Connect/Link',
            'DELETE',
            'void',
            false,
        ],
        'postUsersByIdConnectLinkDelete' => [
            '/Users/{Id}/Connect/Link/Delete',
            'POST',
            'void',
            false,
        ],
    ];
    protected static array $parameters       = [
        'getConnectPending'              => [],
        'getConnectExchange'             => [
            'connectUserId',
        ],
        'postUsersByIdConnectLink'       => [
            'id',
            'connectUsername',
        ],
        'deleteUsersByIdConnectLink'     => [
            'id',
        ],
        'postUsersByIdConnectLinkDelete' => [
            'id',
        ],
    ];
    protected static array $queryParameters  = [
        '/Connect/Exchange'        => [
            'connectUserId' => true,
        ],
        '/Users/{Id}/Connect/Link' => [
            'connectUsername' => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/Users/{Id}/Connect/Link'        => [
            'id' => true,
        ],
        '/Users/{Id}/Connect/Link/Delete' => [
            'id' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Creates a Connect link for a user
     * Requires authentication as administrator.
     */
    public function getConnectPending(): mixed
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets the corresponding local user from a connect user id
     * Requires authentication as user.
     */
    public function getConnectExchange(string $connectUserId): \EmbyClient\Model\Connect\ConnectAuthenticationExchangeResult
    {
        return $this->makeApiCall(__FUNCTION__, $connectUserId);
    }

    /**
     * Creates a Connect link for a user
     * Requires authentication as administrator.
     */
    public function postUsersByIdConnectLink(
        string $id,
        string $connectUsername
    ): \EmbyClient\Model\Connect\UserLinkResult {
        return $this->makeApiCall(__FUNCTION__, $id, $connectUsername);
    }

    /**
     * Removes a Connect link for a user
     * Requires authentication as administrator.
     */
    public function deleteUsersByIdConnectLink(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Removes a Connect link for a user
     * Requires authentication as administrator.
     */
    public function postUsersByIdConnectLinkDelete(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }
}
