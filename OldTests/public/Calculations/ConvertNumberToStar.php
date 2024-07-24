<?php

namespace OldTests\public\Calculations;

use OldTests\public\Model\Rateable;

// use Src\Model\Rateable as RateableInterface;

class ConvertNumberToStar
{
    public static function convertNumberToStar(Rateable $rateable)
    {
        return round($rateable->averageScore()) / 2;
    }

    public static function stringTest() : void
    {
        echo "string retornada da função chamada pelo script no composer";
    }
}
