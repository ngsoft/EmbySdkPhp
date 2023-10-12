<?php

declare(strict_types=1);

namespace EmbyClient\Model\Devices;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Devices.LocalFileInfo')]
class LocalFileInfo extends \EmbyClient\Model
{
    protected string $name;
    protected string $id;
    protected string $album;
    protected string $mimeType;

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getAlbum(): string
    {
        return $this->album;
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
    }
}
