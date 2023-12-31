<?php

declare(strict_types=1);

namespace EmbyClient\Model\MediaEncoding\Configuration\ToneMapping;

use EmbyClient\RefName;

#[RefName('Emby.Server.MediaEncoding.Configuration.ToneMapping.ToneMapOptionsVisibility')]
class ToneMapOptionsVisibility extends \EmbyClient\Model
{
    protected static array $mapping = [
        'operatingSystem' => \EmbyClient\Model\OperatingSystem::class,
    ];

    protected bool $showAdvanced;
    protected bool $isSoftwareToneMappingAvailable;
    protected bool $isAnyHardwareToneMappingAvailable;
    protected bool $showNvidiaOptions;
    protected bool $showQuickSyncOptions;
    protected bool $showVaapiOptions;
    protected bool $isOpenClAvailable;
    protected bool $isOpenClSuperTAvailable;
    protected bool $isVaapiNativeAvailable;
    protected bool $isQuickSyncNativeAvailable;
    protected \EmbyClient\Model\OperatingSystem $operatingSystem;

    public function getShowAdvanced(): bool
    {
        return $this->showAdvanced;
    }

    public function isSoftwareToneMappingAvailable(): bool
    {
        return $this->isSoftwareToneMappingAvailable;
    }

    public function isAnyHardwareToneMappingAvailable(): bool
    {
        return $this->isAnyHardwareToneMappingAvailable;
    }

    public function getShowNvidiaOptions(): bool
    {
        return $this->showNvidiaOptions;
    }

    public function getShowQuickSyncOptions(): bool
    {
        return $this->showQuickSyncOptions;
    }

    public function getShowVaapiOptions(): bool
    {
        return $this->showVaapiOptions;
    }

    public function isOpenClAvailable(): bool
    {
        return $this->isOpenClAvailable;
    }

    public function isOpenClSuperTAvailable(): bool
    {
        return $this->isOpenClSuperTAvailable;
    }

    public function isVaapiNativeAvailable(): bool
    {
        return $this->isVaapiNativeAvailable;
    }

    public function isQuickSyncNativeAvailable(): bool
    {
        return $this->isQuickSyncNativeAvailable;
    }

    public function getOperatingSystem(): \EmbyClient\Model\OperatingSystem
    {
        return $this->operatingSystem;
    }
}
