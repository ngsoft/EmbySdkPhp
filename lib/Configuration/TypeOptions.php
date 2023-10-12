<?php

declare(strict_types=1);

namespace EmbyClient\Model\Configuration;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Configuration.TypeOptions')]
class TypeOptions extends \EmbyClient\Model
{
    protected static array $mapping = [
        'imageOptions' => ImageOption::class,
    ];

    protected string $type;
    /** @var string[] */
    protected array $metadataFetchers;
    /** @var string[] */
    protected array $metadataFetcherOrder;
    /** @var string[] */
    protected array $imageFetchers;
    /** @var string[] */
    protected array $imageFetcherOrder;
    /** @var ImageOption[] */
    protected array $imageOptions;

    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string[]
     */
    public function getMetadataFetchers(): array
    {
        return $this->metadataFetchers;
    }

    /**
     * @return string[]
     */
    public function getMetadataFetcherOrder(): array
    {
        return $this->metadataFetcherOrder;
    }

    /**
     * @return string[]
     */
    public function getImageFetchers(): array
    {
        return $this->imageFetchers;
    }

    /**
     * @return string[]
     */
    public function getImageFetcherOrder(): array
    {
        return $this->imageFetcherOrder;
    }

    /**
     * @return ImageOption[]
     */
    public function getImageOptions(): array
    {
        return $this->imageOptions;
    }
}
