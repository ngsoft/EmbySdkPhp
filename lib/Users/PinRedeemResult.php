<?php

declare(strict_types=1);

namespace EmbyClient\Model\Users;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Users.PinRedeemResult')]
class PinRedeemResult extends \EmbyClient\Model
{
    protected bool $success;
    /** @var string[] */
    protected array $usersReset;

    public function getSuccess(): bool
    {
        return $this->success;
    }

    /**
     * @return string[]
     */
    public function getUsersReset(): array
    {
        return $this->usersReset;
    }
}
