<?php

declare(strict_types=1);

namespace EmbyClient\Model\UserLibrary;

use EmbyClient\RefName;

#[RefName('Emby.Api.UserLibrary.TagItem')]
class TagItem extends \EmbyClient\Model
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
