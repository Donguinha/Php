<?php

namespace Src;

require __DIR__ . '/../vendor/autoload.php';

use Src\Model\Episode;
use Src\Model\TvShow;
use Src\Model\Genre;
use Src\Calculations\ConvertNumberToStar;

$tvShow = new TvShow("Vikings", 2024, Genre::Action, 4, 5, 60);
$episode = new Episode($tvShow, "Village Attack", 5);

$tvShow->rate(10);
$tvShow->rate(10);
$tvShow->rate(2);
$tvShow->rate(3.5);

$starsConverter = ConvertNumberToStar::convertNumberToStar($tvShow);

printMessage("nome da série: " . $tvShow->title);
printMessage("média: " . $tvShow->averageScore());
printMessage("média em estrelas: " . $starsConverter);

var_dump($tvShow);

function printMessage(string $message): void
{
    echo $message . PHP_EOL;
}
