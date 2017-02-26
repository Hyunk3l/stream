<?php

namespace Hyunk3l\Stream;

class Stream
{
    private $iterable;

    public function __construct(array $iterable)
    {
        $this->iterable = $iterable;
    }

    public function forEach(callable $callable): array
    {
        return array_map($callable, $this->iterable);
    }
}