<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class DlnaServerService extends ApiService
{
    protected static array $endpoints        = [
        'getDlnaByUuidDescriptionXml'                        => [
            '/Dlna/{UuId}/description.xml',
            'GET',
            'mixed',
            false,
        ],
        'getDlnaByUuidDescription'                           => [
            '/Dlna/{UuId}/description',
            'GET',
            'mixed',
            false,
        ],
        'getDlnaIconsByFilename'                             => [
            '/Dlna/icons/{Filename}',
            'GET',
            'mixed',
            false,
        ],
        'getDlnaByUuidContentdirectoryContentdirectoryXml'   => [
            '/Dlna/{UuId}/contentdirectory/contentdirectory.xml',
            'GET',
            'mixed',
            false,
        ],
        'getDlnaByUuidContentdirectoryContentdirectory'      => [
            '/Dlna/{UuId}/contentdirectory/contentdirectory',
            'GET',
            'mixed',
            false,
        ],
        'getDlnaByUuidConnectionmanagerConnectionmanagerXml' => [
            '/Dlna/{UuId}/connectionmanager/connectionmanager.xml',
            'GET',
            'mixed',
            false,
        ],
        'getDlnaByUuidConnectionmanagerConnectionmanager'    => [
            '/Dlna/{UuId}/connectionmanager/connectionmanager',
            'GET',
            'mixed',
            false,
        ],
        'postDlnaByUuidContentdirectoryControl'              => [
            '/Dlna/{UuId}/contentdirectory/control',
            'POST',
            'mixed',
            false,
        ],
        'postDlnaByUuidConnectionmanagerControl'             => [
            '/Dlna/{UuId}/connectionmanager/control',
            'POST',
            'mixed',
            false,
        ],
        'getDlnaByUuidIconsByFilename'                       => [
            '/Dlna/{UuId}/icons/{Filename}',
            'GET',
            'mixed',
            false,
        ],
    ];
    protected static array $queryParameters  = [
        '/Dlna/icons/{Filename}' => [
            'uuId' => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/Dlna/{UuId}/description.xml'                         => [
            'uuId' => true,
        ],
        '/Dlna/{UuId}/description'                             => [
            'uuId' => true,
        ],
        '/Dlna/icons/{Filename}'                               => [
            'filename' => true,
        ],
        '/Dlna/{UuId}/contentdirectory/contentdirectory.xml'   => [
            'uuId' => true,
        ],
        '/Dlna/{UuId}/contentdirectory/contentdirectory'       => [
            'uuId' => true,
        ],
        '/Dlna/{UuId}/connectionmanager/connectionmanager.xml' => [
            'uuId' => true,
        ],
        '/Dlna/{UuId}/connectionmanager/connectionmanager'     => [
            'uuId' => true,
        ],
        '/Dlna/{UuId}/contentdirectory/control'                => [
            'uuId' => true,
        ],
        '/Dlna/{UuId}/connectionmanager/control'               => [
            'uuId' => true,
        ],
        '/Dlna/{UuId}/icons/{Filename}'                        => [
            'uuId'     => true,
            'filename' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Gets dlna server info
     * No authentication required.
     */
    public function getDlnaByUuidDescriptionXml(string $uuId): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $uuId);
    }

    /**
     * Gets dlna server info
     * No authentication required.
     */
    public function getDlnaByUuidDescription(string $uuId): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $uuId);
    }

    /**
     * Gets a server icon
     * No authentication required.
     */
    public function getDlnaIconsByFilename(
        string $uuId,
        string $filename
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $uuId, $filename);
    }

    /**
     * Gets dlna content directory xml
     * No authentication required.
     */
    public function getDlnaByUuidContentdirectoryContentdirectoryXml(string $uuId): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $uuId);
    }

    /**
     * Gets dlna content directory xml
     * No authentication required.
     */
    public function getDlnaByUuidContentdirectoryContentdirectory(string $uuId): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $uuId);
    }

    /**
     * Gets dlna connection manager xml
     * No authentication required.
     */
    public function getDlnaByUuidConnectionmanagerConnectionmanagerXml(string $uuId): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $uuId);
    }

    /**
     * Gets dlna connection manager xml
     * No authentication required.
     */
    public function getDlnaByUuidConnectionmanagerConnectionmanager(string $uuId): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $uuId);
    }

    /**
     * Processes a control request
     * No authentication required.
     */
    public function postDlnaByUuidContentdirectoryControl(string $uuId): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $uuId);
    }

    /**
     * Processes a control request
     * No authentication required.
     */
    public function postDlnaByUuidConnectionmanagerControl(string $uuId): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $uuId);
    }

    /**
     * Gets a server icon
     * No authentication required.
     */
    public function getDlnaByUuidIconsByFilename(
        string $uuId,
        string $filename
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $uuId, $filename);
    }
}
