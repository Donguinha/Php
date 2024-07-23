<?php

namespace Src\SQL;

use PDO;

require_once __DIR__ . '/../../vendor/autoload.php';

$dataBasePath = __DIR__ . "/banco.sqlite";
$pdo = new PDO("sqlite:" . $dataBasePath);

$student =
    $pdo
        ->query("SELECT * FROM student WHERE name = 'Guilherme';")
        ->fetch(PDO::FETCH_ASSOC);

//$student  = $statement->fetch(PDO::FETCH_CLASS, Student::class);

var_dump($student);
//echo $student[2]['name'];
