<?php

declare(strict_types=1);

namespace EmbyClient\Model\Providers;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Controller.Providers.SeriesInfo')]
class SeriesInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'episodeAirDate' => \DateTimeImmutable::class,
        'displayOrder  ' => \EmbyClient\Model\SeriesDisplayOrder::class,
        'providerIds   ' => \EmbyClient\Model\ProviderIdDictionary::class,
        'premiereDate  ' => \DateTimeImmutable::class,
    ];

    protected \DateTimeImmutable $episodeAirDate;
    protected \EmbyClient\Model\SeriesDisplayOrder $displayOrder;
    protected string $name;
    protected string $metadataLanguage;
    protected string $metadataCountryCode;
    protected \EmbyClient\Model\ProviderIdDictionary $providerIds;
    protected int $year;
    protected int $indexNumber;
    protected int $parentIndexNumber;
    protected \DateTimeImmutable $premiereDate;
    protected bool $isAutomated;
    protected bool $enableAdultMetadata;

    public function getEpisodeAirDate(): \DateTimeImmutable
    {
        return $this->episodeAirDate;
    }

    public function getDisplayOrder(): \EmbyClient\Model\SeriesDisplayOrder
    {
        return $this->displayOrder;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getMetadataLanguage(): string
    {
        return $this->metadataLanguage;
    }

    public function getMetadataCountryCode(): string
    {
        return $this->metadataCountryCode;
    }

    public function getProviderIds(): \EmbyClient\Model\ProviderIdDictionary
    {
        return $this->providerIds;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getIndexNumber(): int
    {
        return $this->indexNumber;
    }

    public function getParentIndexNumber(): int
    {
        return $this->parentIndexNumber;
    }

    public function getPremiereDate(): \DateTimeImmutable
    {
        return $this->premiereDate;
    }

    public function getIsAutomated(): bool
    {
        return $this->isAutomated;
    }

    public function getEnableAdultMetadata(): bool
    {
        return $this->enableAdultMetadata;
    }
}
