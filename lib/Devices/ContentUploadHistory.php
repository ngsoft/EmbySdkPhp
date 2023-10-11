<?php

declare(strict_types=1);

namespace EmbyClient\Model\Devices;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Devices.ContentUploadHistory')]
class ContentUploadHistory extends \EmbyClient\Model
{
    protected static array $mapping = [
        'filesUploaded' => LocalFileInfo::class,
    ];

    protected string $deviceId;
    /** @var LocalFileInfo[] */
    protected array $filesUploaded;

    public function getDeviceId(): string
    {
        return $this->deviceId;
    }

    /**
     * @return LocalFileInfo[]
     */
    public function getFilesUploaded(): array
    {
        return $this->filesUploaded;
    }
}
