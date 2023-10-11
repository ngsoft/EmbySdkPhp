<?php

declare(strict_types=1);

namespace EmbyClient\Model\Updates;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Updates.PackageVersionInfo')]
class PackageVersionInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'classification' => PackageVersionClass::class,
    ];

    protected string $name;
    protected string $guid;
    protected string $versionStr;
    protected PackageVersionClass $classification;
    protected string $description;
    protected string $requiredVersionStr;
    protected string $sourceUrl;
    protected string $checksum;
    protected string $targetFilename;
    protected string $infoUrl;
    protected string $runtimes;

    public function getName(): string
    {
        return $this->name;
    }

    public function getGuid(): string
    {
        return $this->guid;
    }

    public function getVersionStr(): string
    {
        return $this->versionStr;
    }

    public function getClassification(): PackageVersionClass
    {
        return $this->classification;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getRequiredVersionStr(): string
    {
        return $this->requiredVersionStr;
    }

    public function getSourceUrl(): string
    {
        return $this->sourceUrl;
    }

    public function getChecksum(): string
    {
        return $this->checksum;
    }

    public function getTargetFilename(): string
    {
        return $this->targetFilename;
    }

    public function getInfoUrl(): string
    {
        return $this->infoUrl;
    }

    public function getRuntimes(): string
    {
        return $this->runtimes;
    }
}
