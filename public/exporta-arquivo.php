<?php

$filme = [
    'nome' => $_POST['nome'],
    'ano' =>  $_POST['ano'],
    'nota' =>  $_POST['nota'],
    'genero' =>  $_POST['genero']
];

file_put_contents('arquivo.json', json_encode($filme, true));