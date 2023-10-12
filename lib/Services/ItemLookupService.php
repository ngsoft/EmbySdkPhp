<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class ItemLookupService extends ApiService
{
    protected static array $endpoints        = [
        'getItemsByIdExternalidinfos'      => [
            '/Items/{Id}/ExternalIdInfos',
            'GET',
            'array',
        ],
        'postItemsRemotesearchTrailer'     => [
            '/Items/RemoteSearch/Trailer',
            'POST',
            'array',
        ],
        'postItemsRemotesearchBook'        => [
            '/Items/RemoteSearch/Book',
            'POST',
            'array',
        ],
        'postItemsRemotesearchMovie'       => [
            '/Items/RemoteSearch/Movie',
            'POST',
            'array',
        ],
        'postItemsRemotesearchSeries'      => [
            '/Items/RemoteSearch/Series',
            'POST',
            'array',
        ],
        'postItemsRemotesearchGame'        => [
            '/Items/RemoteSearch/Game',
            'POST',
            'array',
        ],
        'postItemsRemotesearchBoxset'      => [
            '/Items/RemoteSearch/BoxSet',
            'POST',
            'array',
        ],
        'postItemsRemotesearchMusicvideo'  => [
            '/Items/RemoteSearch/MusicVideo',
            'POST',
            'array',
        ],
        'postItemsRemotesearchPerson'      => [
            '/Items/RemoteSearch/Person',
            'POST',
            'array',
        ],
        'postItemsRemotesearchMusicalbum'  => [
            '/Items/RemoteSearch/MusicAlbum',
            'POST',
            'array',
        ],
        'postItemsRemotesearchMusicartist' => [
            '/Items/RemoteSearch/MusicArtist',
            'POST',
            'array',
        ],
        'getItemsRemotesearchImage'        => [
            '/Items/RemoteSearch/Image',
            'GET',
            'mixed',
        ],
        'postItemsRemotesearchApplyById'   => [
            '/Items/RemoteSearch/Apply/{Id}',
            'POST',
            'void',
        ],
    ];
    protected static array $queryParameters  = [
        '/Items/RemoteSearch/Image'      => [
            'imageUrl'     => true,
            'providerName' => true,
        ],
        '/Items/RemoteSearch/Apply/{Id}' => [
            'replaceAllImages' => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/Items/{Id}/ExternalIdInfos'    => [
            'id' => true,
        ],
        '/Items/RemoteSearch/Apply/{Id}' => [
            'id' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Gets external id infos for an item
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\ExternalIdInfo[]
     */
    public function getItemsByIdExternalidinfos(string $id): array
    {
        return $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * @return \EmbyClient\Model\RemoteSearchResult[]
     */
    public function postItemsRemotesearchTrailer(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * @return \EmbyClient\Model\RemoteSearchResult[]
     */
    public function postItemsRemotesearchBook(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * @return \EmbyClient\Model\RemoteSearchResult[]
     */
    public function postItemsRemotesearchMovie(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * @return \EmbyClient\Model\RemoteSearchResult[]
     */
    public function postItemsRemotesearchSeries(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * @return \EmbyClient\Model\RemoteSearchResult[]
     */
    public function postItemsRemotesearchGame(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * @return \EmbyClient\Model\RemoteSearchResult[]
     */
    public function postItemsRemotesearchBoxset(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * @return \EmbyClient\Model\RemoteSearchResult[]
     */
    public function postItemsRemotesearchMusicvideo(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * @return \EmbyClient\Model\RemoteSearchResult[]
     */
    public function postItemsRemotesearchPerson(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * @return \EmbyClient\Model\RemoteSearchResult[]
     */
    public function postItemsRemotesearchMusicalbum(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * @return \EmbyClient\Model\RemoteSearchResult[]
     */
    public function postItemsRemotesearchMusicartist(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets a remote image
     * Requires authentication as administrator.
     */
    public function getItemsRemotesearchImage(
        string $imageUrl,
        string $providerName
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $imageUrl, $providerName);
    }

    /**
     * Applies search criteria to an item and refreshes metadata
     * Requires authentication as administrator.
     */
    public function postItemsRemotesearchApplyById(
        string $id,
        bool $replaceAllImages
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $replaceAllImages);
    }
}
