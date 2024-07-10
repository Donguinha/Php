<?php

class Movie {
    private string $title;
    private int $year;
    private string $genre;
    private array $scores = [];
    
    public function __construct(string $title, int $year, string $genre)
    {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
    }
    
    function addMovieScore(float $score): void {
        $this->scores[] = $score;
    }
    
    function averageScore(): float {
        
        return (array_sum($this->scores)/ count($this->scores));
    }
    public function releasedYear(): int
    {
        return $this->year;
    }
    
    public function releaseYear(int $year): void
    {
        $this->year = $year;
    }
}