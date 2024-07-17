<?php

namespace Src\Calculations;

use Src\Model\Rateable;
// use Src\Model\Rateable as RateableInterface;

class ConvertNumberToStar
{
    public static function convertNumberToStar(Rateable $rateable)
    {
        return round($rateable->averageScore()) / 2;
    }
}
