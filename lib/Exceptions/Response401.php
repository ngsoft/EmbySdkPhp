<?php

declare(strict_types=1);

namespace EmbyClient\Model\Exceptions;

use EmbyClient\EmbyException;

class Response401 extends EmbyException
{
    protected string $defaultMessage = 'Unauthorized. Client needs to authenticate.';
    protected int $defaultCode       = 401;
}
