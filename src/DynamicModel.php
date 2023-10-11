<?php

declare(strict_types=1);

namespace EmbyClient;

use NGSOFT\DataStructure\Sort;
use NGSOFT\Traits\ReversibleIteratorTrait;

abstract class DynamicModel extends Model implements \Countable, \IteratorAggregate
{
    use ReversibleIteratorTrait;

    protected array $properties = [];

    public function __serialize(): array
    {
        return $this->properties;
    }

    public function __unserialize(array $data): void
    {
        $this->properties = $data;
    }

    public function __get(string $name)
    {
        return $this->properties[$name] ?? null;
    }

    public function __set(string $name, $value): void
    {
        // noop
    }

    public function __isset(string $name): bool
    {
        return isset($this->properties[$name]);
    }

    public function __unset(string $name): void
    {
        // noop
    }

    public static function make(array $data): static
    {
        $instance = new static();

        foreach ($data as $key => $value)
        {
            $instance->properties[$key] = $value;
        }

        return $instance;
    }

    public function jsonSerialize(): array
    {
        return $this->properties;
    }

    public function offsetExists(mixed $offset): bool
    {
        return $this->__isset($offset);
    }

    public function offsetGet(mixed $offset): mixed
    {
        return $this->__get($offset);
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        // noop
    }

    public function offsetUnset(mixed $offset): void
    {
        // noop
    }

    public function entries(Sort $sort = Sort::ASC): iterable
    {
        $entries = $this->properties;

        if (Sort::DESC === $sort)
        {
            $entries = array_reverse($entries);
        }

        yield from $entries;
    }
}
