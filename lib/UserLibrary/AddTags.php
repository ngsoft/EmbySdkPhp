<?php

declare(strict_types=1);

namespace EmbyClient\Model\UserLibrary;

use EmbyClient\RefName;

#[RefName('Emby.Api.UserLibrary.AddTags')]
class AddTags extends \EmbyClient\Model
{
    protected static array $mapping = [
        'tags' => \EmbyClient\Model\NameIdPair::class,
    ];

    /** @var \EmbyClient\Model\NameIdPair[] */
    protected array $tags;

    /**
     * @return \EmbyClient\Model\NameIdPair[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }
}
