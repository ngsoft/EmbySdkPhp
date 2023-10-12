<?php

declare(strict_types=1);

namespace EmbyClient\Model\Library;

use EmbyClient\RefName;

#[RefName('Emby.Api.Library.DeleteInfo')]
class DeleteInfo extends \EmbyClient\Model
{
    /** @var string[] */
    protected array $paths;

    /**
     * @return string[]
     */
    public function getPaths(): array
    {
        return $this->paths;
    }
}
