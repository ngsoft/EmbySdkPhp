<?php

declare(strict_types=1);

namespace EmbyClient;

use Psr\Http\Message\RequestInterface;

final class Connection
{
    public const BASEPATH             = '%s/emby';
    public const DEFAULT_EMBY_PORT    = 8096;
    public const DEFAULT_HEADER_TOKEN = 'X-Emby-Token';

    private static ?self $instance    = null;
    private static array $baseCache   = [];

    /**
     * Server test connection status.
     */
    private ?bool $connection         = null;

    private bool $secure              = true;

    private function __construct(
        protected string $server,
        protected string $token
    ) {
        self::$instance ??= $this;
    }

    public function __unserialize(array $data): void
    {
        [$this->server, $this->token, $this->secure] = $data;
        self::$instance ??= $this;
    }

    public function __serialize(): array
    {
        return [$this->server, $this->token, $this->secure];
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
        return self::$baseCache[$this->getServer()] ??= sprintf(
            self::BASEPATH,
            ($this->secure ? 'https://' : 'http://') .
            $this->getServer()
        );
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
            ->withHeader(self::DEFAULT_HEADER_TOKEN, $this->getToken())
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
        bool $silent = true,
        bool $raw = false
    ): null|array|string {
        return HttpClient::sendApiRequest($this->createRequest(
            $endpoint,
            $query,
            $headers,
            $method
        ), $silent, $raw);
    }

    /**
     * Tests if connection works.
     */
    public function testConnection(bool $silent = true): bool
    {
        return $this->connection ??= null !== $this->makeApiCall('/Libraries/AvailableOptions', silent: $silent);
    }

    /**
     * Makes Connection active.
     */
    public function makeActive(): self
    {
        return self::$instance = $this;
    }

    /**
     * Uses HTTPS.
     */
    public function makeSecure(bool $secure = true): self
    {
        $this->secure = $secure;
        unset(self::$baseCache[$this->getServer()]);
        return $this;
    }

    /**
     * Connection uses https:// ?
     */
    public function isSecure(): bool
    {
        return $this->secure;
    }

    /**
     * Connect using host.
     */
    public static function getConnection(string $host, string $token, int $port = self::DEFAULT_EMBY_PORT): self
    {
        $secure           = false;

        if (preg_match('#^https?://#', $host))
        {
            $secure = str_starts_with($host, 'https');
            $host   = preg_replace('#^https?://#', '', $host);
            $host   = preg_replace('#/.*$#', '', $host);
        }

        if ( ! preg_match('#:\d+$#', $host))
        {
            $host .= ":{$port}";
        }
        $instance         = new self($host, $token);
        $instance->secure = $secure;
        return $instance;
    }
}
