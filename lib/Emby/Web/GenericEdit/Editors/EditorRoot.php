<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Web\GenericEdit\Editors;

use EmbyClient\RefName;

#[RefName('Emby.Web.GenericEdit.Editors.EditorRoot')]
class EditorRoot extends \EmbyClient\Model
{
    protected static array $mapping = [
        'propertyConditions' => \EmbyClient\Model\Emby\Web\GenericEdit\Conditions\PropertyCondition::class,
        'postbackActions'    => \EmbyClient\Model\Emby\Web\GenericEdit\Actions\PostbackAction::class,
        'titleButton'        => EditorButtonItem::class,
        'editorItems'        => EditorBase::class,
        'editorType'         => \EmbyClient\Model\Emby\Web\GenericEdit\Common\EditorTypes::class,
    ];

    /** @var \EmbyClient\Model\Emby\Web\GenericEdit\Conditions\PropertyCondition[] */
    protected array $propertyConditions;
    /** @var \EmbyClient\Model\Emby\Web\GenericEdit\Actions\PostbackAction[] */
    protected array $postbackActions;
    protected EditorButtonItem $titleButton;
    /** @var EditorBase[] */
    protected array $editorItems;
    protected \EmbyClient\Model\Emby\Web\GenericEdit\Common\EditorTypes $editorType;
    protected string $name;
    protected string $id;
    protected bool $allowEmpty;
    protected bool $isReadOnly;
    protected bool $isAdvanced;
    protected string $displayName;
    protected string $description;
    protected string $parentId;

    /**
     * @return \EmbyClient\Model\Emby\Web\GenericEdit\Conditions\PropertyCondition[]
     */
    public function getPropertyConditions(): array
    {
        return $this->propertyConditions;
    }

    /**
     * @return \EmbyClient\Model\Emby\Web\GenericEdit\Actions\PostbackAction[]
     */
    public function getPostbackActions(): array
    {
        return $this->postbackActions;
    }

    public function getTitleButton(): EditorButtonItem
    {
        return $this->titleButton;
    }

    /**
     * @return EditorBase[]
     */
    public function getEditorItems(): array
    {
        return $this->editorItems;
    }

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

    public function isReadOnly(): bool
    {
        return $this->isReadOnly;
    }

    public function isAdvanced(): bool
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
