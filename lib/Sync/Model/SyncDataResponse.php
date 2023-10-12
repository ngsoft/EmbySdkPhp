<?php

declare(strict_types=1);

namespace EmbyClient\Model\Sync\Model;

use EmbyClient\RefName;

#[RefName('Emby.Server.Sync.Model.SyncDataResponse')]
class SyncDataResponse extends \EmbyClient\Model
{
    /** @var string[] */
    protected array $itemIdsToRemove;

    /**
     * @return string[]
     */
    public function getItemIdsToRemove(): array
    {
        return $this->itemIdsToRemove;
    }
}
