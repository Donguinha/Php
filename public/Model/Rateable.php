<?php

namespace public\Model;

interface Rateable
{
    public function rate(float $score): void;

    public function averageScore(): float;
}
