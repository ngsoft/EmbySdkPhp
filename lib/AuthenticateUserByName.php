<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('Emby.Api.AuthenticateUserByName')]
class AuthenticateUserByName extends \EmbyClient\Model
{
    protected string $username;
    protected string $pw;

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPw(): string
    {
        return $this->pw;
    }
}
