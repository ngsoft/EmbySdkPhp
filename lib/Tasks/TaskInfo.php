<?php

declare(strict_types=1);

namespace EmbyClient\Model\Tasks;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Tasks.TaskInfo')]
class TaskInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'state              ' => TaskState::class,
        'lastExecutionResult' => TaskResult::class,
        'triggers           ' => TaskTriggerInfo::class,
    ];

    protected string $name;
    protected TaskState $state;
    protected float $currentProgressPercentage;
    protected string $id;
    protected TaskResult $lastExecutionResult;
    /** @var TaskTriggerInfo[] */
    protected array $triggers;
    protected string $description;
    protected string $category;
    protected bool $isHidden;
    protected string $key;

    public function getName(): string
    {
        return $this->name;
    }

    public function getState(): TaskState
    {
        return $this->state;
    }

    public function getCurrentProgressPercentage(): float
    {
        return $this->currentProgressPercentage;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getLastExecutionResult(): TaskResult
    {
        return $this->lastExecutionResult;
    }

    /**
     * @return TaskTriggerInfo[]
     */
    public function getTriggers(): array
    {
        return $this->triggers;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function getIsHidden(): bool
    {
        return $this->isHidden;
    }

    public function getKey(): string
    {
        return $this->key;
    }
}
