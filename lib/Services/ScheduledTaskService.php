<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class ScheduledTaskService extends ApiService
{
    protected static array $endpoints        = [
        'getScheduledtasks'                   => [
            '/ScheduledTasks',
            'GET',
            'array',
        ],
        'getScheduledtasksById'               => [
            '/ScheduledTasks/{Id}',
            'GET',
            '\\EmbyClient\\Model\\Tasks\\TaskInfo',
        ],
        'postScheduledtasksRunningById'       => [
            '/ScheduledTasks/Running/{Id}',
            'POST',
            'void',
        ],
        'deleteScheduledtasksRunningById'     => [
            '/ScheduledTasks/Running/{Id}',
            'DELETE',
            'void',
        ],
        'postScheduledtasksByIdTriggers'      => [
            '/ScheduledTasks/{Id}/Triggers',
            'POST',
            'void',
        ],
        'postScheduledtasksRunningByIdDelete' => [
            '/ScheduledTasks/Running/{Id}/Delete',
            'POST',
            'void',
        ],
    ];
    protected static array $queryParameters  = [
        '/ScheduledTasks' => [
            'isHidden'  => true,
            'isEnabled' => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/ScheduledTasks/{Id}'                => [
            'id' => true,
        ],
        '/ScheduledTasks/Running/{Id}'        => [
            'id' => true,
        ],
        '/ScheduledTasks/{Id}/Triggers'       => [
            'id' => true,
        ],
        '/ScheduledTasks/Running/{Id}/Delete' => [
            'id' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Gets scheduled tasks
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\Tasks\TaskInfo[]
     */
    public function getScheduledtasks(
        null|bool $isEnabled = null,
        null|bool $isHidden = null
    ): array {
        return $this->makeApiCall(__FUNCTION__, $isEnabled, $isHidden);
    }

    /**
     * Gets a scheduled task, by Id
     * Requires authentication as administrator.
     */
    public function getScheduledtasksById(string $id): \EmbyClient\Model\Tasks\TaskInfo
    {
        return $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Starts a scheduled task
     * Requires authentication as administrator.
     */
    public function postScheduledtasksRunningById(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Stops a scheduled task
     * Requires authentication as administrator.
     */
    public function deleteScheduledtasksRunningById(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Updates the triggers for a scheduled task
     * Requires authentication as administrator.
     */
    public function postScheduledtasksByIdTriggers(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Stops a scheduled task
     * Requires authentication as administrator.
     */
    public function postScheduledtasksRunningByIdDelete(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }
}
