<?php

declare(strict_types=1);

namespace EmbyClient\Model\Sync\Model;

use EmbyClient\Model\RefName;

#[RefName('Emby.Server.Sync.Model.SyncDataRequest')]
class SyncDataRequest extends \EmbyClient\Model
{
    /** @var string[] */
    protected array $localItemIds;
    protected string $targetId;

    /**
     * @return string[]
     */
    public function getLocalItemIds(): array
    {
        return $this->localItemIds;
    }

    public function getTargetId(): string
    {
        return $this->targetId;
    }
}
