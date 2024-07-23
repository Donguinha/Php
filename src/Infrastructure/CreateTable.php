<?php

namespace Src\Infrastructure;

$pdo = ConnectionCreator::createConnection();

$pdo->exec("CREATE TABLE IF NOT EXISTS student (id INTEGER PRIMARY KEY, name TEXT, created_at TEXT);");
