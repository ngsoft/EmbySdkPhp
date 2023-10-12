<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Providers.ExternalUrl')]
class ExternalUrl extends \EmbyClient\Model
{
    protected string $name;
    protected string $url;

    public function getName(): string
    {
        return $this->name;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
