<?php

declare(strict_types=1);

namespace EmbyClient\Model\Globalization;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Globalization.CultureDto')]
class CultureDto extends \EmbyClient\Model
{
    protected string $name;
    protected string $displayName;
    protected string $twoLetterISOLanguageName;
    protected string $threeLetterISOLanguageName;
    /** @var string[] */
    protected array $threeLetterISOLanguageNames;
    /** @var string[] */
    protected array $twoLetterISOLanguageNames;

    public function getName(): string
    {
        return $this->name;
    }

    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    public function getTwoLetterISOLanguageName(): string
    {
        return $this->twoLetterISOLanguageName;
    }

    public function getThreeLetterISOLanguageName(): string
    {
        return $this->threeLetterISOLanguageName;
    }

    /**
     * @return string[]
     */
    public function getThreeLetterISOLanguageNames(): array
    {
        return $this->threeLetterISOLanguageNames;
    }

    /**
     * @return string[]
     */
    public function getTwoLetterISOLanguageNames(): array
    {
        return $this->twoLetterISOLanguageNames;
    }
}
