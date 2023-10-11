<?php

declare(strict_types=1);

namespace EmbyClient\Model\Updates;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Updates.InstallationInfo')]
class InstallationInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'updateClass' => PackageVersionClass::class,
    ];

    protected string $id;
    protected string $name;
    protected string $assemblyGuid;
    protected string $version;
    protected PackageVersionClass $updateClass;
    protected float $percentComplete;

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAssemblyGuid(): string
    {
        return $this->assemblyGuid;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function getUpdateClass(): PackageVersionClass
    {
        return $this->updateClass;
    }

    public function getPercentComplete(): float
    {
        return $this->percentComplete;
    }
}
