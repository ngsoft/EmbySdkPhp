<?php

declare(strict_types=1);

namespace EmbyClient\Model\Configuration;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Configuration.ImageOption')]
class ImageOption extends \EmbyClient\Model
{
    protected static array $mapping = [
        'type' => \EmbyClient\Model\ImageType::class,
    ];

    protected \EmbyClient\Model\ImageType $type;
    protected int $limit;
    protected int $minWidth;

    public function getType(): \EmbyClient\Model\ImageType
    {
        return $this->type;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getMinWidth(): int
    {
        return $this->minWidth;
    }
}
