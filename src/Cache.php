<?php

declare(strict_types=1);

namespace EmbyClient;

use NGSOFT\Cache\PHPCache;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Cache\InvalidArgumentException;
use Symfony\Component\Cache\Adapter\ApcuAdapter;
use Symfony\Component\Cache\Adapter\ArrayAdapter;
use Symfony\Component\Cache\Adapter\ChainAdapter;
use Symfony\Component\Cache\Adapter\PhpFilesAdapter;

/**
 * Caches Models Metadata and some datas.
 * Requires a PSR-6 cache to work.
 */
final class Cache
{
    private static ?CacheItemPoolInterface $cache = null;

    private function __construct()
    {
    }

    public static function getCachePool(): ?CacheItemPoolInterface
    {
        if ( ! self::$cache)
        {
            if (class_exists(ChainAdapter::class))
            {
                $adapters    = [new ArrayAdapter(storeSerialized: false)];

                if (ApcuAdapter::isSupported() && 'cli' !== php_sapi_name())
                {
                    $adapters[] = new ApcuAdapter();
                }

                $adapters[]  = new PhpFilesAdapter();

                self::$cache = new ChainAdapter(
                    $adapters
                );
            } elseif (class_exists(PHPCache::class))
            {
                self::$cache = new PHPCache();
            }
        }

        return self::$cache;
    }

    public static function setCachePool(CacheItemPoolInterface $cacheItemPool): void
    {
        self::$cache = $cacheItemPool;
    }

    /**
     * Gets an entry from the cache.
     *
     * @param string              $key          the cache key
     * @param null|\Closure|mixed $defaultValue if a closure is provided it will be called and the return value will be used
     */
    public static function get(string $key, mixed $defaultValue = null): mixed
    {
        if (self::getCachePool())
        {
            try
            {
                $item = self::getCachePool()->getItem($key);

                if ( ! $item->isHit())
                {
                    $value = value($defaultValue);

                    if (isset($value))
                    {
                        self::getCachePool()->save(
                            $item->set($value)
                        );
                    }
                }

                return $item->get();
            } catch (InvalidArgumentException)
            {
            }
        }

        return value($defaultValue);
    }

    public static function set(string $key, mixed $value): void
    {
        if (self::getCachePool())
        {
            if (null === $value = value($value))
            {
                try
                {
                    self::getCachePool()->deleteItem($key);
                } catch (InvalidArgumentException)
                {
                }
            } else
            {
                try
                {
                    self::getCachePool()->save(
                        self::getCachePool()
                            ->getItem($key)
                            ->set($value)
                    );
                } catch (InvalidArgumentException)
                {
                }
            }
        }
    }

    public static function delete(string $key): void
    {
        try
        {
            self::getCachePool()?->deleteItem($key);
        } catch (InvalidArgumentException)
        {
        }
    }

    public static function clear(): void
    {
        self::getCachePool()?->clear();
    }
}
