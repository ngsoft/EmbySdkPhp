<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Dto.NameValuePair')]
class NameValuePair extends \EmbyClient\Model
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
