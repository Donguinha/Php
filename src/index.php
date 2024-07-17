<?php

// spl_autoload_register(function (string $className) {
//     $path = str_replace("ScreenMatch", "src", $className);

//     var_dump($className);
//     exit;
// });
namespace ScreenMatch;

use ScreenMatch\src\Model\{Movie, Episode, Genre, Rateable, Title, TvShow};
use ScreenMatch\src\Calculations\{ConvertNumberToStar};

echo "Bem vindo ao screen match\n\n";

$movie = new Movie(
    "Carros",
    2015,
    Genre::Comedy,
    123
);

$movie->rate(10);
$movie->rate(8.3);
$movie->rate(10);

$movieStars = ConvertNumberToStar::convertNumberToStar($movie);

echo
"average score: " .
    $movie->averageScore() .
    "\n" .
    "average score stars conversion: " .
    $movieStars .
    "\n";


$tvShow = new TvShow(
    "Vikings",
    2020,
    Genre::Action,
    3,
    10,
    1
);

$tvShow->rate(2.4);
$tvShow->rate(10);
$tvShow->rate(8.3);

$tvShowStars = ConvertNumberToStar::convertNumberToStar($tvShow);


echo
"average score: " .
    $tvShow->averageScore() .
    "\n" .
    "average score stars conversion: " .
    $tvShowStars .
    "\n";



//echo $movie->getYear() . "\n";
//echo $movie->getTitle() . "\n";
//echo $tvShow->getYear() . "\n";
//echo $tvShow->getTitle() . "\n";

// $movie->title = 'Vingadores';
// $movie->year = 1999;
// $movie->gender = 'Heroes';

//echo $movie->averageScore() . "\n";
//var_dump($movie);

//echo $tvShow->averageScore/**/(). "\n";
//var_dump($tvShow);