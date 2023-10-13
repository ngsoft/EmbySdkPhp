<?php

declare(strict_types=1);

namespace EmbyClient;

use Psr\Http\Message\RequestInterface;

class Connection
{
    public const BASEPATH             = '%s/emby';
    public const DEFAULT_EMBY_PORT    = 8096;
    public const DEFAULT_HEADER_TOKEN = 'X-Emby-Token';

    protected static ?self $instance  = null;

    /**
     * Server test connection status.
     */
    protected ?bool $connection       = null;

    public function __construct(
        protected string $server,
        protected string $token
    ) {
        self::$instance = $this;
    }

    public function __unserialize(array $data): void
    {
        [$this->server, $this->token] = $data;
        self::$instance               = $this;
    }

    public function __serialize(): array
    {
        return [$this->server, $this->token];
    }

    /**
     * Returns Last Connection created.
     */
    public static function getActiveConnection(): ?Connection
    {
        return self::$instance;
    }

    public function getServer(): string
    {
        return $this->server;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function getBasePath(): string
    {
        return sprintf(self::BASEPATH, $this->getServer());
    }

    public function createRequest(
        string $endpoint,
        array $query = [],
        array $headers = [],
        string $method = 'GET'
    ): RequestInterface {
        $uri     = HttpClient::getHttpFactory()->createUri($this->getBasePath() . $endpoint);

        if (count($query))
        {
            $uri = $uri->withQuery(http_build_query($query));
        }

        $request = HttpClient::createRequest($uri, $method)
            ->withHeader(static::DEFAULT_HEADER_TOKEN, $this->getToken())
        ;

        foreach ($headers as $header => $value)
        {
            $request = $request->withHeader($header, $value);
        }

        return $request;
    }

    public function makeApiCall(
        string $endpoint,
        array $query = [],
        array $headers = [],
        string $method = 'GET',
        bool $silent = true
    ): ?array {
        return HttpClient::sendApiRequest($this->createRequest(
            $endpoint,
            $query,
            $headers,
            $method
        ), $silent);
    }

    /**
     * Tests if connection works.
     */
    public function testConnection(bool $silent = true): bool
    {
        return $this->connection ??= null !== $this->makeApiCall('/Libraries/AvailableOptions', silent: $silent);
    }

    /**
     * Connect using host.
     */
    public static function getConnection(string $host, string $token, int $port = self::DEFAULT_EMBY_PORT): static
    {
        if ( ! preg_match('#https?://#', $host))
        {
            $host = sprintf('http://%s', rtrim($host, '/'));
        }

        if ( ! preg_match('#:\d+$#', $host))
        {
            $host .= ":{$port}";
        }
        return new static($host, $token);
    }
}
