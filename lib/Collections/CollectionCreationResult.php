<?php

declare(strict_types=1);

namespace EmbyClient\Model\Collections;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Collections.CollectionCreationResult')]
class CollectionCreationResult extends \EmbyClient\Model
{
    protected string $id;
    protected string $name;

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
