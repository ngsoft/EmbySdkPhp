<?php

declare(strict_types=1);

namespace EmbyClient\Model\MediaEncoding\Codecs\Common\Interfaces;

use EmbyClient\RefName;

#[RefName('Emby.Server.MediaEncoding.Codecs.Common.Interfaces.ICodecDeviceInfo')]
class ICodecDeviceInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'capabilities'             => ICodecDeviceCapabilities::class,
        'driverVersion'            => \EmbyClient\Model\Version::class,
        'apiVersion'               => \EmbyClient\Model\Version::class,
        'hardwareContextFramework' => \EmbyClient\Model\Emby\Media\Model\Enums\SecondaryFrameworks::class,
    ];

    protected ICodecDeviceCapabilities $capabilities;
    protected int $adapter;
    protected string $name;
    protected string $desription;
    protected string $driver;
    protected \EmbyClient\Model\Version $driverVersion;
    protected \EmbyClient\Model\Version $apiVersion;
    protected int $vendorId;
    protected int $deviceId;
    protected string $deviceIdentifier;
    protected \EmbyClient\Model\Emby\Media\Model\Enums\SecondaryFrameworks $hardwareContextFramework;
    protected string $devPath;
    protected string $drmNode;
    protected string $vendorName;
    protected string $deviceName;

    public function getCapabilities(): ICodecDeviceCapabilities
    {
        return $this->capabilities;
    }

    public function getAdapter(): int
    {
        return $this->adapter;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDesription(): string
    {
        return $this->desription;
    }

    public function getDriver(): string
    {
        return $this->driver;
    }

    public function getDriverVersion(): \EmbyClient\Model\Version
    {
        return $this->driverVersion;
    }

    public function getApiVersion(): \EmbyClient\Model\Version
    {
        return $this->apiVersion;
    }

    public function getVendorId(): int
    {
        return $this->vendorId;
    }

    public function getDeviceId(): int
    {
        return $this->deviceId;
    }

    public function getDeviceIdentifier(): string
    {
        return $this->deviceIdentifier;
    }

    public function getHardwareContextFramework(): \EmbyClient\Model\Emby\Media\Model\Enums\SecondaryFrameworks
    {
        return $this->hardwareContextFramework;
    }

    public function getDevPath(): string
    {
        return $this->devPath;
    }

    public function getDrmNode(): string
    {
        return $this->drmNode;
    }

    public function getVendorName(): string
    {
        return $this->vendorName;
    }

    public function getDeviceName(): string
    {
        return $this->deviceName;
    }
}
