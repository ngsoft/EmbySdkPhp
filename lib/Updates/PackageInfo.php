<?php

declare(strict_types=1);

namespace EmbyClient\Model\Updates;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Updates.PackageInfo')]
class PackageInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'targetSystem' => PackageTargetSystem::class,
        'expDate'      => \DateTimeImmutable::class,
        'versions'     => PackageVersionInfo::class,
    ];

    protected string $id;
    protected string $name;
    protected string $shortDescription;
    protected string $overview;
    protected bool $isPremium;
    protected bool $adult;
    protected string $richDescUrl;
    protected string $thumbImage;
    protected string $previewImage;
    protected string $type;
    protected string $targetFilename;
    protected string $owner;
    protected string $category;
    protected string $tileColor;
    protected string $featureId;
    protected string $regInfo;
    protected float $price;
    protected PackageTargetSystem $targetSystem;
    protected string $guid;
    protected int $totalRatings;
    protected float $avgRating;
    protected bool $isRegistered;
    protected \DateTimeImmutable $expDate;
    /** @var PackageVersionInfo[] */
    protected array $versions;
    protected bool $enableInAppStore;
    protected int $installs;

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }

    public function getOverview(): string
    {
        return $this->overview;
    }

    public function isPremium(): bool
    {
        return $this->isPremium;
    }

    public function getAdult(): bool
    {
        return $this->adult;
    }

    public function getRichDescUrl(): string
    {
        return $this->richDescUrl;
    }

    public function getThumbImage(): string
    {
        return $this->thumbImage;
    }

    public function getPreviewImage(): string
    {
        return $this->previewImage;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getTargetFilename(): string
    {
        return $this->targetFilename;
    }

    public function getOwner(): string
    {
        return $this->owner;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function getTileColor(): string
    {
        return $this->tileColor;
    }

    public function getFeatureId(): string
    {
        return $this->featureId;
    }

    public function getRegInfo(): string
    {
        return $this->regInfo;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getTargetSystem(): PackageTargetSystem
    {
        return $this->targetSystem;
    }

    public function getGuid(): string
    {
        return $this->guid;
    }

    public function getTotalRatings(): int
    {
        return $this->totalRatings;
    }

    public function getAvgRating(): float
    {
        return $this->avgRating;
    }

    public function isRegistered(): bool
    {
        return $this->isRegistered;
    }

    public function getExpDate(): \DateTimeImmutable
    {
        return $this->expDate;
    }

    /**
     * @return PackageVersionInfo[]
     */
    public function getVersions(): array
    {
        return $this->versions;
    }

    public function getEnableInAppStore(): bool
    {
        return $this->enableInAppStore;
    }

    public function getInstalls(): int
    {
        return $this->installs;
    }
}
