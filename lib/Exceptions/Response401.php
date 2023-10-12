<?php

declare(strict_types=1);

namespace EmbyClient\Model\Exceptions;

use Psr\Http\Client\ClientExceptionInterface;

class Response401 extends \RuntimeException implements ClientExceptionInterface
{
    public function __construct($message = 'Unauthorized. Client needs to authenticate.', $code = 401, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
