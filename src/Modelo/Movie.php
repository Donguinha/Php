<?php

class Movie {
    public string $title;
    public int $year;
    public string $gender;
    public array $scores = [];
    
    function addMovieScore(float $score): void {
        $this->scores[] = $score;
    }
    
    function averageScore(): float {
        
        return (array_sum($this->scores)/ count($this->scores));
    }
}