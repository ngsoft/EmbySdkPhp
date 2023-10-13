<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class ImageService extends ApiService
{
    protected static array $endpoints        = [
        'getItemsByIdImagesByTypeByIndexByTagByFormatByMaxwidthByMaxheightByPercentplayedByUnplayedcount' => [
            '/Items/{Id}/Images/{Type}/{Index}/{Tag}/{Format}/{MaxWidth}/{MaxHeight}/{PercentPlayed}/{UnplayedCount}',
            'GET',
            'mixed',
            false,
        ],
        'getItemsByIdImages'                                                                              => [
            '/Items/{Id}/Images',
            'GET',
            'array',
            '\\EmbyClient\\Model\\ImageInfo',
        ],
        'getArtistsByNameImagesByType'                                                                    => [
            '/Artists/{Name}/Images/{Type}',
            'GET',
            'mixed',
            false,
        ],
        'getGamegenresByNameImagesByType'                                                                 => [
            '/GameGenres/{Name}/Images/{Type}',
            'GET',
            'mixed',
            false,
        ],
        'getGenresByNameImagesByType'                                                                     => [
            '/Genres/{Name}/Images/{Type}',
            'GET',
            'mixed',
            false,
        ],
        'getItemsByIdImagesByType'                                                                        => [
            '/Items/{Id}/Images/{Type}',
            'GET',
            'mixed',
            false,
        ],
        'postItemsByIdImagesByType'                                                                       => [
            '/Items/{Id}/Images/{Type}',
            'POST',
            'void',
            false,
        ],
        'deleteItemsByIdImagesByType'                                                                     => [
            '/Items/{Id}/Images/{Type}',
            'DELETE',
            'void',
            false,
        ],
        'getMusicgenresByNameImagesByType'                                                                => [
            '/MusicGenres/{Name}/Images/{Type}',
            'GET',
            'mixed',
            false,
        ],
        'getPersonsByNameImagesByType'                                                                    => [
            '/Persons/{Name}/Images/{Type}',
            'GET',
            'mixed',
            false,
        ],
        'getStudiosByNameImagesByType'                                                                    => [
            '/Studios/{Name}/Images/{Type}',
            'GET',
            'mixed',
            false,
        ],
        'getUsersByIdImagesByType'                                                                        => [
            '/Users/{Id}/Images/{Type}',
            'GET',
            'mixed',
            false,
        ],
        'postUsersByIdImagesByType'                                                                       => [
            '/Users/{Id}/Images/{Type}',
            'POST',
            'void',
            false,
        ],
        'deleteUsersByIdImagesByType'                                                                     => [
            '/Users/{Id}/Images/{Type}',
            'DELETE',
            'void',
            false,
        ],
        'getArtistsByNameImagesByTypeByIndex'                                                             => [
            '/Artists/{Name}/Images/{Type}/{Index}',
            'GET',
            'mixed',
            false,
        ],
        'getGamegenresByNameImagesByTypeByIndex'                                                          => [
            '/GameGenres/{Name}/Images/{Type}/{Index}',
            'GET',
            'mixed',
            false,
        ],
        'getGenresByNameImagesByTypeByIndex'                                                              => [
            '/Genres/{Name}/Images/{Type}/{Index}',
            'GET',
            'mixed',
            false,
        ],
        'getItemsByIdImagesByTypeByIndex'                                                                 => [
            '/Items/{Id}/Images/{Type}/{Index}',
            'GET',
            'mixed',
            false,
        ],
        'postItemsByIdImagesByTypeByIndex'                                                                => [
            '/Items/{Id}/Images/{Type}/{Index}',
            'POST',
            'void',
            false,
        ],
        'deleteItemsByIdImagesByTypeByIndex'                                                              => [
            '/Items/{Id}/Images/{Type}/{Index}',
            'DELETE',
            'void',
            false,
        ],
        'postItemsByIdImagesByTypeDelete'                                                                 => [
            '/Items/{Id}/Images/{Type}/Delete',
            'POST',
            'void',
            false,
        ],
        'getMusicgenresByNameImagesByTypeByIndex'                                                         => [
            '/MusicGenres/{Name}/Images/{Type}/{Index}',
            'GET',
            'mixed',
            false,
        ],
        'getPersonsByNameImagesByTypeByIndex'                                                             => [
            '/Persons/{Name}/Images/{Type}/{Index}',
            'GET',
            'mixed',
            false,
        ],
        'getStudiosByNameImagesByTypeByIndex'                                                             => [
            '/Studios/{Name}/Images/{Type}/{Index}',
            'GET',
            'mixed',
            false,
        ],
        'getUsersByIdImagesByTypeByIndex'                                                                 => [
            '/Users/{Id}/Images/{Type}/{Index}',
            'GET',
            'mixed',
            false,
        ],
        'postUsersByIdImagesByTypeByIndex'                                                                => [
            '/Users/{Id}/Images/{Type}/{Index}',
            'POST',
            'void',
            false,
        ],
        'deleteUsersByIdImagesByTypeByIndex'                                                              => [
            '/Users/{Id}/Images/{Type}/{Index}',
            'DELETE',
            'void',
            false,
        ],
        'postUsersByIdImagesByTypeDelete'                                                                 => [
            '/Users/{Id}/Images/{Type}/Delete',
            'POST',
            'void',
            false,
        ],
        'postItemsByIdImagesByTypeByIndexDelete'                                                          => [
            '/Items/{Id}/Images/{Type}/{Index}/Delete',
            'POST',
            'void',
            false,
        ],
        'postItemsByIdImagesByTypeByIndexIndex'                                                           => [
            '/Items/{Id}/Images/{Type}/{Index}/Index',
            'POST',
            'void',
            false,
        ],
        'postItemsByIdImagesByTypeByIndexUrl'                                                             => [
            '/Items/{Id}/Images/{Type}/{Index}/Url',
            'POST',
            'void',
            false,
        ],
        'postUsersByIdImagesByTypeByIndexDelete'                                                          => [
            '/Users/{Id}/Images/{Type}/{Index}/Delete',
            'POST',
            'void',
            false,
        ],
    ];
    protected static array $queryParameters  = [
        '/Items/{Id}/Images/{Type}/{Index}/{Tag}/{Format}/{MaxWidth}/{MaxHeight}/{PercentPlayed}/{UnplayedCount}' => [
            'width'                => true,
            'height'               => true,
            'quality'              => true,
            'cropWhitespace'       => true,
            'enableImageEnhancers' => true,
            'addPlayedIndicator'   => true,
            'backgroundColor'      => true,
            'foregroundLayer'      => true,
            'autoOrient'           => true,
        ],
        '/Artists/{Name}/Images/{Type}'                                                                           => [
            'maxWidth'             => true,
            'maxHeight'            => true,
            'width'                => true,
            'height'               => true,
            'quality'              => true,
            'tag'                  => true,
            'cropWhitespace'       => true,
            'enableImageEnhancers' => true,
            'format'               => true,
            'addPlayedIndicator'   => true,
            'percentPlayed'        => true,
            'unplayedCount'        => true,
            'backgroundColor'      => true,
            'foregroundLayer'      => true,
            'autoOrient'           => true,
            'index'                => true,
        ],
        '/GameGenres/{Name}/Images/{Type}'                                                                        => [
            'maxWidth'             => true,
            'maxHeight'            => true,
            'width'                => true,
            'height'               => true,
            'quality'              => true,
            'tag'                  => true,
            'cropWhitespace'       => true,
            'enableImageEnhancers' => true,
            'format'               => true,
            'addPlayedIndicator'   => true,
            'percentPlayed'        => true,
            'unplayedCount'        => true,
            'backgroundColor'      => true,
            'foregroundLayer'      => true,
            'autoOrient'           => true,
            'index'                => true,
        ],
        '/Genres/{Name}/Images/{Type}'                                                                            => [
            'maxWidth'             => true,
            'maxHeight'            => true,
            'width'                => true,
            'height'               => true,
            'quality'              => true,
            'tag'                  => true,
            'cropWhitespace'       => true,
            'enableImageEnhancers' => true,
            'format'               => true,
            'addPlayedIndicator'   => true,
            'percentPlayed'        => true,
            'unplayedCount'        => true,
            'backgroundColor'      => true,
            'foregroundLayer'      => true,
            'autoOrient'           => true,
            'index'                => true,
        ],
        '/Items/{Id}/Images/{Type}'                                                                               => [
            'maxWidth'             => true,
            'maxHeight'            => true,
            'width'                => true,
            'height'               => true,
            'quality'              => true,
            'tag'                  => true,
            'cropWhitespace'       => true,
            'enableImageEnhancers' => true,
            'format'               => true,
            'addPlayedIndicator'   => true,
            'percentPlayed'        => true,
            'unplayedCount'        => true,
            'backgroundColor'      => true,
            'foregroundLayer'      => true,
            'autoOrient'           => true,
            'index'                => true,
        ],
        '/MusicGenres/{Name}/Images/{Type}'                                                                       => [
            'maxWidth'             => true,
            'maxHeight'            => true,
            'width'                => true,
            'height'               => true,
            'quality'              => true,
            'tag'                  => true,
            'cropWhitespace'       => true,
            'enableImageEnhancers' => true,
            'format'               => true,
            'addPlayedIndicator'   => true,
            'percentPlayed'        => true,
            'unplayedCount'        => true,
            'backgroundColor'      => true,
            'foregroundLayer'      => true,
            'autoOrient'           => true,
            'index'                => true,
        ],
        '/Persons/{Name}/Images/{Type}'                                                                           => [
            'maxWidth'             => true,
            'maxHeight'            => true,
            'width'                => true,
            'height'               => true,
            'quality'              => true,
            'tag'                  => true,
            'cropWhitespace'       => true,
            'enableImageEnhancers' => true,
            'format'               => true,
            'addPlayedIndicator'   => true,
            'percentPlayed'        => true,
            'unplayedCount'        => true,
            'backgroundColor'      => true,
            'foregroundLayer'      => true,
            'autoOrient'           => true,
            'index'                => true,
        ],
        '/Studios/{Name}/Images/{Type}'                                                                           => [
            'maxWidth'             => true,
            'maxHeight'            => true,
            'width'                => true,
            'height'               => true,
            'quality'              => true,
            'tag'                  => true,
            'cropWhitespace'       => true,
            'enableImageEnhancers' => true,
            'format'               => true,
            'addPlayedIndicator'   => true,
            'percentPlayed'        => true,
            'unplayedCount'        => true,
            'backgroundColor'      => true,
            'foregroundLayer'      => true,
            'autoOrient'           => true,
            'index'                => true,
        ],
        '/Users/{Id}/Images/{Type}'                                                                               => [
            'maxWidth'             => true,
            'maxHeight'            => true,
            'width'                => true,
            'height'               => true,
            'quality'              => true,
            'tag'                  => true,
            'cropWhitespace'       => true,
            'enableImageEnhancers' => true,
            'format'               => true,
            'addPlayedIndicator'   => true,
            'percentPlayed'        => true,
            'unplayedCount'        => true,
            'backgroundColor'      => true,
            'foregroundLayer'      => true,
            'autoOrient'           => true,
            'index'                => true,
        ],
        '/Artists/{Name}/Images/{Type}/{Index}'                                                                   => [
            'maxWidth'             => true,
            'maxHeight'            => true,
            'width'                => true,
            'height'               => true,
            'quality'              => true,
            'tag'                  => true,
            'cropWhitespace'       => true,
            'enableImageEnhancers' => true,
            'format'               => true,
            'addPlayedIndicator'   => true,
            'percentPlayed'        => true,
            'unplayedCount'        => true,
            'backgroundColor'      => true,
            'foregroundLayer'      => true,
            'autoOrient'           => true,
        ],
        '/GameGenres/{Name}/Images/{Type}/{Index}'                                                                => [
            'maxWidth'             => true,
            'maxHeight'            => true,
            'width'                => true,
            'height'               => true,
            'quality'              => true,
            'tag'                  => true,
            'cropWhitespace'       => true,
            'enableImageEnhancers' => true,
            'format'               => true,
            'addPlayedIndicator'   => true,
            'percentPlayed'        => true,
            'unplayedCount'        => true,
            'backgroundColor'      => true,
            'foregroundLayer'      => true,
            'autoOrient'           => true,
        ],
        '/Genres/{Name}/Images/{Type}/{Index}'                                                                    => [
            'maxWidth'             => true,
            'maxHeight'            => true,
            'width'                => true,
            'height'               => true,
            'quality'              => true,
            'tag'                  => true,
            'cropWhitespace'       => true,
            'enableImageEnhancers' => true,
            'format'               => true,
            'addPlayedIndicator'   => true,
            'percentPlayed'        => true,
            'unplayedCount'        => true,
            'backgroundColor'      => true,
            'foregroundLayer'      => true,
            'autoOrient'           => true,
        ],
        '/Items/{Id}/Images/{Type}/{Index}'                                                                       => [
            'maxWidth'             => true,
            'maxHeight'            => true,
            'width'                => true,
            'height'               => true,
            'quality'              => true,
            'tag'                  => true,
            'cropWhitespace'       => true,
            'enableImageEnhancers' => true,
            'format'               => true,
            'addPlayedIndicator'   => true,
            'percentPlayed'        => true,
            'unplayedCount'        => true,
            'backgroundColor'      => true,
            'foregroundLayer'      => true,
            'autoOrient'           => true,
        ],
        '/Items/{Id}/Images/{Type}/Delete'                                                                        => [
            'index' => true,
        ],
        '/MusicGenres/{Name}/Images/{Type}/{Index}'                                                               => [
            'maxWidth'             => true,
            'maxHeight'            => true,
            'width'                => true,
            'height'               => true,
            'quality'              => true,
            'tag'                  => true,
            'cropWhitespace'       => true,
            'enableImageEnhancers' => true,
            'format'               => true,
            'addPlayedIndicator'   => true,
            'percentPlayed'        => true,
            'unplayedCount'        => true,
            'backgroundColor'      => true,
            'foregroundLayer'      => true,
            'autoOrient'           => true,
        ],
        '/Persons/{Name}/Images/{Type}/{Index}'                                                                   => [
            'maxWidth'             => true,
            'maxHeight'            => true,
            'width'                => true,
            'height'               => true,
            'quality'              => true,
            'tag'                  => true,
            'cropWhitespace'       => true,
            'enableImageEnhancers' => true,
            'format'               => true,
            'addPlayedIndicator'   => true,
            'percentPlayed'        => true,
            'unplayedCount'        => true,
            'backgroundColor'      => true,
            'foregroundLayer'      => true,
            'autoOrient'           => true,
        ],
        '/Studios/{Name}/Images/{Type}/{Index}'                                                                   => [
            'maxWidth'             => true,
            'maxHeight'            => true,
            'width'                => true,
            'height'               => true,
            'quality'              => true,
            'tag'                  => true,
            'cropWhitespace'       => true,
            'enableImageEnhancers' => true,
            'format'               => true,
            'addPlayedIndicator'   => true,
            'percentPlayed'        => true,
            'unplayedCount'        => true,
            'backgroundColor'      => true,
            'foregroundLayer'      => true,
            'autoOrient'           => true,
        ],
        '/Users/{Id}/Images/{Type}/{Index}'                                                                       => [
            'maxWidth'             => true,
            'maxHeight'            => true,
            'width'                => true,
            'height'               => true,
            'quality'              => true,
            'tag'                  => true,
            'cropWhitespace'       => true,
            'enableImageEnhancers' => true,
            'format'               => true,
            'addPlayedIndicator'   => true,
            'percentPlayed'        => true,
            'unplayedCount'        => true,
            'backgroundColor'      => true,
            'foregroundLayer'      => true,
            'autoOrient'           => true,
        ],
        '/Users/{Id}/Images/{Type}/Delete'                                                                        => [
            'index' => true,
        ],
        '/Items/{Id}/Images/{Type}/{Index}/Index'                                                                 => [
            'newIndex' => true,
        ],
        '/Items/{Id}/Images/{Type}/{Index}/Url'                                                                   => [
            'url' => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/Items/{Id}/Images/{Type}/{Index}/{Tag}/{Format}/{MaxWidth}/{MaxHeight}/{PercentPlayed}/{UnplayedCount}' => [
            'id'            => true,
            'maxWidth'      => true,
            'maxHeight'     => true,
            'tag'           => true,
            'format'        => true,
            'percentPlayed' => true,
            'unplayedCount' => true,
            'type'          => true,
            'index'         => true,
        ],
        '/Items/{Id}/Images'                                                                                      => [
            'id' => true,
        ],
        '/Artists/{Name}/Images/{Type}'                                                                           => [
            'name' => true,
            'type' => true,
        ],
        '/GameGenres/{Name}/Images/{Type}'                                                                        => [
            'name' => true,
            'type' => true,
        ],
        '/Genres/{Name}/Images/{Type}'                                                                            => [
            'name' => true,
            'type' => true,
        ],
        '/Items/{Id}/Images/{Type}'                                                                               => [
            'id'   => true,
            'type' => true,
        ],
        '/MusicGenres/{Name}/Images/{Type}'                                                                       => [
            'name' => true,
            'type' => true,
        ],
        '/Persons/{Name}/Images/{Type}'                                                                           => [
            'name' => true,
            'type' => true,
        ],
        '/Studios/{Name}/Images/{Type}'                                                                           => [
            'name' => true,
            'type' => true,
        ],
        '/Users/{Id}/Images/{Type}'                                                                               => [
            'id'   => true,
            'type' => true,
        ],
        '/Artists/{Name}/Images/{Type}/{Index}'                                                                   => [
            'name'  => true,
            'type'  => true,
            'index' => true,
        ],
        '/GameGenres/{Name}/Images/{Type}/{Index}'                                                                => [
            'name'  => true,
            'type'  => true,
            'index' => true,
        ],
        '/Genres/{Name}/Images/{Type}/{Index}'                                                                    => [
            'name'  => true,
            'type'  => true,
            'index' => true,
        ],
        '/Items/{Id}/Images/{Type}/{Index}'                                                                       => [
            'id'    => true,
            'type'  => true,
            'index' => true,
        ],
        '/Items/{Id}/Images/{Type}/Delete'                                                                        => [
            'id'   => true,
            'type' => true,
        ],
        '/MusicGenres/{Name}/Images/{Type}/{Index}'                                                               => [
            'name'  => true,
            'type'  => true,
            'index' => true,
        ],
        '/Persons/{Name}/Images/{Type}/{Index}'                                                                   => [
            'name'  => true,
            'type'  => true,
            'index' => true,
        ],
        '/Studios/{Name}/Images/{Type}/{Index}'                                                                   => [
            'name'  => true,
            'type'  => true,
            'index' => true,
        ],
        '/Users/{Id}/Images/{Type}/{Index}'                                                                       => [
            'id'    => true,
            'type'  => true,
            'index' => true,
        ],
        '/Users/{Id}/Images/{Type}/Delete'                                                                        => [
            'id'   => true,
            'type' => true,
        ],
        '/Items/{Id}/Images/{Type}/{Index}/Delete'                                                                => [
            'id'    => true,
            'type'  => true,
            'index' => true,
        ],
        '/Items/{Id}/Images/{Type}/{Index}/Index'                                                                 => [
            'id'    => true,
            'type'  => true,
            'index' => true,
        ],
        '/Items/{Id}/Images/{Type}/{Index}/Url'                                                                   => [
            'id'    => true,
            'type'  => true,
            'index' => true,
        ],
        '/Users/{Id}/Images/{Type}/{Index}/Delete'                                                                => [
            'id'    => true,
            'type'  => true,
            'index' => true,
        ],
    ];
    protected static array $headerParameters = [];

    public function getItemsByIdImagesByTypeByIndexByTagByFormatByMaxwidthByMaxheightByPercentplayedByUnplayedcount(
        string $id,
        int $maxWidth,
        \EmbyClient\Model\ImageType $type,
        bool $autoOrient,
        string $foregroundLayer,
        string $backgroundColor,
        int $unplayedCount,
        bool $addPlayedIndicator,
        string $format,
        bool $enableImageEnhancers,
        string $tag,
        int $quality,
        int $height,
        int $width,
        int $maxHeight,
        int $index,
        null|float $percentPlayed = null,
        null|bool $cropWhitespace = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $id, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    /**
     * Gets information about an item's images
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\ImageInfo[]
     */
    public function getItemsByIdImages(string $id): array
    {
        return $this->makeApiCall(__FUNCTION__, $id);
    }

    public function getArtistsByNameImagesByType(
        string $name,
        int $maxWidth,
        \EmbyClient\Model\ImageType $type,
        bool $autoOrient,
        string $foregroundLayer,
        string $backgroundColor,
        int $unplayedCount,
        bool $addPlayedIndicator,
        string $format,
        bool $enableImageEnhancers,
        string $tag,
        int $quality,
        int $height,
        int $width,
        int $maxHeight,
        int $index,
        null|float $percentPlayed = null,
        null|bool $cropWhitespace = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $name, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    public function getGamegenresByNameImagesByType(
        string $name,
        int $maxWidth,
        \EmbyClient\Model\ImageType $type,
        bool $autoOrient,
        string $foregroundLayer,
        string $backgroundColor,
        int $unplayedCount,
        bool $addPlayedIndicator,
        string $format,
        bool $enableImageEnhancers,
        string $tag,
        int $quality,
        int $height,
        int $width,
        int $maxHeight,
        int $index,
        null|float $percentPlayed = null,
        null|bool $cropWhitespace = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $name, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    public function getGenresByNameImagesByType(
        string $name,
        int $maxWidth,
        \EmbyClient\Model\ImageType $type,
        bool $autoOrient,
        string $foregroundLayer,
        string $backgroundColor,
        int $unplayedCount,
        bool $addPlayedIndicator,
        string $format,
        bool $enableImageEnhancers,
        string $tag,
        int $quality,
        int $height,
        int $width,
        int $maxHeight,
        int $index,
        null|float $percentPlayed = null,
        null|bool $cropWhitespace = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $name, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    public function getItemsByIdImagesByType(
        string $id,
        int $maxWidth,
        \EmbyClient\Model\ImageType $type,
        bool $autoOrient,
        string $foregroundLayer,
        string $backgroundColor,
        int $unplayedCount,
        bool $addPlayedIndicator,
        string $format,
        bool $enableImageEnhancers,
        string $tag,
        int $quality,
        int $height,
        int $width,
        int $maxHeight,
        int $index,
        null|float $percentPlayed = null,
        null|bool $cropWhitespace = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $id, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    /**
     * Uploads an image for an item, must be base64 encoded.
     * Requires authentication as administrator.
     */
    public function postItemsByIdImagesByType(
        string $id,
        \EmbyClient\Model\ImageType $type,
        int $index
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $type, $index);
    }

    public function deleteItemsByIdImagesByType(
        string $id,
        \EmbyClient\Model\ImageType $type,
        int $index
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $type, $index);
    }

    public function getMusicgenresByNameImagesByType(
        string $name,
        int $maxWidth,
        \EmbyClient\Model\ImageType $type,
        bool $autoOrient,
        string $foregroundLayer,
        string $backgroundColor,
        int $unplayedCount,
        bool $addPlayedIndicator,
        string $format,
        bool $enableImageEnhancers,
        string $tag,
        int $quality,
        int $height,
        int $width,
        int $maxHeight,
        int $index,
        null|float $percentPlayed = null,
        null|bool $cropWhitespace = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $name, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    public function getPersonsByNameImagesByType(
        string $name,
        int $maxWidth,
        \EmbyClient\Model\ImageType $type,
        bool $autoOrient,
        string $foregroundLayer,
        string $backgroundColor,
        int $unplayedCount,
        bool $addPlayedIndicator,
        string $format,
        bool $enableImageEnhancers,
        string $tag,
        int $quality,
        int $height,
        int $width,
        int $maxHeight,
        int $index,
        null|float $percentPlayed = null,
        null|bool $cropWhitespace = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $name, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    public function getStudiosByNameImagesByType(
        string $name,
        int $maxWidth,
        \EmbyClient\Model\ImageType $type,
        bool $autoOrient,
        string $foregroundLayer,
        string $backgroundColor,
        int $unplayedCount,
        bool $addPlayedIndicator,
        string $format,
        bool $enableImageEnhancers,
        string $tag,
        int $quality,
        int $height,
        int $width,
        int $maxHeight,
        int $index,
        null|float $percentPlayed = null,
        null|bool $cropWhitespace = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $name, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    /**
     * @see https://github.com/MediaBrowser/Emby/wiki/User-Authentication API Documentation: Authentication
     */
    public function getUsersByIdImagesByType(
        string $id,
        int $maxWidth,
        \EmbyClient\Model\ImageType $type,
        bool $autoOrient,
        string $foregroundLayer,
        string $backgroundColor,
        int $unplayedCount,
        bool $addPlayedIndicator,
        string $format,
        bool $enableImageEnhancers,
        string $tag,
        int $quality,
        int $height,
        int $width,
        int $maxHeight,
        int $index,
        null|float $percentPlayed = null,
        null|bool $cropWhitespace = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $id, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    /**
     * Uploads an image for an item, must be base64 encoded.
     * Requires authentication as user.
     */
    public function postUsersByIdImagesByType(
        string $id,
        \EmbyClient\Model\ImageType $type,
        int $index
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $type, $index);
    }

    public function deleteUsersByIdImagesByType(
        string $id,
        \EmbyClient\Model\ImageType $type,
        int $index
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $type, $index);
    }

    public function getArtistsByNameImagesByTypeByIndex(
        string $name,
        int $maxWidth,
        \EmbyClient\Model\ImageType $type,
        bool $autoOrient,
        string $foregroundLayer,
        string $backgroundColor,
        int $unplayedCount,
        bool $addPlayedIndicator,
        string $format,
        bool $enableImageEnhancers,
        string $tag,
        int $quality,
        int $height,
        int $width,
        int $maxHeight,
        int $index,
        null|float $percentPlayed = null,
        null|bool $cropWhitespace = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $name, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    public function getGamegenresByNameImagesByTypeByIndex(
        string $name,
        int $maxWidth,
        \EmbyClient\Model\ImageType $type,
        bool $autoOrient,
        string $foregroundLayer,
        string $backgroundColor,
        int $unplayedCount,
        bool $addPlayedIndicator,
        string $format,
        bool $enableImageEnhancers,
        string $tag,
        int $quality,
        int $height,
        int $width,
        int $maxHeight,
        int $index,
        null|float $percentPlayed = null,
        null|bool $cropWhitespace = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $name, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    public function getGenresByNameImagesByTypeByIndex(
        string $name,
        int $maxWidth,
        \EmbyClient\Model\ImageType $type,
        bool $autoOrient,
        string $foregroundLayer,
        string $backgroundColor,
        int $unplayedCount,
        bool $addPlayedIndicator,
        string $format,
        bool $enableImageEnhancers,
        string $tag,
        int $quality,
        int $height,
        int $width,
        int $maxHeight,
        int $index,
        null|float $percentPlayed = null,
        null|bool $cropWhitespace = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $name, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    public function getItemsByIdImagesByTypeByIndex(
        string $id,
        int $maxWidth,
        \EmbyClient\Model\ImageType $type,
        bool $autoOrient,
        string $foregroundLayer,
        string $backgroundColor,
        int $unplayedCount,
        bool $addPlayedIndicator,
        string $format,
        bool $enableImageEnhancers,
        string $tag,
        int $quality,
        int $height,
        int $width,
        int $maxHeight,
        int $index,
        null|float $percentPlayed = null,
        null|bool $cropWhitespace = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $id, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    /**
     * Uploads an image for an item, must be base64 encoded.
     * Requires authentication as administrator.
     */
    public function postItemsByIdImagesByTypeByIndex(
        string $id,
        \EmbyClient\Model\ImageType $type,
        int $index
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $type, $index);
    }

    public function deleteItemsByIdImagesByTypeByIndex(
        string $id,
        \EmbyClient\Model\ImageType $type,
        int $index
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $type, $index);
    }

    public function postItemsByIdImagesByTypeDelete(
        string $id,
        \EmbyClient\Model\ImageType $type,
        int $index
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $type, $index);
    }

    public function getMusicgenresByNameImagesByTypeByIndex(
        string $name,
        int $maxWidth,
        \EmbyClient\Model\ImageType $type,
        bool $autoOrient,
        string $foregroundLayer,
        string $backgroundColor,
        int $unplayedCount,
        bool $addPlayedIndicator,
        string $format,
        bool $enableImageEnhancers,
        string $tag,
        int $quality,
        int $height,
        int $width,
        int $maxHeight,
        int $index,
        null|float $percentPlayed = null,
        null|bool $cropWhitespace = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $name, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    public function getPersonsByNameImagesByTypeByIndex(
        string $name,
        int $maxWidth,
        \EmbyClient\Model\ImageType $type,
        bool $autoOrient,
        string $foregroundLayer,
        string $backgroundColor,
        int $unplayedCount,
        bool $addPlayedIndicator,
        string $format,
        bool $enableImageEnhancers,
        string $tag,
        int $quality,
        int $height,
        int $width,
        int $maxHeight,
        int $index,
        null|float $percentPlayed = null,
        null|bool $cropWhitespace = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $name, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    public function getStudiosByNameImagesByTypeByIndex(
        string $name,
        int $maxWidth,
        \EmbyClient\Model\ImageType $type,
        bool $autoOrient,
        string $foregroundLayer,
        string $backgroundColor,
        int $unplayedCount,
        bool $addPlayedIndicator,
        string $format,
        bool $enableImageEnhancers,
        string $tag,
        int $quality,
        int $height,
        int $width,
        int $maxHeight,
        int $index,
        null|float $percentPlayed = null,
        null|bool $cropWhitespace = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $name, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    public function getUsersByIdImagesByTypeByIndex(
        string $id,
        int $maxWidth,
        \EmbyClient\Model\ImageType $type,
        bool $autoOrient,
        string $foregroundLayer,
        string $backgroundColor,
        int $unplayedCount,
        bool $addPlayedIndicator,
        string $format,
        bool $enableImageEnhancers,
        string $tag,
        int $quality,
        int $height,
        int $width,
        int $maxHeight,
        int $index,
        null|float $percentPlayed = null,
        null|bool $cropWhitespace = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $id, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    /**
     * Uploads an image for an item, must be base64 encoded.
     * Requires authentication as user.
     */
    public function postUsersByIdImagesByTypeByIndex(
        string $id,
        \EmbyClient\Model\ImageType $type,
        int $index
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $type, $index);
    }

    public function deleteUsersByIdImagesByTypeByIndex(
        string $id,
        \EmbyClient\Model\ImageType $type,
        int $index
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $type, $index);
    }

    public function postUsersByIdImagesByTypeDelete(
        string $id,
        \EmbyClient\Model\ImageType $type,
        int $index
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $type, $index);
    }

    public function postItemsByIdImagesByTypeByIndexDelete(
        string $id,
        \EmbyClient\Model\ImageType $type,
        int $index
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $type, $index);
    }

    /**
     * Updates the index for an item image
     * Requires authentication as administrator.
     */
    public function postItemsByIdImagesByTypeByIndexIndex(
        string $id,
        \EmbyClient\Model\ImageType $type,
        int $index,
        int $newIndex
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $type, $index, $newIndex);
    }

    /**
     * Updates the index for an item image
     * Requires authentication as administrator.
     */
    public function postItemsByIdImagesByTypeByIndexUrl(
        string $id,
        \EmbyClient\Model\ImageType $type,
        int $index,
        string $url
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $type, $index, $url);
    }

    public function postUsersByIdImagesByTypeByIndexDelete(
        string $id,
        \EmbyClient\Model\ImageType $type,
        int $index
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $type, $index);
    }
}
