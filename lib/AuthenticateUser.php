<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('Emby.Api.AuthenticateUser')]
class AuthenticateUser extends \EmbyClient\Model
{
    protected string $pw;

    public function getPw(): string
    {
        return $this->pw;
    }
}
