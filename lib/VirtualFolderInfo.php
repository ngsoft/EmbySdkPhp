<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Entities.VirtualFolderInfo')]
class VirtualFolderInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'libraryOptions' => Configuration\LibraryOptions::class,
    ];

    protected string $name;
    /** @var string[] */
    protected array $locations;
    protected string $collectionType;
    protected Configuration\LibraryOptions $libraryOptions;
    protected string $itemId;
    protected string $primaryImageItemId;
    protected float $refreshProgress;
    protected string $refreshStatus;

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string[]
     */
    public function getLocations(): array
    {
        return $this->locations;
    }

    public function getCollectionType(): string
    {
        return $this->collectionType;
    }

    public function getLibraryOptions(): Configuration\LibraryOptions
    {
        return $this->libraryOptions;
    }

    public function getItemId(): string
    {
        return $this->itemId;
    }

    public function getPrimaryImageItemId(): string
    {
        return $this->primaryImageItemId;
    }

    public function getRefreshProgress(): float
    {
        return $this->refreshProgress;
    }

    public function getRefreshStatus(): string
    {
        return $this->refreshStatus;
    }
}
