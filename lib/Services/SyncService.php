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
        ],
        'getSyncJobs'                          => [
            '/Sync/Jobs',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\Sync\\SyncJob',
        ],
        'postSyncJobs'                         => [
            '/Sync/Jobs',
            'POST',
            '\\EmbyClient\\Model\\Sync\\Model\\SyncJobCreationResult',
        ],
        'getSyncJobitems'                      => [
            '/Sync/JobItems',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\Sync\\Model\\SyncJobItem',
        ],
        'getSyncOptions'                       => [
            '/Sync/Options',
            'GET',
            '\\EmbyClient\\Model\\Sync\\Model\\SyncDialogOptions',
        ],
        'postSyncOfflineactions'               => [
            '/Sync/OfflineActions',
            'POST',
            'void',
        ],
        'postSyncData'                         => [
            '/Sync/Data',
            'POST',
            '\\EmbyClient\\Model\\Sync\\Model\\SyncDataResponse',
        ],
        'postSyncByItemidStatus'               => [
            '/Sync/{ItemId}/Status',
            'POST',
            'void',
        ],
        'getSyncJobsById'                      => [
            '/Sync/Jobs/{Id}',
            'GET',
            '\\EmbyClient\\Model\\Sync\\SyncJob',
        ],
        'postSyncJobsById'                     => [
            '/Sync/Jobs/{Id}',
            'POST',
            'void',
        ],
        'deleteSyncJobsById'                   => [
            '/Sync/Jobs/{Id}',
            'DELETE',
            'void',
        ],
        'postSyncItemsCancel'                  => [
            '/Sync/Items/Cancel',
            'POST',
            'void',
        ],
        'deleteSyncByTargetidItems'            => [
            '/Sync/{TargetId}/Items',
            'DELETE',
            'void',
        ],
        'getSyncItemsReady'                    => [
            '/Sync/Items/Ready',
            'GET',
            'array',
        ],
        'deleteSyncJobitemsById'               => [
            '/Sync/JobItems/{Id}',
            'DELETE',
            'void',
        ],
        'postSyncJobsByIdDelete'               => [
            '/Sync/Jobs/{Id}/Delete',
            'POST',
            'void',
        ],
        'postSyncByTargetidItemsDelete'        => [
            '/Sync/{TargetId}/Items/Delete',
            'POST',
            'void',
        ],
        'postSyncJobitemsByIdTransferred'      => [
            '/Sync/JobItems/{Id}/Transferred',
            'POST',
            'void',
        ],
        'getSyncJobitemsByIdFile'              => [
            '/Sync/JobItems/{Id}/File',
            'GET',
            'mixed',
        ],
        'getSyncJobitemsByIdAdditionalfiles'   => [
            '/Sync/JobItems/{Id}/AdditionalFiles',
            'GET',
            'mixed',
        ],
        'postSyncJobitemsByIdEnable'           => [
            '/Sync/JobItems/{Id}/Enable',
            'POST',
            'void',
        ],
        'postSyncJobitemsByIdDelete'           => [
            '/Sync/JobItems/{Id}/Delete',
            'POST',
            'void',
        ],
        'postSyncJobitemsByIdMarkforremoval'   => [
            '/Sync/JobItems/{Id}/MarkForRemoval',
            'POST',
            'void',
        ],
        'postSyncJobitemsByIdUnmarkforremoval' => [
            '/Sync/JobItems/{Id}/UnmarkForRemoval',
            'POST',
            'void',
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
