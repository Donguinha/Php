<?php

require __DIR__ . "/../src/Modelo/Movie.php";

echo "Bem vindo ao screen match do donguinha\n\n";

$movie = new Movie(
    "Carros",
    2010,
    "Animação"
);

echo $movie->releasedYear();

// $movie->title = 'Vingadores';
// $movie->year = 1999;
// $movie->gender = 'Heroes';

// $movie->addMovieScore(2.4);
// $movie->addMovieScore(10);
// $movie->addMovieScore(8.3);

// echo $movie->averageScore();

echo "\n";

var_dump($movie);

