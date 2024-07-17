<?php

namespace Src\Model;

interface Rateable
{
    public function rate(float $score): void;

    public function averageScore(): float;
}
