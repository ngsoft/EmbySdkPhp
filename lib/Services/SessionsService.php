<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class SessionsService extends ApiService
{
    protected static array $endpoints        = [
        'getSessions'                         => [
            '/Sessions',
            'GET',
            'array',
            '\\EmbyClient\\Model\\Session\\SessionInfo',
        ],
        'getAuthProviders'                    => [
            '/Auth/Providers',
            'GET',
            'array',
            '\\EmbyClient\\Model\\NameIdPair',
        ],
        'getAuthKeys'                         => [
            '/Auth/Keys',
            'GET',
            'mixed',
            false,
        ],
        'postAuthKeys'                        => [
            '/Auth/Keys',
            'POST',
            'mixed',
            false,
        ],
        'getSessionsPlayqueue'                => [
            '/Sessions/PlayQueue',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
            false,
        ],
        'postSessionsLogout'                  => [
            '/Sessions/Logout',
            'POST',
            'void',
            false,
        ],
        'postSessionsCapabilities'            => [
            '/Sessions/Capabilities',
            'POST',
            'void',
            false,
        ],
        'deleteAuthKeysByKey'                 => [
            '/Auth/Keys/{Key}',
            'DELETE',
            'mixed',
            false,
        ],
        'postSessionsByIdViewing'             => [
            '/Sessions/{Id}/Viewing',
            'POST',
            'void',
            false,
        ],
        'postSessionsByIdMessage'             => [
            '/Sessions/{Id}/Message',
            'POST',
            'void',
            false,
        ],
        'postSessionsByIdPlaying'             => [
            '/Sessions/{Id}/Playing',
            'POST',
            'mixed',
            false,
        ],
        'postSessionsByIdCommand'             => [
            '/Sessions/{Id}/Command',
            'POST',
            'void',
            false,
        ],
        'postSessionsCapabilitiesFull'        => [
            '/Sessions/Capabilities/Full',
            'POST',
            'void',
            false,
        ],
        'postAuthKeysByKeyDelete'             => [
            '/Auth/Keys/{Key}/Delete',
            'POST',
            'mixed',
            false,
        ],
        'postSessionsByIdPlayingByCommand'    => [
            '/Sessions/{Id}/Playing/{Command}',
            'POST',
            'void',
            false,
        ],
        'postSessionsByIdSystemByCommand'     => [
            '/Sessions/{Id}/System/{Command}',
            'POST',
            'void',
            false,
        ],
        'postSessionsByIdCommandByCommand'    => [
            '/Sessions/{Id}/Command/{Command}',
            'POST',
            'void',
            false,
        ],
        'postSessionsByIdUsersByUserid'       => [
            '/Sessions/{Id}/Users/{UserId}',
            'POST',
            'void',
            false,
        ],
        'deleteSessionsByIdUsersByUserid'     => [
            '/Sessions/{Id}/Users/{UserId}',
            'DELETE',
            'void',
            false,
        ],
        'postSessionsByIdUsersByUseridDelete' => [
            '/Sessions/{Id}/Users/{UserId}/Delete',
            'POST',
            'void',
            false,
        ],
    ];
    protected static array $parameters       = [
        'getSessions'                         => [
            'controllableByUserId',
            'deviceId',
            'id',
        ],
        'getAuthProviders'                    => [],
        'getAuthKeys'                         => [
            'startIndex',
            'limit',
        ],
        'postAuthKeys'                        => [
            'app',
        ],
        'getSessionsPlayqueue'                => [
            'id',
            'deviceId',
        ],
        'postSessionsLogout'                  => [],
        'postSessionsCapabilities'            => [
            'id',
            'playableMediaTypes',
            'supportedCommands',
            'supportsMediaControl',
            'supportsSync',
        ],
        'deleteAuthKeysByKey'                 => [
            'key',
        ],
        'postSessionsByIdViewing'             => [
            'id',
            'itemType',
            'itemId',
            'itemName',
        ],
        'postSessionsByIdMessage'             => [
            'id',
            'text',
            'header',
            'timeoutMs',
        ],
        'postSessionsByIdPlaying'             => [
            'id',
            'itemIds',
            'playCommand',
            'startPositionTicks',
        ],
        'postSessionsByIdCommand'             => [
            'id',
        ],
        'postSessionsCapabilitiesFull'        => [
            'id',
        ],
        'postAuthKeysByKeyDelete'             => [
            'key',
        ],
        'postSessionsByIdPlayingByCommand'    => [
            'id',
            'command',
        ],
        'postSessionsByIdSystemByCommand'     => [
            'id',
            'command',
        ],
        'postSessionsByIdCommandByCommand'    => [
            'id',
            'command',
        ],
        'postSessionsByIdUsersByUserid'       => [
            'id',
            'userId',
        ],
        'deleteSessionsByIdUsersByUserid'     => [
            'id',
            'userId',
        ],
        'postSessionsByIdUsersByUseridDelete' => [
            'id',
            'userId',
        ],
    ];
    protected static array $queryParameters  = [
        '/Sessions'                   => [
            'controllableByUserId' => true,
            'deviceId'             => true,
            'id'                   => true,
        ],
        '/Auth/Keys'                  => [
            'startIndex' => true,
            'limit'      => true,
            'app'        => true,
        ],
        '/Sessions/PlayQueue'         => [
            'id'       => true,
            'deviceId' => true,
        ],
        '/Sessions/Capabilities'      => [
            'id'                   => true,
            'playableMediaTypes'   => true,
            'supportedCommands'    => true,
            'supportsMediaControl' => true,
            'supportsSync'         => true,
        ],
        '/Sessions/{Id}/Viewing'      => [
            'itemType' => true,
            'itemId'   => true,
            'itemName' => true,
        ],
        '/Sessions/{Id}/Message'      => [
            'text'      => true,
            'header'    => true,
            'timeoutMs' => true,
        ],
        '/Sessions/{Id}/Playing'      => [
            'itemIds'            => true,
            'startPositionTicks' => true,
            'playCommand'        => true,
        ],
        '/Sessions/Capabilities/Full' => [
            'id' => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/Auth/Keys/{Key}'                     => [
            'key' => true,
        ],
        '/Sessions/{Id}/Viewing'               => [
            'id' => true,
        ],
        '/Sessions/{Id}/Message'               => [
            'id' => true,
        ],
        '/Sessions/{Id}/Playing'               => [
            'id' => true,
        ],
        '/Sessions/{Id}/Command'               => [
            'id' => true,
        ],
        '/Auth/Keys/{Key}/Delete'              => [
            'key' => true,
        ],
        '/Sessions/{Id}/Playing/{Command}'     => [
            'id'      => true,
            'command' => true,
        ],
        '/Sessions/{Id}/System/{Command}'      => [
            'id'      => true,
            'command' => true,
        ],
        '/Sessions/{Id}/Command/{Command}'     => [
            'id'      => true,
            'command' => true,
        ],
        '/Sessions/{Id}/Users/{UserId}'        => [
            'id'     => true,
            'userId' => true,
        ],
        '/Sessions/{Id}/Users/{UserId}/Delete' => [
            'id'     => true,
            'userId' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Gets a list of sessions
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\Session\SessionInfo[]
     */
    public function getSessions(
        string $controllableByUserId,
        string $deviceId,
        string $id
    ): array {
        return $this->makeApiCall(__FUNCTION__, $controllableByUserId, $deviceId, $id);
    }

    /**
     * @return \EmbyClient\Model\NameIdPair[]
     */
    public function getAuthProviders(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    public function getAuthKeys(
        int $startIndex,
        null|int $limit = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $startIndex, $limit);
    }

    public function postAuthKeys(string $app): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $app);
    }

    /**
     * Gets a the current play queue from a session
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getSessionsPlayqueue(
        string $id,
        string $deviceId
    ): \EmbyClient\Model\QueryResult\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $id, $deviceId);
    }

    /**
     * Reports that a session has ended
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/User-Authentication API Documentation: Authentication
     */
    public function postSessionsLogout(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Updates capabilities for a device
     * Requires authentication as user.
     */
    public function postSessionsCapabilities(
        string $id,
        string $playableMediaTypes,
        string $supportedCommands,
        bool $supportsMediaControl,
        bool $supportsSync
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $playableMediaTypes, $supportedCommands, $supportsMediaControl, $supportsSync);
    }

    public function deleteAuthKeysByKey(string $key): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $key);
    }

    /**
     * Instructs a session to browse to an item or view
     * Requires authentication as user.
     */
    public function postSessionsByIdViewing(
        string $id,
        string $itemType,
        string $itemId,
        string $itemName
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $itemType, $itemId, $itemName);
    }

    /**
     * Issues a command to a client to display a message to the user
     * Requires authentication as user.
     */
    public function postSessionsByIdMessage(
        string $id,
        string $text,
        string $header,
        null|int $timeoutMs = null
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $text, $header, $timeoutMs);
    }

    /**
     * Instructs a session to play an item
     * Requires authentication as user.
     */
    public function postSessionsByIdPlaying(
        string $id,
        array $itemIds,
        \EmbyClient\Model\PlayCommand $playCommand,
        null|int $startPositionTicks = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $id, $itemIds, $playCommand, $startPositionTicks);
    }

    /**
     * Issues a system command to a client
     * Requires authentication as user.
     */
    public function postSessionsByIdCommand(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Updates capabilities for a device
     * Requires authentication as user.
     */
    public function postSessionsCapabilitiesFull(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    public function postAuthKeysByKeyDelete(string $key): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $key);
    }

    /**
     * Issues a playstate command to a client
     * Requires authentication as user.
     */
    public function postSessionsByIdPlayingByCommand(
        string $id,
        \EmbyClient\Model\PlaystateCommand $command
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $command);
    }

    /**
     * Issues a system command to a client
     * Requires authentication as user.
     */
    public function postSessionsByIdSystemByCommand(
        string $id,
        string $command
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $command);
    }

    /**
     * Issues a system command to a client
     * Requires authentication as user.
     */
    public function postSessionsByIdCommandByCommand(
        string $id,
        string $command
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $command);
    }

    /**
     * Adds an additional user to a session
     * Requires authentication as user.
     */
    public function postSessionsByIdUsersByUserid(
        string $id,
        string $userId
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $userId);
    }

    /**
     * Removes an additional user from a session
     * Requires authentication as user.
     */
    public function deleteSessionsByIdUsersByUserid(
        string $id,
        string $userId
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $userId);
    }

    /**
     * Removes an additional user from a session
     * Requires authentication as user.
     */
    public function postSessionsByIdUsersByUseridDelete(
        string $id,
        string $userId
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $userId);
    }
}
