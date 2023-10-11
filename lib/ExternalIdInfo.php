<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Providers.ExternalIdInfo')]
class ExternalIdInfo extends \EmbyClient\Model
{
    protected string $name;
    protected string $key;
    protected string $urlFormatString;
    protected bool $isSupportedAsIdentifier;

    public function getName(): string
    {
        return $this->name;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getUrlFormatString(): string
    {
        return $this->urlFormatString;
    }

    public function getIsSupportedAsIdentifier(): bool
    {
        return $this->isSupportedAsIdentifier;
    }
}
