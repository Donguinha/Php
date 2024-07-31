<?php

namespace OldTests\public\Model;

abstract class Title implements Rateable
{
    use RateTrait;

    public function __construct(
        public readonly string $title,
        public readonly int    $year,
        public readonly Genre $genre
    ) {
    }

    // public function getYear(): int
    // {
    //     return $this->year;
    // }

    // public function getTitle(): string
    // {
    //     return $this->title;
    // }
}
