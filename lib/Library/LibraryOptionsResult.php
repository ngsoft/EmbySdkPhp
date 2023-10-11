<?php

declare(strict_types=1);

namespace EmbyClient\Model\Library;

use EmbyClient\Model\RefName;

#[RefName('Emby.Api.Library.LibraryOptionsResult')]
class LibraryOptionsResult extends \EmbyClient\Model
{
    protected static array $mapping = [
        'metadataSavers  ' => LibraryOptionInfo::class,
        'metadataReaders ' => LibraryOptionInfo::class,
        'subtitleFetchers' => LibraryOptionInfo::class,
        'lyricsFetchers  ' => LibraryOptionInfo::class,
        'typeOptions     ' => LibraryTypeOptions::class,
    ];

    /** @var LibraryOptionInfo[] */
    protected array $metadataSavers;
    /** @var LibraryOptionInfo[] */
    protected array $metadataReaders;
    /** @var LibraryOptionInfo[] */
    protected array $subtitleFetchers;
    /** @var LibraryOptionInfo[] */
    protected array $lyricsFetchers;
    /** @var LibraryTypeOptions[] */
    protected array $typeOptions;

    /**
     * @return LibraryOptionInfo[]
     */
    public function getMetadataSavers(): array
    {
        return $this->metadataSavers;
    }

    /**
     * @return LibraryOptionInfo[]
     */
    public function getMetadataReaders(): array
    {
        return $this->metadataReaders;
    }

    /**
     * @return LibraryOptionInfo[]
     */
    public function getSubtitleFetchers(): array
    {
        return $this->subtitleFetchers;
    }

    /**
     * @return LibraryOptionInfo[]
     */
    public function getLyricsFetchers(): array
    {
        return $this->lyricsFetchers;
    }

    /**
     * @return LibraryTypeOptions[]
     */
    public function getTypeOptions(): array
    {
        return $this->typeOptions;
    }
}
