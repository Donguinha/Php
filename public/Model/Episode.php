<?php

namespace public\Model;

class Episode implements Rateable
{
    use RateTrait;

    public function __construct(
        public readonly TvShow $tvShow,
        public readonly string $name,
        public readonly int    $number
    ) {
    }
}
