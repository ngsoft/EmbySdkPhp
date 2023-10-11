<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Dlna\Profiles;

use EmbyClient\Model\RefName;

#[RefName('Emby.Dlna.Profiles.HttpHeaderInfo')]
class HttpHeaderInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'match' => HeaderMatchType::class,
    ];

    protected string $name;
    protected string $value;
    protected HeaderMatchType $match;

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function getMatch(): HeaderMatchType
    {
        return $this->match;
    }
}
