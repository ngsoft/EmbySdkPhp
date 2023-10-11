<?php

declare(strict_types=1);

namespace EmbyClient\Model\Library;

use EmbyClient\Model\RefName;

#[RefName('Emby.Api.Library.AddVirtualFolder')]
class AddVirtualFolder extends \EmbyClient\Model
{
    protected static array $mapping = [
        'libraryOptions' => \EmbyClient\Model\Configuration\LibraryOptions::class,
    ];

    protected string $name;
    protected string $collectionType;
    protected bool $refreshLibrary;
    /** @var string[] */
    protected array $paths;
    protected \EmbyClient\Model\Configuration\LibraryOptions $libraryOptions;

    public function getName(): string
    {
        return $this->name;
    }

    public function getCollectionType(): string
    {
        return $this->collectionType;
    }

    public function getRefreshLibrary(): bool
    {
        return $this->refreshLibrary;
    }

    /**
     * @return string[]
     */
    public function getPaths(): array
    {
        return $this->paths;
    }

    public function getLibraryOptions(): \EmbyClient\Model\Configuration\LibraryOptions
    {
        return $this->libraryOptions;
    }
}
