<?php

declare(strict_types=1);

namespace EmbyClient\Model\Library;

use EmbyClient\RefName;

#[RefName('Emby.Api.Library.UpdateLibraryOptions')]
class UpdateLibraryOptions extends \EmbyClient\Model
{
    protected static array $mapping = [
        'libraryOptions' => \EmbyClient\Model\Configuration\LibraryOptions::class,
    ];

    protected string $id;
    protected \EmbyClient\Model\Configuration\LibraryOptions $libraryOptions;

    public function getId(): string
    {
        return $this->id;
    }

    public function getLibraryOptions(): \EmbyClient\Model\Configuration\LibraryOptions
    {
        return $this->libraryOptions;
    }
}
