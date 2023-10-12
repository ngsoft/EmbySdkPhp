<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('Emby.Api.CreateUserByName')]
class CreateUserByName extends \EmbyClient\Model
{
    protected string $name;

    public function getName(): string
    {
        return $this->name;
    }
}
