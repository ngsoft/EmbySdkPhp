<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class SyncService extends ApiService
{
    protected static array $endpoints        = [
        'getSyncTargets'                       => [
            '/Sync/Targets',
            'GET',
            'array',
            '\\EmbyClient\\Model\\Sync\\SyncTarget',
        ],
        'getSyncJobs'                          => [
            '/Sync/Jobs',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\Sync\\SyncJob',
            false,
        ],
        'postSyncJobs'                         => [
            '/Sync/Jobs',
            'POST',
            '\\EmbyClient\\Model\\Sync\\Model\\SyncJobCreationResult',
            false,
        ],
        'getSyncJobitems'                      => [
            '/Sync/JobItems',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\Sync\\Model\\SyncJobItem',
            false,
        ],
        'getSyncOptions'                       => [
            '/Sync/Options',
            'GET',
            '\\EmbyClient\\Model\\Sync\\Model\\SyncDialogOptions',
            false,
        ],
        'postSyncOfflineactions'               => [
            '/Sync/OfflineActions',
            'POST',
            'void',
            false,
        ],
        'postSyncData'                         => [
            '/Sync/Data',
            'POST',
            '\\EmbyClient\\Model\\Sync\\Model\\SyncDataResponse',
            false,
        ],
        'postSyncByItemidStatus'               => [
            '/Sync/{ItemId}/Status',
            'POST',
            'void',
            false,
        ],
        'getSyncJobsById'                      => [
            '/Sync/Jobs/{Id}',
            'GET',
            '\\EmbyClient\\Model\\Sync\\SyncJob',
            false,
        ],
        'postSyncJobsById'                     => [
            '/Sync/Jobs/{Id}',
            'POST',
            'void',
            false,
        ],
        'deleteSyncJobsById'                   => [
            '/Sync/Jobs/{Id}',
            'DELETE',
            'void',
            false,
        ],
        'postSyncItemsCancel'                  => [
            '/Sync/Items/Cancel',
            'POST',
            'void',
            false,
        ],
        'deleteSyncByTargetidItems'            => [
            '/Sync/{TargetId}/Items',
            'DELETE',
            'void',
            false,
        ],
        'getSyncItemsReady'                    => [
            '/Sync/Items/Ready',
            'GET',
            'array',
            '\\EmbyClient\\Model\\Sync\\Model\\SyncedItem',
        ],
        'deleteSyncJobitemsById'               => [
            '/Sync/JobItems/{Id}',
            'DELETE',
            'void',
            false,
        ],
        'postSyncJobsByIdDelete'               => [
            '/Sync/Jobs/{Id}/Delete',
            'POST',
            'void',
            false,
        ],
        'postSyncByTargetidItemsDelete'        => [
            '/Sync/{TargetId}/Items/Delete',
            'POST',
            'void',
            false,
        ],
        'postSyncJobitemsByIdTransferred'      => [
            '/Sync/JobItems/{Id}/Transferred',
            'POST',
            'void',
            false,
        ],
        'getSyncJobitemsByIdFile'              => [
            '/Sync/JobItems/{Id}/File',
            'GET',
            'mixed',
            false,
        ],
        'getSyncJobitemsByIdAdditionalfiles'   => [
            '/Sync/JobItems/{Id}/AdditionalFiles',
            'GET',
            'mixed',
            false,
        ],
        'postSyncJobitemsByIdEnable'           => [
            '/Sync/JobItems/{Id}/Enable',
            'POST',
            'void',
            false,
        ],
        'postSyncJobitemsByIdDelete'           => [
            '/Sync/JobItems/{Id}/Delete',
            'POST',
            'void',
            false,
        ],
        'postSyncJobitemsByIdMarkforremoval'   => [
            '/Sync/JobItems/{Id}/MarkForRemoval',
            'POST',
            'void',
            false,
        ],
        'postSyncJobitemsByIdUnmarkforremoval' => [
            '/Sync/JobItems/{Id}/UnmarkForRemoval',
            'POST',
            'void',
            false,
        ],
    ];
    protected static array $parameters       = [
        'getSyncTargets'                       => [
            'userId',
        ],
        'getSyncJobs'                          => [],
        'postSyncJobs'                         => [],
        'getSyncJobitems'                      => [],
        'getSyncOptions'                       => [
            'userId',
            'itemIds',
            'parentId',
            'targetId',
            'category',
        ],
        'postSyncOfflineactions'               => [],
        'postSyncData'                         => [],
        'postSyncByItemidStatus'               => [
            'itemId',
        ],
        'getSyncJobsById'                      => [
            'id',
        ],
        'postSyncJobsById'                     => [
            'id',
        ],
        'deleteSyncJobsById'                   => [
            'id',
        ],
        'postSyncItemsCancel'                  => [
            'itemIds',
        ],
        'deleteSyncByTargetidItems'            => [
            'targetId',
            'itemIds',
        ],
        'getSyncItemsReady'                    => [
            'targetId',
        ],
        'deleteSyncJobitemsById'               => [
            'id',
        ],
        'postSyncJobsByIdDelete'               => [
            'id',
        ],
        'postSyncByTargetidItemsDelete'        => [
            'targetId',
            'itemIds',
        ],
        'postSyncJobitemsByIdTransferred'      => [
            'id',
        ],
        'getSyncJobitemsByIdFile'              => [
            'id',
        ],
        'getSyncJobitemsByIdAdditionalfiles'   => [
            'id',
            'name',
        ],
        'postSyncJobitemsByIdEnable'           => [
            'id',
        ],
        'postSyncJobitemsByIdDelete'           => [
            'id',
        ],
        'postSyncJobitemsByIdMarkforremoval'   => [
            'id',
        ],
        'postSyncJobitemsByIdUnmarkforremoval' => [
            'id',
        ],
    ];
    protected static array $queryParameters  = [
        '/Sync/Targets'                       => [
            'userId' => true,
        ],
        '/Sync/Options'                       => [
            'userId'   => true,
            'itemIds'  => true,
            'parentId' => true,
            'targetId' => true,
            'category' => true,
        ],
        '/Sync/Items/Cancel'                  => [
            'itemIds' => true,
        ],
        '/Sync/{TargetId}/Items'              => [
            'itemIds' => true,
        ],
        '/Sync/Items/Ready'                   => [
            'targetId' => true,
        ],
        '/Sync/{TargetId}/Items/Delete'       => [
            'itemIds' => true,
        ],
        '/Sync/JobItems/{Id}/AdditionalFiles' => [
            'name' => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/Sync/{ItemId}/Status'                => [
            'itemId' => true,
        ],
        '/Sync/Jobs/{Id}'                      => [
            'id' => true,
        ],
        '/Sync/{TargetId}/Items'               => [
            'targetId' => true,
        ],
        '/Sync/JobItems/{Id}'                  => [
            'id' => true,
        ],
        '/Sync/Jobs/{Id}/Delete'               => [
            'id' => true,
        ],
        '/Sync/{TargetId}/Items/Delete'        => [
            'targetId' => true,
        ],
        '/Sync/JobItems/{Id}/Transferred'      => [
            'id' => true,
        ],
        '/Sync/JobItems/{Id}/File'             => [
            'id' => true,
        ],
        '/Sync/JobItems/{Id}/AdditionalFiles'  => [
            'id' => true,
        ],
        '/Sync/JobItems/{Id}/Enable'           => [
            'id' => true,
        ],
        '/Sync/JobItems/{Id}/Delete'           => [
            'id' => true,
        ],
        '/Sync/JobItems/{Id}/MarkForRemoval'   => [
            'id' => true,
        ],
        '/Sync/JobItems/{Id}/UnmarkForRemoval' => [
            'id' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Gets a list of available sync targets.
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\Sync\SyncTarget[]
     */
    public function getSyncTargets(string $userId): array
    {
        return $this->makeApiCall(__FUNCTION__, $userId);
    }

    /**
     * Gets sync jobs.
     * Requires authentication as user.
     */
    public function getSyncJobs(): \EmbyClient\Model\QueryResult\Sync\SyncJob
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets sync jobs.
     * Requires authentication as user.
     */
    public function postSyncJobs(): \EmbyClient\Model\Sync\Model\SyncJobCreationResult
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets sync job items.
     * Requires authentication as user.
     */
    public function getSyncJobitems(): \EmbyClient\Model\QueryResult\Sync\Model\SyncJobItem
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets a list of available sync targets.
     * Requires authentication as user.
     */
    public function getSyncOptions(
        string $userId,
        string $itemIds,
        string $parentId,
        string $targetId,
        \EmbyClient\Model\Sync\SyncCategory $category
    ): \EmbyClient\Model\Sync\Model\SyncDialogOptions {
        return $this->makeApiCall(__FUNCTION__, $userId, $itemIds, $parentId, $targetId, $category);
    }

    /**
     * Reports an action that occurred while offline.
     * Requires authentication as user.
     */
    public function postSyncOfflineactions(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Syncs data between device and server
     * Requires authentication as user.
     */
    public function postSyncData(): \EmbyClient\Model\Sync\Model\SyncDataResponse
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets sync status for an item.
     * Requires authentication as user.
     */
    public function postSyncByItemidStatus(string $itemId): void
    {
        $this->makeApiCall(__FUNCTION__, $itemId);
    }

    /**
     * Gets a sync job.
     * Requires authentication as user.
     */
    public function getSyncJobsById(string $id): \EmbyClient\Model\Sync\SyncJob
    {
        return $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Updates a sync job.
     * Requires authentication as user.
     */
    public function postSyncJobsById(int $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Cancels a sync job.
     * Requires authentication as user.
     */
    public function deleteSyncJobsById(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Cancels items from a sync target
     * Requires authentication as user.
     */
    public function postSyncItemsCancel(string $itemIds): void
    {
        $this->makeApiCall(__FUNCTION__, $itemIds);
    }

    /**
     * Cancels items from a sync target
     * Requires authentication as user.
     */
    public function deleteSyncByTargetidItems(
        string $targetId,
        string $itemIds
    ): void {
        $this->makeApiCall(__FUNCTION__, $targetId, $itemIds);
    }

    /**
     * Gets ready to download sync items.
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\Sync\Model\SyncedItem[]
     */
    public function getSyncItemsReady(string $targetId): array
    {
        return $this->makeApiCall(__FUNCTION__, $targetId);
    }

    /**
     * Cancels a sync job item
     * Requires authentication as user.
     */
    public function deleteSyncJobitemsById(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Cancels a sync job.
     * Requires authentication as user.
     */
    public function postSyncJobsByIdDelete(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Cancels items from a sync target
     * Requires authentication as user.
     */
    public function postSyncByTargetidItemsDelete(
        string $targetId,
        string $itemIds
    ): void {
        $this->makeApiCall(__FUNCTION__, $targetId, $itemIds);
    }

    /**
     * Reports that a sync job item has successfully been transferred.
     * Requires authentication as user.
     */
    public function postSyncJobitemsByIdTransferred(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Gets a sync job item file
     * Requires authentication as user.
     */
    public function getSyncJobitemsByIdFile(string $id): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Gets a sync job item file
     * Requires authentication as user.
     */
    public function getSyncJobitemsByIdAdditionalfiles(
        string $id,
        string $name
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $id, $name);
    }

    /**
     * Enables a cancelled or queued sync job item
     * Requires authentication as user.
     */
    public function postSyncJobitemsByIdEnable(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Cancels a sync job item
     * Requires authentication as user.
     */
    public function postSyncJobitemsByIdDelete(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Marks a job item for removal
     * Requires authentication as user.
     */
    public function postSyncJobitemsByIdMarkforremoval(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Unmarks a job item for removal
     * Requires authentication as user.
     */
    public function postSyncJobitemsByIdUnmarkforremoval(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }
}
