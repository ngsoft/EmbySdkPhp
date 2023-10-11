<?php

declare(strict_types=1);

namespace EmbyClient\Model\Globalization;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Globalization.LocalizatonOption')]
class LocalizatonOption extends \EmbyClient\Model
{
    protected string $name;
    protected string $value;

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
