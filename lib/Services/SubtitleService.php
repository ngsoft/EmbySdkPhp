<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class SubtitleService extends ApiService
{
    protected static array $endpoints        = [
        'deleteItemsByIdSubtitlesByIndex'                                                => [
            '/Items/{Id}/Subtitles/{Index}',
            'DELETE',
            'mixed',
            false,
        ],
        'getProvidersSubtitlesSubtitlesById'                                             => [
            '/Providers/Subtitles/Subtitles/{Id}',
            'GET',
            'void',
            false,
        ],
        'deleteVideosByIdSubtitlesByIndex'                                               => [
            '/Videos/{Id}/Subtitles/{Index}',
            'DELETE',
            'mixed',
            false,
        ],
        'getItemsByIdRemotesearchSubtitlesByLanguage'                                    => [
            '/Items/{Id}/RemoteSearch/Subtitles/{Language}',
            'GET',
            'array',
            '\\EmbyClient\\Model\\RemoteSubtitleInfo',
        ],
        'postItemsByIdSubtitlesByIndexDelete'                                            => [
            '/Items/{Id}/Subtitles/{Index}/Delete',
            'POST',
            'mixed',
            false,
        ],
        'postItemsByIdRemotesearchSubtitlesBySubtitleid'                                 => [
            '/Items/{Id}/RemoteSearch/Subtitles/{SubtitleId}',
            'POST',
            '\\EmbyClient\\Model\\Subtitles\\SubtitleDownloadResult',
            false,
        ],
        'postVideosByIdSubtitlesByIndexDelete'                                           => [
            '/Videos/{Id}/Subtitles/{Index}/Delete',
            'POST',
            'mixed',
            false,
        ],
        'getItemsByIdByMediasourceidSubtitlesByIndexStreamByFormat'                      => [
            '/Items/{Id}/{MediaSourceId}/Subtitles/{Index}/Stream.{Format}',
            'GET',
            'mixed',
            false,
        ],
        'getVideosByIdByMediasourceidSubtitlesByIndexStreamByFormat'                     => [
            '/Videos/{Id}/{MediaSourceId}/Subtitles/{Index}/Stream.{Format}',
            'GET',
            'mixed',
            false,
        ],
        'getItemsByIdByMediasourceidSubtitlesByIndexByStartpositionticksStreamByFormat'  => [
            '/Items/{Id}/{MediaSourceId}/Subtitles/{Index}/{StartPositionTicks}/Stream.{Format}',
            'GET',
            'mixed',
            false,
        ],
        'getVideosByIdByMediasourceidSubtitlesByIndexByStartpositionticksStreamByFormat' => [
            '/Videos/{Id}/{MediaSourceId}/Subtitles/{Index}/{StartPositionTicks}/Stream.{Format}',
            'GET',
            'mixed',
            false,
        ],
    ];
    protected static array $queryParameters  = [
        '/Items/{Id}/Subtitles/{Index}'                                                       => [
            'mediaSourceId' => true,
        ],
        '/Videos/{Id}/Subtitles/{Index}'                                                      => [
            'mediaSourceId' => true,
        ],
        '/Items/{Id}/RemoteSearch/Subtitles/{Language}'                                       => [
            'mediaSourceId'  => true,
            'isPerfectMatch' => true,
            'isForced'       => true,
        ],
        '/Items/{Id}/Subtitles/{Index}/Delete'                                                => [
            'mediaSourceId' => true,
        ],
        '/Items/{Id}/RemoteSearch/Subtitles/{SubtitleId}'                                     => [
            'mediaSourceId' => true,
        ],
        '/Videos/{Id}/Subtitles/{Index}/Delete'                                               => [
            'mediaSourceId' => true,
        ],
        '/Items/{Id}/{MediaSourceId}/Subtitles/{Index}/Stream.{Format}'                       => [
            'startPositionTicks' => true,
            'endPositionTicks'   => true,
            'copyTimestamps'     => true,
        ],
        '/Videos/{Id}/{MediaSourceId}/Subtitles/{Index}/Stream.{Format}'                      => [
            'startPositionTicks' => true,
            'endPositionTicks'   => true,
            'copyTimestamps'     => true,
        ],
        '/Items/{Id}/{MediaSourceId}/Subtitles/{Index}/{StartPositionTicks}/Stream.{Format}'  => [
            'endPositionTicks' => true,
            'copyTimestamps'   => true,
        ],
        '/Videos/{Id}/{MediaSourceId}/Subtitles/{Index}/{StartPositionTicks}/Stream.{Format}' => [
            'endPositionTicks' => true,
            'copyTimestamps'   => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/Items/{Id}/Subtitles/{Index}'                                                       => [
            'id'    => true,
            'index' => true,
        ],
        '/Providers/Subtitles/Subtitles/{Id}'                                                 => [
            'id' => true,
        ],
        '/Videos/{Id}/Subtitles/{Index}'                                                      => [
            'id'    => true,
            'index' => true,
        ],
        '/Items/{Id}/RemoteSearch/Subtitles/{Language}'                                       => [
            'id'       => true,
            'language' => true,
        ],
        '/Items/{Id}/Subtitles/{Index}/Delete'                                                => [
            'id'    => true,
            'index' => true,
        ],
        '/Items/{Id}/RemoteSearch/Subtitles/{SubtitleId}'                                     => [
            'id'         => true,
            'subtitleId' => true,
        ],
        '/Videos/{Id}/Subtitles/{Index}/Delete'                                               => [
            'id'    => true,
            'index' => true,
        ],
        '/Items/{Id}/{MediaSourceId}/Subtitles/{Index}/Stream.{Format}'                       => [
            'id'            => true,
            'mediaSourceId' => true,
            'index'         => true,
            'format'        => true,
        ],
        '/Videos/{Id}/{MediaSourceId}/Subtitles/{Index}/Stream.{Format}'                      => [
            'id'            => true,
            'mediaSourceId' => true,
            'index'         => true,
            'format'        => true,
        ],
        '/Items/{Id}/{MediaSourceId}/Subtitles/{Index}/{StartPositionTicks}/Stream.{Format}'  => [
            'id'                 => true,
            'mediaSourceId'      => true,
            'index'              => true,
            'format'             => true,
            'startPositionTicks' => true,
        ],
        '/Videos/{Id}/{MediaSourceId}/Subtitles/{Index}/{StartPositionTicks}/Stream.{Format}' => [
            'id'                 => true,
            'mediaSourceId'      => true,
            'index'              => true,
            'format'             => true,
            'startPositionTicks' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Deletes an external subtitle file
     * Requires authentication as user.
     */
    public function deleteItemsByIdSubtitlesByIndex(
        string $id,
        string $mediaSourceId,
        int $index
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $id, $mediaSourceId, $index);
    }

    public function getProvidersSubtitlesSubtitlesById(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Deletes an external subtitle file
     * Requires authentication as user.
     */
    public function deleteVideosByIdSubtitlesByIndex(
        string $id,
        string $mediaSourceId,
        int $index
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $id, $mediaSourceId, $index);
    }

    /**
     * @return \EmbyClient\Model\RemoteSubtitleInfo[]
     */
    public function getItemsByIdRemotesearchSubtitlesByLanguage(
        string $id,
        string $mediaSourceId,
        string $language,
        null|bool $isForced = null,
        null|bool $isPerfectMatch = null
    ): array {
        return $this->makeApiCall(__FUNCTION__, $id, $mediaSourceId, $language, $isForced, $isPerfectMatch);
    }

    /**
     * Deletes an external subtitle file
     * Requires authentication as user.
     */
    public function postItemsByIdSubtitlesByIndexDelete(
        string $id,
        string $mediaSourceId,
        int $index
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $id, $mediaSourceId, $index);
    }

    public function postItemsByIdRemotesearchSubtitlesBySubtitleid(
        string $id,
        string $mediaSourceId,
        string $subtitleId
    ): \EmbyClient\Model\Subtitles\SubtitleDownloadResult {
        return $this->makeApiCall(__FUNCTION__, $id, $mediaSourceId, $subtitleId);
    }

    /**
     * Deletes an external subtitle file
     * Requires authentication as user.
     */
    public function postVideosByIdSubtitlesByIndexDelete(
        string $id,
        string $mediaSourceId,
        int $index
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $id, $mediaSourceId, $index);
    }

    /**
     * Gets subtitles in a specified format.
     * No authentication required.
     */
    public function getItemsByIdByMediasourceidSubtitlesByIndexStreamByFormat(
        string $id,
        string $mediaSourceId,
        int $index,
        string $format,
        int $startPositionTicks,
        bool $copyTimestamps,
        null|int $endPositionTicks = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $id, $mediaSourceId, $index, $format, $startPositionTicks, $copyTimestamps, $endPositionTicks);
    }

    /**
     * Gets subtitles in a specified format.
     * No authentication required.
     */
    public function getVideosByIdByMediasourceidSubtitlesByIndexStreamByFormat(
        string $id,
        string $mediaSourceId,
        int $index,
        string $format,
        int $startPositionTicks,
        bool $copyTimestamps,
        null|int $endPositionTicks = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $id, $mediaSourceId, $index, $format, $startPositionTicks, $copyTimestamps, $endPositionTicks);
    }

    /**
     * Gets subtitles in a specified format.
     * No authentication required.
     */
    public function getItemsByIdByMediasourceidSubtitlesByIndexByStartpositionticksStreamByFormat(
        string $id,
        string $mediaSourceId,
        int $index,
        string $format,
        int $startPositionTicks,
        bool $copyTimestamps,
        null|int $endPositionTicks = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $id, $mediaSourceId, $index, $format, $startPositionTicks, $copyTimestamps, $endPositionTicks);
    }

    /**
     * Gets subtitles in a specified format.
     * No authentication required.
     */
    public function getVideosByIdByMediasourceidSubtitlesByIndexByStartpositionticksStreamByFormat(
        string $id,
        string $mediaSourceId,
        int $index,
        string $format,
        int $startPositionTicks,
        bool $copyTimestamps,
        null|int $endPositionTicks = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $id, $mediaSourceId, $index, $format, $startPositionTicks, $copyTimestamps, $endPositionTicks);
    }
}
