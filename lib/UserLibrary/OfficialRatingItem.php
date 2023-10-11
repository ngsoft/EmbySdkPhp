<?php

declare(strict_types=1);

namespace EmbyClient\Model\UserLibrary;

use EmbyClient\Model\RefName;

#[RefName('Emby.Api.UserLibrary.OfficialRatingItem')]
class OfficialRatingItem extends \EmbyClient\Model
{
    protected string $name;

    public function getName(): string
    {
        return $this->name;
    }
}
