<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Media\Model\Types;

use EmbyClient\Model\RefName;

#[RefName('Emby.Media.Model.Types.ProfileLevelInformation')]
class ProfileLevelInformation extends \EmbyClient\Model
{
    protected static array $mapping = [
        'profile' => ProfileInformation::class,
        'level  ' => LevelInformation::class,
    ];

    protected ProfileInformation $profile;
    protected LevelInformation $level;

    public function getProfile(): ProfileInformation
    {
        return $this->profile;
    }

    public function getLevel(): LevelInformation
    {
        return $this->level;
    }
}
