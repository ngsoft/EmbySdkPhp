<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Web\GenericEdit\Common;

use EmbyClient\RefName;

#[RefName('Emby.Web.GenericEdit.Common.EditorTypes')]
enum EditorTypes: string
{
    case Group          = 'Group';
    case Text           = 'Text';
    case Numeric        = 'Numeric';
    case Boolean        = 'Boolean';
    case SelectSingle   = 'SelectSingle';
    case SelectMultiple = 'SelectMultiple';
    case Date           = 'Date';
    case FilePath       = 'FilePath';
    case FolderPath     = 'FolderPath';
    case StatusItem     = 'StatusItem';
    case ProgressItem   = 'ProgressItem';
    case ButtonItem     = 'ButtonItem';
    case ButtonGroup    = 'ButtonGroup';
    case CaptionItem    = 'CaptionItem';
    case LabelItem      = 'LabelItem';
    case ItemList       = 'ItemList';
    case RadioGroup     = 'RadioGroup';
    case DataGrid       = 'DataGrid';
    case PivotGrid      = 'PivotGrid';
    case SpacerItem     = 'SpacerItem';
}
