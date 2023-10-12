<?php

declare(strict_types=1);

namespace EmbyClient\Model\Devices;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Devices.DeviceOptions')]
class DeviceOptions extends \EmbyClient\Model
{
    protected string $customName;

    public function getCustomName(): string
    {
        return $this->customName;
    }
}
