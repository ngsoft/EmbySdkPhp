<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Web\GenericEdit;

use EmbyClient\Model\RefName;

#[RefName('Emby.Web.GenericEdit.EditObjectContainer')]
class EditObjectContainer extends \EmbyClient\Model
{
    protected static array $mapping = [
        'editorRoot' => Editors\EditorRoot::class,
    ];

    protected object $object;
    protected object $defaultObject;
    protected string $typeName;
    protected Editors\EditorRoot $editorRoot;

    public function getObject(): object
    {
        return $this->object;
    }

    public function getDefaultObject(): object
    {
        return $this->defaultObject;
    }

    public function getTypeName(): string
    {
        return $this->typeName;
    }

    public function getEditorRoot(): Editors\EditorRoot
    {
        return $this->editorRoot;
    }
}
