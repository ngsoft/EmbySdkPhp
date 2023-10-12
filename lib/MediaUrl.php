<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Entities.MediaUrl')]
class MediaUrl extends \EmbyClient\Model
{
    protected string $url;
    protected string $name;

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
