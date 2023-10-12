<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Dto.ImageInfo')]
class ImageInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'imageType' => ImageType::class,
    ];

    protected ImageType $imageType;
    protected int $imageIndex;
    protected string $path;
    protected string $filename;
    protected int $height;
    protected int $width;
    protected int $size;

    public function getImageType(): ImageType
    {
        return $this->imageType;
    }

    public function getImageIndex(): int
    {
        return $this->imageIndex;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getFilename(): string
    {
        return $this->filename;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getSize(): int
    {
        return $this->size;
    }
}
