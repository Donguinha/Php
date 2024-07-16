<?php

class ConvertNumberToStar
{
    public static function convertNumberToStar(Rateable $rateable)
    {
     return round($rateable->averageScore()) / 2;
    }
}