<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Providers.ImageProviderInfo')]
class ImageProviderInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'supportedImages' => ImageType::class,
    ];

    protected string $name;
    /** @var ImageType[] */
    protected array $supportedImages;

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return ImageType[]
     */
    public function getSupportedImages(): array
    {
        return $this->supportedImages;
    }
}
