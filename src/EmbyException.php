<?php

declare(strict_types=1);

namespace EmbyClient;

use Psr\Http\Client\ClientExceptionInterface;

class EmbyException extends \RuntimeException implements ClientExceptionInterface
{
    protected string $defaultMessage = '';
    protected int $defaultCode       = 0;

    public function __construct(?string $message = null, ?int $code = null, ?\Throwable $previous = null)
    {
        $message ??= $this->defaultMessage;
        $code    ??= $this->defaultCode;

        parent::__construct($message, $code, $previous);
    }
}
