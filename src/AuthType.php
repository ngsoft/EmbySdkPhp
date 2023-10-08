<?php

declare(strict_types=1);

namespace EmbyClient;

enum AuthType
{
    case None;
    case ApiKey;
    case Basic;
    case Token;
}
