<?php

declare(strict_types=1);

namespace EmbyClient;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriFactoryInterface;
use Psr\Http\Message\UriInterface;
use Tuupola\Http\Factory\RequestFactory;
use Tuupola\Http\Factory\StreamFactory;
use Tuupola\Http\Factory\UriFactory;

final class HttpClient
{
    private static int $timeout                 = 5;

    private static ?ClientInterface $httpClient = null;

    private function __construct()
    {
    }

    public static function setTimeout(int $timeout): void
    {
        self::$timeout    = $timeout;
        self::$httpClient = null;
    }

    public static function getHttpClient(): ClientInterface
    {
        if ( ! isset(self::$httpClient))
        {
            // auto set up guzzlehttp/guzzle if available
            if ( ! class_exists(Client::class))
            {
                throw new \RuntimeException(
                    'No PSR-18 HTTP Client has been provided, try composer require guzzlehttp/guzzle'
                );
            }
            self::$httpClient ??= new Client([
                RequestOptions::TIMEOUT         => self::$timeout,
                RequestOptions::CONNECT_TIMEOUT => self::$timeout,
            ]);
        }

        return self::$httpClient;
    }

    public static function getHttpFactory(): RequestFactoryInterface|UriFactoryInterface|StreamFactoryInterface
    {
        static $instance;
        return $instance ??= new class(self::getRequestFactory(), self::getUriFactory(), self::getStreamFactory()) implements RequestFactoryInterface, UriFactoryInterface, StreamFactoryInterface
        {
            public function __construct(
                private readonly RequestFactoryInterface $requestFactory,
                private readonly UriFactoryInterface $uriFactory,
                private readonly StreamFactoryInterface $streamFactory
            ) {
            }

            public function createRequest(string $method, $uri): RequestInterface
            {
                return $this->requestFactory->createRequest($method, $uri);
            }

            public function createUri(string $uri = ''): UriInterface
            {
                return $this->uriFactory->createUri($uri);
            }

            public function createStream(string $content = ''): StreamInterface
            {
                return $this->streamFactory->createStream($content);
            }

            public function createStreamFromFile(string $filename, string $mode = 'r'): StreamInterface
            {
                return $this->streamFactory->createStreamFromFile($filename, $mode);
            }

            public function createStreamFromResource($resource): StreamInterface
            {
                return $this->streamFactory->createStreamFromResource($resource);
            }
        };
    }

    public static function createRequest(string|UriInterface $uri, string $method = 'GET'): RequestInterface
    {
        return self::getHttpFactory()->createRequest($method, $uri);
    }

    public static function sendApiRequest(RequestInterface $request, bool $silent = true): ?array
    {
        try
        {
            // can throw on curl error
            $resp = self::getHttpClient()->sendRequest($request);

            if (200 === $resp->getStatusCode())
            {
                $body = $resp->getBody();
                // prevents annoying bug when
                // cursor is at the end of the contents
                // on some psr-7 libraries
                $body->rewind();
                // can throw if not json
                return json_decode(
                    $body->getContents(),
                    true,
                    flags: JSON_THROW_ON_ERROR
                );
            }

            if (in_range($resp->getStatusCode(), 400, 404) || 500 === $resp->getStatusCode())
            {
                $error = sprintf('\\EmbyClient\\Model\\Exceptions\\Response%u', $resp->getStatusCode());

                throw new $error();
            }
        } catch (EmbyException $err)
        {
            if ( ! $silent)
            {
                throw $err;
            }
        } catch (\Throwable)
        {
        }
        return null;
    }

    public static function setHttpClient(ClientInterface $httpClient): void
    {
        self::$httpClient = $httpClient;
    }

    private static function getRequestFactory(): RequestFactoryInterface
    {
        static $instance;
        return $instance ??= new RequestFactory();
    }

    private static function getUriFactory(): UriFactoryInterface
    {
        static $instance;
        return $instance ??= new UriFactory();
    }

    private static function getStreamFactory(): StreamFactoryInterface
    {
        static $instance;
        return $instance ??= new StreamFactory();
    }
}
