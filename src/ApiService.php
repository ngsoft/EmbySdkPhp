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

    public static function create(?Connection $connection = null): static
    {
        return new static($connection);
    }

    protected function getEndpoint(string $method): array
    {
        return static::$endpoints[$method];
    }

    protected function getQueryParameters(): array
    {
        return static::$queryParameters;
    }

    protected function getPathParameters(): array
    {
        return static::$pathParameters;
    }

    protected function getHeaderParameters(): array
    {
        return static::$headerParameters;
    }

    protected function makeApiCall(string $fn, ...$args)
    {
        var_dump(static::$endpoints, static::$queryParameters, static::$pathParameters, static::$headerParameters);
        var_dump($fn);

        exit;
    }
}
