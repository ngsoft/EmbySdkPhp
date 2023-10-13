<?php

declare(strict_types=1);

namespace EmbyClient\Model\Tasks;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Tasks.TaskResult')]
class TaskResult extends \EmbyClient\Model
{
    protected static array $mapping = [
        'startTimeUtc' => \DateTimeImmutable::class,
        'endTimeUtc'   => \DateTimeImmutable::class,
        'status'       => TaskCompletionStatus::class,
    ];

    protected \DateTimeImmutable $startTimeUtc;
    protected \DateTimeImmutable $endTimeUtc;
    protected TaskCompletionStatus $status;
    protected string $name;
    protected string $key;
    protected string $id;
    protected string $errorMessage;
    protected string $longErrorMessage;

    public function getStartTimeUtc(): \DateTimeImmutable
    {
        return $this->startTimeUtc;
    }

    public function getEndTimeUtc(): \DateTimeImmutable
    {
        return $this->endTimeUtc;
    }

    public function getStatus(): TaskCompletionStatus
    {
        return $this->status;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    public function getLongErrorMessage(): string
    {
        return $this->longErrorMessage;
    }
}
