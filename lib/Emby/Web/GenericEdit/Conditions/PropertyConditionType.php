<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Web\GenericEdit\Conditions;

use EmbyClient\RefName;

#[RefName('Emby.Web.GenericEdit.Conditions.PropertyConditionType')]
enum PropertyConditionType: string
{
    case Visible = 'Visible';
    case Enabled = 'Enabled';
}
