<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Web\GenericEdit\Actions;

use EmbyClient\RefName;

#[RefName('Emby.Web.GenericEdit.Actions.PostbackAction')]
class PostbackAction extends \EmbyClient\Model
{
    protected string $targetEditorId;
    protected string $postbackCommandId;
    protected string $commandParameterPropertyId;

    public function getTargetEditorId(): string
    {
        return $this->targetEditorId;
    }

    public function getPostbackCommandId(): string
    {
        return $this->postbackCommandId;
    }

    public function getCommandParameterPropertyId(): string
    {
        return $this->commandParameterPropertyId;
    }
}
