<?php

namespace ScreenMatch\src\Calculations;

use ScreenMatch\src\Model\Rateable;
// use ScreenMatch\src\Model\Rateable as RateableInterface;

class ConvertNumberToStar
{
    public static function convertNumberToStar(Rateable $rateable)
    {
        return round($rateable->averageScore()) / 2;
    }
}
