<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class UserService extends ApiService
{
    protected static array $endpoints        = [
        'getUsersPublic'                                => [
            '/Users/Public',
            'GET',
            'array',
            '\\EmbyClient\\Model\\UserDto',
        ],
        'getUsersQuery'                                 => [
            '/Users/Query',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\UserDto',
            false,
        ],
        'getUsersPrefixes'                              => [
            '/Users/Prefixes',
            'GET',
            'array',
            '\\EmbyClient\\Model\\NameIdPair',
        ],
        'getUsersById'                                  => [
            '/Users/{Id}',
            'GET',
            '\\EmbyClient\\Model\\UserDto',
            false,
        ],
        'postUsersById'                                 => [
            '/Users/{Id}',
            'POST',
            'void',
            false,
        ],
        'deleteUsersById'                               => [
            '/Users/{Id}',
            'DELETE',
            'void',
            false,
        ],
        'postUsersAuthenticatebyname'                   => [
            '/Users/AuthenticateByName',
            'POST',
            '\\EmbyClient\\Model\\Authentication\\AuthenticationResult',
            false,
        ],
        'postUsersNew'                                  => [
            '/Users/New',
            'POST',
            '\\EmbyClient\\Model\\UserDto',
            false,
        ],
        'postUsersForgotpassword'                       => [
            '/Users/ForgotPassword',
            'POST',
            '\\EmbyClient\\Model\\Users\\ForgotPasswordResult',
            false,
        ],
        'postUsersByIdDelete'                           => [
            '/Users/{Id}/Delete',
            'POST',
            'void',
            false,
        ],
        'postUsersByIdAuthenticate'                     => [
            '/Users/{Id}/Authenticate',
            'POST',
            '\\EmbyClient\\Model\\Authentication\\AuthenticationResult',
            false,
        ],
        'postUsersByIdPassword'                         => [
            '/Users/{Id}/Password',
            'POST',
            'void',
            false,
        ],
        'postUsersByIdEasypassword'                     => [
            '/Users/{Id}/EasyPassword',
            'POST',
            'void',
            false,
        ],
        'postUsersForgotpasswordPin'                    => [
            '/Users/ForgotPassword/Pin',
            'POST',
            '\\EmbyClient\\Model\\Users\\PinRedeemResult',
            false,
        ],
        'postUsersByIdConfiguration'                    => [
            '/Users/{Id}/Configuration',
            'POST',
            'void',
            false,
        ],
        'postUsersByIdPolicy'                           => [
            '/Users/{Id}/Policy',
            'POST',
            'void',
            false,
        ],
        'deleteUsersByIdTrackselectionsByTracktype'     => [
            '/Users/{Id}/TrackSelections/{TrackType}',
            'DELETE',
            'void',
            false,
        ],
        'postUsersByIdTrackselectionsByTracktypeDelete' => [
            '/Users/{Id}/TrackSelections/{TrackType}/Delete',
            'POST',
            'void',
            false,
        ],
    ];
    protected static array $parameters       = [
        'getUsersPublic'                                => [],
        'getUsersQuery'                                 => [
            'startIndex',
            'nameStartsWithOrGreater',
            'limit',
            'isDisabled',
            'isHidden',
        ],
        'getUsersPrefixes'                              => [
            'startIndex',
            'nameStartsWithOrGreater',
            'limit',
            'isDisabled',
            'isHidden',
        ],
        'getUsersById'                                  => [
            'id',
        ],
        'postUsersById'                                 => [
            'id',
        ],
        'deleteUsersById'                               => [
            'id',
        ],
        'postUsersAuthenticatebyname'                   => [
            'xEmbyAuthorization',
        ],
        'postUsersNew'                                  => [],
        'postUsersForgotpassword'                       => [],
        'postUsersByIdDelete'                           => [
            'id',
        ],
        'postUsersByIdAuthenticate'                     => [
            'id',
        ],
        'postUsersByIdPassword'                         => [
            'id',
        ],
        'postUsersByIdEasypassword'                     => [
            'id',
        ],
        'postUsersForgotpasswordPin'                    => [],
        'postUsersByIdConfiguration'                    => [
            'id',
        ],
        'postUsersByIdPolicy'                           => [
            'id',
        ],
        'deleteUsersByIdTrackselectionsByTracktype'     => [
            'id',
            'trackType',
        ],
        'postUsersByIdTrackselectionsByTracktypeDelete' => [
            'id',
            'trackType',
        ],
    ];
    protected static array $queryParameters  = [
        '/Users/Query'    => [
            'isHidden'                => true,
            'isDisabled'              => true,
            'startIndex'              => true,
            'limit'                   => true,
            'nameStartsWithOrGreater' => true,
        ],
        '/Users/Prefixes' => [
            'isHidden'                => true,
            'isDisabled'              => true,
            'startIndex'              => true,
            'limit'                   => true,
            'nameStartsWithOrGreater' => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/Users/{Id}'                                    => [
            'id' => true,
        ],
        '/Users/{Id}/Delete'                             => [
            'id' => true,
        ],
        '/Users/{Id}/Authenticate'                       => [
            'id' => true,
        ],
        '/Users/{Id}/Password'                           => [
            'id' => true,
        ],
        '/Users/{Id}/EasyPassword'                       => [
            'id' => true,
        ],
        '/Users/{Id}/Configuration'                      => [
            'id' => true,
        ],
        '/Users/{Id}/Policy'                             => [
            'id' => true,
        ],
        '/Users/{Id}/TrackSelections/{TrackType}'        => [
            'id'        => true,
            'trackType' => true,
        ],
        '/Users/{Id}/TrackSelections/{TrackType}/Delete' => [
            'id'        => true,
            'trackType' => true,
        ],
    ];
    protected static array $headerParameters = [
        '/Users/AuthenticateByName' => [
            'X-Emby-Authorization' => true,
        ],
    ];

    /**
     * Gets a list of publicly visible users for display on a login screen.
     * No authentication required.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/User-Authentication API Documentation: Authentication
     *
     * @return \EmbyClient\Model\UserDto[]
     */
    public function getUsersPublic(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets a list of users
     * Requires authentication as administrator.
     */
    public function getUsersQuery(
        int $startIndex,
        string $nameStartsWithOrGreater,
        null|int $limit = null,
        null|bool $isDisabled = null,
        null|bool $isHidden = null
    ): \EmbyClient\Model\QueryResult\UserDto {
        return $this->makeApiCall(__FUNCTION__, $startIndex, $nameStartsWithOrGreater, $limit, $isDisabled, $isHidden);
    }

    /**
     * Gets a list of users
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\NameIdPair[]
     */
    public function getUsersPrefixes(
        int $startIndex,
        string $nameStartsWithOrGreater,
        null|int $limit = null,
        null|bool $isDisabled = null,
        null|bool $isHidden = null
    ): array {
        return $this->makeApiCall(__FUNCTION__, $startIndex, $nameStartsWithOrGreater, $limit, $isDisabled, $isHidden);
    }

    /**
     * Gets a user by Id
     * Requires authentication as user.
     */
    public function getUsersById(string $id): \EmbyClient\Model\UserDto
    {
        return $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Updates a user
     * Requires authentication as user.
     */
    public function postUsersById(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Deletes a user
     * Requires authentication as administrator.
     */
    public function deleteUsersById(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Authenticates a user
     * Authenticate a user by nane and password. A 200 status code indicates success, while anything in the 400 or 500 range indicates failure
     * ---
     * No authentication required.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/User-Authentication API Documentation: Authentication
     */
    public function postUsersAuthenticatebyname(string $xEmbyAuthorization): \EmbyClient\Model\Authentication\AuthenticationResult
    {
        return $this->makeApiCall(__FUNCTION__, $xEmbyAuthorization);
    }

    /**
     * Creates a user
     * Requires authentication as administrator.
     */
    public function postUsersNew(): \EmbyClient\Model\UserDto
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Initiates the forgot password process for a local user
     * No authentication required.
     */
    public function postUsersForgotpassword(): \EmbyClient\Model\Users\ForgotPasswordResult
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Deletes a user
     * Requires authentication as administrator.
     */
    public function postUsersByIdDelete(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Authenticates a user
     * No authentication required.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/User-Authentication API Documentation: Authentication
     */
    public function postUsersByIdAuthenticate(string $id): \EmbyClient\Model\Authentication\AuthenticationResult
    {
        return $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Updates a user's password
     * Requires authentication as user.
     */
    public function postUsersByIdPassword(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Updates a user's easy password
     * Requires authentication as user.
     */
    public function postUsersByIdEasypassword(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Redeems a forgot password pin
     * No authentication required.
     */
    public function postUsersForgotpasswordPin(): \EmbyClient\Model\Users\PinRedeemResult
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Updates a user configuration
     * Requires authentication as user.
     */
    public function postUsersByIdConfiguration(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Updates a user policy
     * Requires authentication as administrator.
     */
    public function postUsersByIdPolicy(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Clears audio or subtitle track selections for a user
     * No authentication required.
     */
    public function deleteUsersByIdTrackselectionsByTracktype(
        string $id,
        string $trackType
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $trackType);
    }

    /**
     * Clears audio or subtitle track selections for a user
     * No authentication required.
     */
    public function postUsersByIdTrackselectionsByTracktypeDelete(
        string $id,
        string $trackType
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $trackType);
    }
}
