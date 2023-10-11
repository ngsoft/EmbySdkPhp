<?php

declare(strict_types=1);

namespace EmbyClient\Model\LiveTv;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.LiveTv.TunerHostInfo')]
class TunerHostInfo extends \EmbyClient\Model
{
    protected string $id;
    protected string $url;
    protected string $type;
    protected string $deviceId;
    protected string $friendlyName;
    protected string $setupUrl;
    protected bool $importFavoritesOnly;
    protected bool $allowHWTranscoding;
    protected string $source;
    protected int $tunerCount;
    protected string $userAgent;
    protected string $referrer;
    protected string $providerOptions;
    protected int $dataVersion;

    public function getId(): string
    {
        return $this->id;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getDeviceId(): string
    {
        return $this->deviceId;
    }

    public function getFriendlyName(): string
    {
        return $this->friendlyName;
    }

    public function getSetupUrl(): string
    {
        return $this->setupUrl;
    }

    public function getImportFavoritesOnly(): bool
    {
        return $this->importFavoritesOnly;
    }

    public function getAllowHWTranscoding(): bool
    {
        return $this->allowHWTranscoding;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function getTunerCount(): int
    {
        return $this->tunerCount;
    }

    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    public function getReferrer(): string
    {
        return $this->referrer;
    }

    public function getProviderOptions(): string
    {
        return $this->providerOptions;
    }

    public function getDataVersion(): int
    {
        return $this->dataVersion;
    }
}
