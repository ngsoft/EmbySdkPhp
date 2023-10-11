<?php

declare(strict_types=1);

namespace EmbyClient\Model\LiveTV\Api;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.LiveTV.Api.TagItem')]
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
