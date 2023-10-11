<?php

declare(strict_types=1);

namespace EmbyClient\Model\Library;

use EmbyClient\Model\RefName;

#[RefName('Emby.Api.Library.PostUpdatedMedia')]
class PostUpdatedMedia extends \EmbyClient\Model
{
    protected static array $mapping = [
        'updates' => MediaUpdateInfo::class,
    ];

    /** @var MediaUpdateInfo[] */
    protected array $updates;

    /**
     * @return MediaUpdateInfo[]
     */
    public function getUpdates(): array
    {
        return $this->updates;
    }
}
