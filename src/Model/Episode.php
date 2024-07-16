<?php

class Episode implements Rateable
{
    public function __construct(
        public readonly TvShow $tvShow,
        public readonly string $name,
        public readonly int    $number)
    {
    }

    public function rate(float $score): void
    {
        $score++;
    }

    public function averageScore(): float
    {
        return 0;
    }
}