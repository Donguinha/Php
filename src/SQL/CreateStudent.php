<?php

namespace Src\SQL;

use Src\Model\Student;
use PDO;

require __DIR__ . '/../../vendor/autoload.php';

$dataBasePath = __DIR__ . "/banco.sqlite";

$pdo = new PDO("sqlite:" . $dataBasePath);

$student = new Student("Guilherme");

$studentTime = $student->createdAt->format('Y-m-d H:i:s');

$sqlInsert = "INSERT INTO student (\"name\", \"created_at\") VALUES ('$student->name', '$studentTime');";

$pdo->exec($sqlInsert);
