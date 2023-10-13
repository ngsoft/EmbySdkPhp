<?php

declare(strict_types=1);

namespace EmbyClient;

abstract class ApiService
{
    protected static array $endpoints        = [];
    protected static array $queryParameters  = [];
    protected static array $pathParameters   = [];
    protected static array $headerParameters = [];

    public function __construct(
        protected ?Connection $connection = null
    ) {
        $this->connection ??= Connection::getActiveConnection();
    }

    protected function makeApiCall(string $fn, ...$args)
    {
    }
}
