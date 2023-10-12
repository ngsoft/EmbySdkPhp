<?php

declare(strict_types=1);

namespace EmbyClient\Model\MediaEncoding\Codecs\Common\Interfaces;

use EmbyClient\RefName;

#[RefName('Emby.Server.MediaEncoding.Codecs.Common.Interfaces.ICodecDeviceCapabilities')]
class ICodecDeviceCapabilities extends \EmbyClient\Model
{
    protected bool $supportsHwUpload;
    protected bool $supportsHwDownload;
    protected bool $supportsStandaloneDeviceInit;
    protected bool $supports10BitProcessing;
    protected bool $supportsNativeToneMapping;

    public function getSupportsHwUpload(): bool
    {
        return $this->supportsHwUpload;
    }

    public function getSupportsHwDownload(): bool
    {
        return $this->supportsHwDownload;
    }

    public function getSupportsStandaloneDeviceInit(): bool
    {
        return $this->supportsStandaloneDeviceInit;
    }

    public function getSupports10BitProcessing(): bool
    {
        return $this->supports10BitProcessing;
    }

    public function getSupportsNativeToneMapping(): bool
    {
        return $this->supportsNativeToneMapping;
    }
}
