<?php

declare(strict_types=1);

namespace EmbyClient\Model\Providers\RemoteSearchQuery\Providers;

class SeriesInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'searchInfo' => \EmbyClient\Model\Providers\SeriesInfo::class,
    ];

    protected \EmbyClient\Model\Providers\SeriesInfo $searchInfo;
    protected int $itemId;
    protected string $searchProviderName;
    /** @var string[] */
    protected array $providers;
    protected bool $includeDisabledProviders;

    public function getSearchInfo(): \EmbyClient\Model\Providers\SeriesInfo
    {
        return $this->searchInfo;
    }

    public function getItemId(): int
    {
        return $this->itemId;
    }

    public function getSearchProviderName(): string
    {
        return $this->searchProviderName;
    }

    /**
     * @return string[]
     */
    public function getProviders(): array
    {
        return $this->providers;
    }

    public function getIncludeDisabledProviders(): bool
    {
        return $this->includeDisabledProviders;
    }
}
