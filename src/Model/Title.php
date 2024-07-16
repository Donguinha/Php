<?php

abstract class Title implements Rateable
{
    private array $scores;

    public function __construct(
        public readonly string $title,
        public readonly int    $year,
        public readonly Genre $genre)
    {
        $this->scores = [];
    }

    public function rate(float $score): void
    {
        $this->scores[] = $score;
    }

    public function averageScore(): float
    {
        return (array_sum($this->scores) / count($this->scores));
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
