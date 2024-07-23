<?php

namespace public\Model;

class Movie extends Title
{
    public function __construct(
        string              $title,
        int                 $year,
        Genre               $genre,
        public readonly int $duration
    ) {
        parent::__construct($title, $year, $genre);
    }
}
