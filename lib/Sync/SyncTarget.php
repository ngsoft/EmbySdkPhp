<?php

declare(strict_types=1);

namespace EmbyClient\Model\Sync;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Sync.SyncTarget')]
class SyncTarget extends \EmbyClient\Model
{
    protected string $name;
    protected string $id;

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): string
    {
        return $this->id;
    }
}
