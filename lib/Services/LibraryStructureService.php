<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class LibraryStructureService extends ApiService
{
    protected static array $endpoints        = [
        'postLibraryVirtualfolders'               => [
            '/Library/VirtualFolders',
            'POST',
            'void',
            false,
        ],
        'deleteLibraryVirtualfolders'             => [
            '/Library/VirtualFolders',
            'DELETE',
            'void',
            false,
        ],
        'getLibraryVirtualfoldersQuery'           => [
            '/Library/VirtualFolders/Query',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\VirtualFolderInfo',
            false,
        ],
        'postLibraryVirtualfoldersLibraryoptions' => [
            '/Library/VirtualFolders/LibraryOptions',
            'POST',
            'void',
            false,
        ],
        'postLibraryVirtualfoldersName'           => [
            '/Library/VirtualFolders/Name',
            'POST',
            'void',
            false,
        ],
        'postLibraryVirtualfoldersDelete'         => [
            '/Library/VirtualFolders/Delete',
            'POST',
            'void',
            false,
        ],
        'postLibraryVirtualfoldersPaths'          => [
            '/Library/VirtualFolders/Paths',
            'POST',
            'void',
            false,
        ],
        'deleteLibraryVirtualfoldersPaths'        => [
            '/Library/VirtualFolders/Paths',
            'DELETE',
            'void',
            false,
        ],
        'postLibraryVirtualfoldersPathsUpdate'    => [
            '/Library/VirtualFolders/Paths/Update',
            'POST',
            'void',
            false,
        ],
        'postLibraryVirtualfoldersPathsDelete'    => [
            '/Library/VirtualFolders/Paths/Delete',
            'POST',
            'void',
            false,
        ],
    ];
    protected static array $queryParameters  = [
        '/Library/VirtualFolders/Query' => [
            'startIndex' => true,
            'limit'      => true,
        ],
    ];
    protected static array $pathParameters   = [];
    protected static array $headerParameters = [];

    public function postLibraryVirtualfolders(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    public function deleteLibraryVirtualfolders(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    public function getLibraryVirtualfoldersQuery(
        int $startIndex,
        null|int $limit = null
    ): \EmbyClient\Model\QueryResult\VirtualFolderInfo {
        return $this->makeApiCall(__FUNCTION__, $startIndex, $limit);
    }

    public function postLibraryVirtualfoldersLibraryoptions(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    public function postLibraryVirtualfoldersName(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    public function postLibraryVirtualfoldersDelete(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    public function postLibraryVirtualfoldersPaths(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    public function deleteLibraryVirtualfoldersPaths(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    public function postLibraryVirtualfoldersPathsUpdate(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    public function postLibraryVirtualfoldersPathsDelete(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }
}
