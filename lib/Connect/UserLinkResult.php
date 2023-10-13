<?php

declare(strict_types=1);

namespace EmbyClient\Model\Connect;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Controller.Connect.UserLinkResult')]
class UserLinkResult extends \EmbyClient\Model
{
    protected bool $isPending;
    protected bool $isNewUserInvitation;
    protected string $guestDisplayName;

    public function isPending(): bool
    {
        return $this->isPending;
    }

    public function isNewUserInvitation(): bool
    {
        return $this->isNewUserInvitation;
    }

    public function getGuestDisplayName(): string
    {
        return $this->guestDisplayName;
    }
}
