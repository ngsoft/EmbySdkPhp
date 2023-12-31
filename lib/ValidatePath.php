<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('Emby.Api.ValidatePath')]
class ValidatePath extends \EmbyClient\Model
{
    protected bool $validateWriteable;
    protected bool $isFile;

    public function getValidateWriteable(): bool
    {
        return $this->validateWriteable;
    }

    public function isFile(): bool
    {
        return $this->isFile;
    }
}
