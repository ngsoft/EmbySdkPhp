<?php

declare(strict_types=1);

namespace EmbyClient\Model\Library;

use EmbyClient\Model\RefName;

#[RefName('Emby.Api.Library.MediaFolder')]
class MediaFolder extends \EmbyClient\Model
{
    protected static array $mapping = [
        'subFolders' => SubFolder::class,
    ];

    protected string $name;
    protected string $id;
    /** @var SubFolder[] */
    protected array $subFolders;

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return SubFolder[]
     */
    public function getSubFolders(): array
    {
        return $this->subFolders;
    }
}
