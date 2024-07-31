<?php

namespace Src\Infrastructure;

use PDO;

require_once __DIR__ . '/../../vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$student =
    $pdo
        ->query("SELECT * FROM student WHERE name = 'Guilherme';")
        ->fetch(PDO::FETCH_ASSOC);

//$student  = $statement->fetch(PDO::FETCH_CLASS, Student::class);

var_dump($student);
//echo $student[2]['name'];
