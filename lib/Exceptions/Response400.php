<?php

declare(strict_types=1);

namespace EmbyClient\Model\Exceptions;

use Psr\Http\Client\ClientExceptionInterface;

class Response400 extends \RuntimeException implements ClientExceptionInterface
{
    public function __construct($message = 'Bad Request. Server cannot process request.', $code = 400, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
