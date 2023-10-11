<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.System.LogFile')]
class LogFile extends \EmbyClient\Model
{
    protected static array $mapping = [
        'dateCreated ' => \DateTimeImmutable::class,
        'dateModified' => \DateTimeImmutable::class,
    ];

    protected \DateTimeImmutable $dateCreated;
    protected \DateTimeImmutable $dateModified;
    protected int $size;
    protected string $name;

    public function getDateCreated(): \DateTimeImmutable
    {
        return $this->dateCreated;
    }

    public function getDateModified(): \DateTimeImmutable
    {
        return $this->dateModified;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
