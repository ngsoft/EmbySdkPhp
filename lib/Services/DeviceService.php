<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class DeviceService extends ApiService
{
    protected static array $endpoints        = [
        'getDevices'               => [
            '/Devices',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\Devices\\DeviceInfo',
            false,
        ],
        'deleteDevices'            => [
            '/Devices',
            'DELETE',
            'mixed',
            false,
        ],
        'getDevicesOptions'        => [
            '/Devices/Options',
            'GET',
            '\\EmbyClient\\Model\\Devices\\DeviceOptions',
            false,
        ],
        'postDevicesOptions'       => [
            '/Devices/Options',
            'POST',
            'void',
            false,
        ],
        'getDevicesInfo'           => [
            '/Devices/Info',
            'GET',
            '\\EmbyClient\\Model\\Devices\\DeviceInfo',
            false,
        ],
        'getDevicesCamerauploads'  => [
            '/Devices/CameraUploads',
            'GET',
            '\\EmbyClient\\Model\\Devices\\ContentUploadHistory',
            false,
        ],
        'postDevicesCamerauploads' => [
            '/Devices/CameraUploads',
            'POST',
            'void',
            false,
        ],
        'postDevicesDelete'        => [
            '/Devices/Delete',
            'POST',
            'mixed',
            false,
        ],
    ];
    protected static array $parameters       = [
        'getDevices'               => [],
        'deleteDevices'            => [
            'id',
        ],
        'getDevicesOptions'        => [
            'id',
        ],
        'postDevicesOptions'       => [
            'id',
        ],
        'getDevicesInfo'           => [
            'id',
        ],
        'getDevicesCamerauploads'  => [
            'deviceId',
        ],
        'postDevicesCamerauploads' => [
            'deviceId',
            'album',
            'name',
            'id',
        ],
        'postDevicesDelete'        => [
            'id',
        ],
    ];
    protected static array $queryParameters  = [
        '/Devices'               => [
            'id' => true,
        ],
        '/Devices/Options'       => [
            'id' => true,
        ],
        '/Devices/Info'          => [
            'id' => true,
        ],
        '/Devices/CameraUploads' => [
            'deviceId' => true,
            'album'    => true,
            'name'     => true,
            'id'       => true,
        ],
        '/Devices/Delete'        => [
            'id' => true,
        ],
    ];
    protected static array $pathParameters   = [];
    protected static array $headerParameters = [];

    /**
     * Gets all devices
     * Requires authentication as administrator.
     */
    public function getDevices(): \EmbyClient\Model\QueryResult\Devices\DeviceInfo
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Deletes a device
     * Requires authentication as administrator.
     */
    public function deleteDevices(string $id): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Gets options for a device
     * Requires authentication as administrator.
     */
    public function getDevicesOptions(string $id): \EmbyClient\Model\Devices\DeviceOptions
    {
        return $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Updates device options
     * Requires authentication as administrator.
     */
    public function postDevicesOptions(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Gets info for a device
     * Requires authentication as administrator.
     */
    public function getDevicesInfo(string $id): \EmbyClient\Model\Devices\DeviceInfo
    {
        return $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Gets camera upload history for a device
     * Requires authentication as user.
     */
    public function getDevicesCamerauploads(string $deviceId): \EmbyClient\Model\Devices\ContentUploadHistory
    {
        return $this->makeApiCall(__FUNCTION__, $deviceId);
    }

    /**
     * Uploads content
     * Requires authentication as user.
     */
    public function postDevicesCamerauploads(
        string $deviceId,
        string $album,
        string $name,
        string $id
    ): void {
        $this->makeApiCall(__FUNCTION__, $deviceId, $album, $name, $id);
    }

    /**
     * Deletes a device
     * Requires authentication as administrator.
     */
    public function postDevicesDelete(string $id): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $id);
    }
}
