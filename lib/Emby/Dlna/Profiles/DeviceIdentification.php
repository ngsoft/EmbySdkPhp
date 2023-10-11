<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Dlna\Profiles;

use EmbyClient\Model\RefName;

#[RefName('Emby.Dlna.Profiles.DeviceIdentification')]
class DeviceIdentification extends \EmbyClient\Model
{
    protected static array $mapping = [
        'headers' => HttpHeaderInfo::class,
    ];

    protected string $friendlyName;
    protected string $modelNumber;
    protected string $serialNumber;
    protected string $modelName;
    protected string $modelDescription;
    protected string $deviceDescription;
    protected string $modelUrl;
    protected string $manufacturer;
    protected string $manufacturerUrl;
    /** @var HttpHeaderInfo[] */
    protected array $headers;

    public function getFriendlyName(): string
    {
        return $this->friendlyName;
    }

    public function getModelNumber(): string
    {
        return $this->modelNumber;
    }

    public function getSerialNumber(): string
    {
        return $this->serialNumber;
    }

    public function getModelName(): string
    {
        return $this->modelName;
    }

    public function getModelDescription(): string
    {
        return $this->modelDescription;
    }

    public function getDeviceDescription(): string
    {
        return $this->deviceDescription;
    }

    public function getModelUrl(): string
    {
        return $this->modelUrl;
    }

    public function getManufacturer(): string
    {
        return $this->manufacturer;
    }

    public function getManufacturerUrl(): string
    {
        return $this->manufacturerUrl;
    }

    /**
     * @return HttpHeaderInfo[]
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }
}
