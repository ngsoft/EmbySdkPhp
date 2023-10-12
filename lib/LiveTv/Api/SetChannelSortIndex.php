<?php

declare(strict_types=1);

namespace EmbyClient\Model\LiveTv\Api;

use EmbyClient\RefName;

#[RefName('MediaBrowser.LiveTV.Api.SetChannelSortIndex')]
class SetChannelSortIndex extends \EmbyClient\Model
{
    protected string $id;
    protected string $managementId;
    protected int $newIndex;

    public function getId(): string
    {
        return $this->id;
    }

    public function getManagementId(): string
    {
        return $this->managementId;
    }

    public function getNewIndex(): int
    {
        return $this->newIndex;
    }
}
