<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('Emby.Api.ForgotPassword')]
class ForgotPassword extends \EmbyClient\Model
{
    protected string $enteredUsername;

    public function getEnteredUsername(): string
    {
        return $this->enteredUsername;
    }
}
