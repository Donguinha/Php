<?php

require __DIR__ . "/functions.php";

//printMessage($argv[1]);

//$nomeFilme = "Divertidamente";
//
////echo "Filme: $nomeFilme\n";
//
////echo "Parâmetro passado no terminal: " . ($argv[1] ?? 2000);
//
//$valor = match ($nomeFilme) {
//    "Divertidamente" => "Comédia",
//    "Cavalos" => "Ação",
//    "Abacate" => "Terror",
//    default => "Não encontrado"
//};
//
////echo "\n$valor";
////echo "\n";
////echo $argc;
//
//
//for ($counter = 1; $counter <= 100; $counter++) {
//    if ($counter % 2 != 0) {
//        echo $counter . "\n";
//    }
//}
//
//var_dump($nomeFilme);
//var_dump($argv);

$movie = [
    "name" => "Inside Out",
    "year" => 1999,
    "gender" => "Comedy",
    ];
//
//echo $movie["nome"] . "\n" .  $movie["ano"];

//$values = [];
//
//for ($i = 1; $i <= $argc; $i++){
//    $values[] = $argv[$i];
//}
//
//sort($values);
//
//var_dump($movie["nome"]);
//var_dump(strpos($movie["nome"], "a"));

$json = '{
    "glossary": {
        "title": "example glossary",
		"GlossDiv": {
            "title": "S",
			"GlossList": {
                "GlossEntry": {
                    "ID": "SGML",
					"SortAs": "SGML",
					"GlossTerm": "Standard Generalized Markup Language",
					"Acronym": "SGML",
					"Abbrev": "ISO 8879:1986",
					"GlossDef": {
                        "para": "A meta-markup language, used to create markup languages such as DocBook.",
						"GlossSeeAlso": ["GML", "XML"]
                    },
					"GlossSee": "markup"
                }
            }
        }
    }
}';

$jsonDecoded = json_decode($json, true);

var_dump($jsonDecoded);

$filmeJson = json_encode($movie, true);

file_put_contents(__DIR__ . "/json-filme.json", $filmeJson);