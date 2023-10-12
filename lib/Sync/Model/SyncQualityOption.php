<?php

declare(strict_types=1);

namespace EmbyClient\Model\Sync\Model;

use EmbyClient\RefName;

#[RefName('Emby.Server.Sync.Model.SyncQualityOption')]
class SyncQualityOption extends \EmbyClient\Model
{
    protected string $name;
    protected string $description;
    protected string $id;
    protected bool $isDefault;
    protected bool $isOriginalQuality;

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }

    public function getIsOriginalQuality(): bool
    {
        return $this->isOriginalQuality;
    }
}
