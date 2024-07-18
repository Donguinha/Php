<?php

namespace Src\Model;

class TvShow extends Title
{
    public function __construct(
        string              $title,
        int                 $year,
        Genre               $genre,
        public readonly int $seasons,
        public readonly int $episodePerSeason,
        public readonly int $durationPerEpisode)
    {
        parent::__construct($title, $year, $genre);
    }
}
