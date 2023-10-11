<?php

declare(strict_types=1);

namespace EmbyClient\Model\Library;

use EmbyClient\Model\RefName;

#[RefName('Emby.Api.Library.RenameVirtualFolder')]
class RenameVirtualFolder extends \EmbyClient\Model
{
    protected string $id;
    protected string $newName;

    public function getId(): string
    {
        return $this->id;
    }

    public function getNewName(): string
    {
        return $this->newName;
    }
}
