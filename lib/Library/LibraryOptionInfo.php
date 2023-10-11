<?php

declare(strict_types=1);

namespace EmbyClient\Model\Library;

use EmbyClient\Model\RefName;

#[RefName('Emby.Api.Library.LibraryOptionInfo')]
class LibraryOptionInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'features' => \EmbyClient\Model\Configuration\MetadataFeatures::class,
    ];

    protected string $name;
    protected bool $defaultEnabled;
    /** @var \EmbyClient\Model\Configuration\MetadataFeatures[] */
    protected array $features;

    public function getName(): string
    {
        return $this->name;
    }

    public function getDefaultEnabled(): bool
    {
        return $this->defaultEnabled;
    }

    /**
     * @return \EmbyClient\Model\Configuration\MetadataFeatures[]
     */
    public function getFeatures(): array
    {
        return $this->features;
    }
}
