<?php

declare(strict_types=1);

namespace EmbyClient\Model\Library;

use EmbyClient\RefName;

#[RefName('Emby.Api.Library.LibraryTypeOptions')]
class LibraryTypeOptions extends \EmbyClient\Model
{
    protected static array $mapping = [
        'metadataFetchers'    => LibraryOptionInfo::class,
        'imageFetchers'       => LibraryOptionInfo::class,
        'supportedImageTypes' => \EmbyClient\Model\ImageType::class,
        'defaultImageOptions' => \EmbyClient\Model\Configuration\ImageOption::class,
    ];

    protected string $type;
    /** @var LibraryOptionInfo[] */
    protected array $metadataFetchers;
    /** @var LibraryOptionInfo[] */
    protected array $imageFetchers;
    /** @var \EmbyClient\Model\ImageType[] */
    protected array $supportedImageTypes;
    /** @var \EmbyClient\Model\Configuration\ImageOption[] */
    protected array $defaultImageOptions;

    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return LibraryOptionInfo[]
     */
    public function getMetadataFetchers(): array
    {
        return $this->metadataFetchers;
    }

    /**
     * @return LibraryOptionInfo[]
     */
    public function getImageFetchers(): array
    {
        return $this->imageFetchers;
    }

    /**
     * @return \EmbyClient\Model\ImageType[]
     */
    public function getSupportedImageTypes(): array
    {
        return $this->supportedImageTypes;
    }

    /**
     * @return \EmbyClient\Model\Configuration\ImageOption[]
     */
    public function getDefaultImageOptions(): array
    {
        return $this->defaultImageOptions;
    }
}
