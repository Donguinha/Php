<?php

namespace public\Model;

trait RateTrait
{
    private array $scores = [];

    public function rate(float $score): void
    {
        $this->scores[] = $score;
    }

    public function averageScore(): float
    {
        return (array_sum($this->scores) / count($this->scores));
    }
}
