<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Providers.RemoteSearchResult')]
class RemoteSearchResult extends \EmbyClient\Model
{
    protected static array $mapping = [
        'providerIds'  => ProviderIdDictionary::class,
        'premiereDate' => \DateTimeImmutable::class,
        'albumArtist'  => RemoteSearchResult::class,
        'artists'      => RemoteSearchResult::class,
    ];

    protected string $name;
    protected ProviderIdDictionary $providerIds;
    protected int $productionYear;
    protected int $indexNumber;
    protected int $indexNumberEnd;
    protected int $parentIndexNumber;
    protected \DateTimeImmutable $premiereDate;
    protected string $imageUrl;
    protected string $searchProviderName;
    protected string $gameSystem;
    protected string $overview;
    protected string $disambiguationComment;
    protected RemoteSearchResult $albumArtist;
    /** @var RemoteSearchResult[] */
    protected array $artists;

    public function getName(): string
    {
        return $this->name;
    }

    public function getProviderIds(): ProviderIdDictionary
    {
        return $this->providerIds;
    }

    public function getProductionYear(): int
    {
        return $this->productionYear;
    }

    public function getIndexNumber(): int
    {
        return $this->indexNumber;
    }

    public function getIndexNumberEnd(): int
    {
        return $this->indexNumberEnd;
    }

    public function getParentIndexNumber(): int
    {
        return $this->parentIndexNumber;
    }

    public function getPremiereDate(): \DateTimeImmutable
    {
        return $this->premiereDate;
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function getSearchProviderName(): string
    {
        return $this->searchProviderName;
    }

    public function getGameSystem(): string
    {
        return $this->gameSystem;
    }

    public function getOverview(): string
    {
        return $this->overview;
    }

    public function getDisambiguationComment(): string
    {
        return $this->disambiguationComment;
    }

    public function getAlbumArtist(): RemoteSearchResult
    {
        return $this->albumArtist;
    }

    /**
     * @return RemoteSearchResult[]
     */
    public function getArtists(): array
    {
        return $this->artists;
    }
}
