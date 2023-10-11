<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Providers.RemoteImageResult')]
class RemoteImageResult extends \EmbyClient\Model
{
    protected static array $mapping = [
        'images' => RemoteImageInfo::class,
    ];

    /** @var RemoteImageInfo[] */
    protected array $images;
    protected int $totalRecordCount;
    /** @var string[] */
    protected array $providers;

    /**
     * @return RemoteImageInfo[]
     */
    public function getImages(): array
    {
        return $this->images;
    }

    public function getTotalRecordCount(): int
    {
        return $this->totalRecordCount;
    }

    /**
     * @return string[]
     */
    public function getProviders(): array
    {
        return $this->providers;
    }
}
