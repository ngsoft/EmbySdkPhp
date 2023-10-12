<?php

declare(strict_types=1);

namespace EmbyClient\Model\Branding;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Branding.BrandingOptions')]
class BrandingOptions extends \EmbyClient\Model
{
    protected string $loginDisclaimer;
    protected string $customCss;

    public function getLoginDisclaimer(): string
    {
        return $this->loginDisclaimer;
    }

    public function getCustomCss(): string
    {
        return $this->customCss;
    }
}
