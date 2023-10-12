<?php

declare(strict_types=1);

namespace EmbyClient\Model\LiveTv;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.LiveTv.ListingsProviderInfo')]
class ListingsProviderInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'channelMappings' => \EmbyClient\Model\NameValuePair::class,
    ];

    protected string $name;
    protected string $setupUrl;
    protected string $id;
    protected string $type;
    protected string $username;
    protected string $password;
    protected string $listingsId;
    protected string $zipCode;
    protected string $country;
    protected string $path;
    /** @var string[] */
    protected array $enabledTuners;
    protected bool $enableAllTuners;
    /** @var string[] */
    protected array $newsCategories;
    /** @var string[] */
    protected array $sportsCategories;
    /** @var string[] */
    protected array $kidsCategories;
    /** @var string[] */
    protected array $movieCategories;
    /** @var \EmbyClient\Model\NameValuePair[] */
    protected array $channelMappings;
    protected string $moviePrefix;
    protected string $preferredLanguage;
    protected string $userAgent;
    protected string $dataVersion;

    public function getName(): string
    {
        return $this->name;
    }

    public function getSetupUrl(): string
    {
        return $this->setupUrl;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getListingsId(): string
    {
        return $this->listingsId;
    }

    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return string[]
     */
    public function getEnabledTuners(): array
    {
        return $this->enabledTuners;
    }

    public function getEnableAllTuners(): bool
    {
        return $this->enableAllTuners;
    }

    /**
     * @return string[]
     */
    public function getNewsCategories(): array
    {
        return $this->newsCategories;
    }

    /**
     * @return string[]
     */
    public function getSportsCategories(): array
    {
        return $this->sportsCategories;
    }

    /**
     * @return string[]
     */
    public function getKidsCategories(): array
    {
        return $this->kidsCategories;
    }

    /**
     * @return string[]
     */
    public function getMovieCategories(): array
    {
        return $this->movieCategories;
    }

    /**
     * @return \EmbyClient\Model\NameValuePair[]
     */
    public function getChannelMappings(): array
    {
        return $this->channelMappings;
    }

    public function getMoviePrefix(): string
    {
        return $this->moviePrefix;
    }

    public function getPreferredLanguage(): string
    {
        return $this->preferredLanguage;
    }

    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    public function getDataVersion(): string
    {
        return $this->dataVersion;
    }
}
