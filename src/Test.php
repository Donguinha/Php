<?php

namespace Src;

require_once __DIR__ . "/../vendor/autoload.php";

use Src\Domain\Repository\StudentRepository;
use Src\Infrastructure\ConnectionCreator;

$studentRepository = new StudentRepository(ConnectionCreator::createConnection());

var_dump($studentRepository->allStudents());

echo PHP_EOL;

var_dump($studentRepository->studentById(3));
