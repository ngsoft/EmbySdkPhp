<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Web\GenericEdit\Editors;

use EmbyClient\RefName;

#[RefName('Emby.Web.GenericEdit.Editors.EditorBase')]
class EditorBase extends \EmbyClient\Model
{
    protected static array $mapping = [
        'editorType' => \EmbyClient\Model\Emby\Web\GenericEdit\Common\EditorTypes::class,
    ];

    protected \EmbyClient\Model\Emby\Web\GenericEdit\Common\EditorTypes $editorType;
    protected string $name;
    protected string $id;
    protected bool $allowEmpty;
    protected bool $isReadOnly;
    protected bool $isAdvanced;
    protected string $displayName;
    protected string $description;
    protected string $parentId;

    public function getEditorType(): \EmbyClient\Model\Emby\Web\GenericEdit\Common\EditorTypes
    {
        return $this->editorType;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getAllowEmpty(): bool
    {
        return $this->allowEmpty;
    }

    public function getIsReadOnly(): bool
    {
        return $this->isReadOnly;
    }

    public function getIsAdvanced(): bool
    {
        return $this->isAdvanced;
    }

    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getParentId(): string
    {
        return $this->parentId;
    }
}
