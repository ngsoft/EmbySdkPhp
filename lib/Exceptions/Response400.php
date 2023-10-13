<?php

declare(strict_types=1);

namespace EmbyClient\Model\Exceptions;

use EmbyClient\EmbyException;

class Response400 extends EmbyException
{
    protected string $defaultMessage = 'Bad Request. Server cannot process request.';
    protected int $defaultCode       = 400;
}
