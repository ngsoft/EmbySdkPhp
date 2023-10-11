<?php

declare(strict_types=1);

namespace EmbyClient\Model\LiveTv;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.LiveTv.KeywordInfo')]
class KeywordInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'keywordType' => KeywordType::class,
    ];

    protected KeywordType $keywordType;
    protected string $keyword;

    public function getKeywordType(): KeywordType
    {
        return $this->keywordType;
    }

    public function getKeyword(): string
    {
        return $this->keyword;
    }
}
