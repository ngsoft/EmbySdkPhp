<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('Emby.Api.ForgotPasswordPin')]
class ForgotPasswordPin extends \EmbyClient\Model
{
    protected string $pin;

    public function getPin(): string
    {
        return $this->pin;
    }
}
