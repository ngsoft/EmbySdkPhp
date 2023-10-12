<?php

declare(strict_types=1);

namespace EmbyClient\Model\LiveTv\Api;

use EmbyClient\RefName;

#[RefName('MediaBrowser.LiveTV.Api.ListingProviderTypeInfo')]
class ListingProviderTypeInfo extends \EmbyClient\Model
{
    protected string $name;
    protected string $id;
    protected string $setupUrl;

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getSetupUrl(): string
    {
        return $this->setupUrl;
    }
}
