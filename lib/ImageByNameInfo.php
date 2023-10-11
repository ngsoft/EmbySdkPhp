<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Dto.ImageByNameInfo')]
class ImageByNameInfo extends \EmbyClient\Model
{
    protected string $name;
    protected string $theme;
    protected string $context;
    protected int $fileLength;
    protected string $format;

    public function getName(): string
    {
        return $this->name;
    }

    public function getTheme(): string
    {
        return $this->theme;
    }

    public function getContext(): string
    {
        return $this->context;
    }

    public function getFileLength(): int
    {
        return $this->fileLength;
    }

    public function getFormat(): string
    {
        return $this->format;
    }
}
