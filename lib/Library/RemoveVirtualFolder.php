<?php

declare(strict_types=1);

namespace EmbyClient\Model\Library;

use EmbyClient\RefName;

#[RefName('Emby.Api.Library.RemoveVirtualFolder')]
class RemoveVirtualFolder extends \EmbyClient\Model
{
    protected string $id;
    protected bool $refreshLibrary;

    public function getId(): string
    {
        return $this->id;
    }

    public function getRefreshLibrary(): bool
    {
        return $this->refreshLibrary;
    }
}
