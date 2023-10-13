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
            '\\EmbyClient\\Model\\ExternalIdInfo',
        ],
        'postItemsRemotesearchTrailer'     => [
            '/Items/RemoteSearch/Trailer',
            'POST',
            'array',
            '\\EmbyClient\\Model\\RemoteSearchResult',
        ],
        'postItemsRemotesearchBook'        => [
            '/Items/RemoteSearch/Book',
            'POST',
            'array',
            '\\EmbyClient\\Model\\RemoteSearchResult',
        ],
        'postItemsRemotesearchMovie'       => [
            '/Items/RemoteSearch/Movie',
            'POST',
            'array',
            '\\EmbyClient\\Model\\RemoteSearchResult',
        ],
        'postItemsRemotesearchSeries'      => [
            '/Items/RemoteSearch/Series',
            'POST',
            'array',
            '\\EmbyClient\\Model\\RemoteSearchResult',
        ],
        'postItemsRemotesearchGame'        => [
            '/Items/RemoteSearch/Game',
            'POST',
            'array',
            '\\EmbyClient\\Model\\RemoteSearchResult',
        ],
        'postItemsRemotesearchBoxset'      => [
            '/Items/RemoteSearch/BoxSet',
            'POST',
            'array',
            '\\EmbyClient\\Model\\RemoteSearchResult',
        ],
        'postItemsRemotesearchMusicvideo'  => [
            '/Items/RemoteSearch/MusicVideo',
            'POST',
            'array',
            '\\EmbyClient\\Model\\RemoteSearchResult',
        ],
        'postItemsRemotesearchPerson'      => [
            '/Items/RemoteSearch/Person',
            'POST',
            'array',
            '\\EmbyClient\\Model\\RemoteSearchResult',
        ],
        'postItemsRemotesearchMusicalbum'  => [
            '/Items/RemoteSearch/MusicAlbum',
            'POST',
            'array',
            '\\EmbyClient\\Model\\RemoteSearchResult',
        ],
        'postItemsRemotesearchMusicartist' => [
            '/Items/RemoteSearch/MusicArtist',
            'POST',
            'array',
            '\\EmbyClient\\Model\\RemoteSearchResult',
        ],
        'getItemsRemotesearchImage'        => [
            '/Items/RemoteSearch/Image',
            'GET',
            'mixed',
            false,
        ],
        'postItemsRemotesearchApplyById'   => [
            '/Items/RemoteSearch/Apply/{Id}',
            'POST',
            'void',
            false,
        ],
    ];
    protected static array $parameters       = [
        'getItemsByIdExternalidinfos'      => [
            'id',
        ],
        'postItemsRemotesearchTrailer'     => [],
        'postItemsRemotesearchBook'        => [],
        'postItemsRemotesearchMovie'       => [],
        'postItemsRemotesearchSeries'      => [],
        'postItemsRemotesearchGame'        => [],
        'postItemsRemotesearchBoxset'      => [],
        'postItemsRemotesearchMusicvideo'  => [],
        'postItemsRemotesearchPerson'      => [],
        'postItemsRemotesearchMusicalbum'  => [],
        'postItemsRemotesearchMusicartist' => [],
        'getItemsRemotesearchImage'        => [
            'imageUrl',
            'providerName',
        ],
        'postItemsRemotesearchApplyById'   => [
            'id',
            'replaceAllImages',
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
