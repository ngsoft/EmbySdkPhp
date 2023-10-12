<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\LiveTV;

use EmbyClient\RefName;

#[RefName('Emby.LiveTV.ChannelManagementInfo')]
class ChannelManagementInfo extends \EmbyClient\Model
{
    protected string $id;
    protected string $name;

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
