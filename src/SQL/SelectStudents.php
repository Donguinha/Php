<?php

namespace Src\SQL;

use PDO;
use Src\Model\Student;

require_once __DIR__ . '/../../vendor/autoload.php';

$dataBasePath = __DIR__ . "/banco.sqlite";
$pdo = new PDO("sqlite:" . $dataBasePath);

$statement = $pdo->query("SELECT * FROM student;");
//$student  = $statement->fetch(PDO::FETCH_CLASS, Student::class);
$student  = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($student);
//echo $student[2]['name'];
