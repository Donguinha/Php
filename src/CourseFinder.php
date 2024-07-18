<?php

namespace Src;

require __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client();

$html = null;

try {
    $response = $client->request('GET', 'https://alura.com.br');

    $html = $response->getBody();
}
catch (GuzzleException $e) {
}

$crawler = new Crawler();
$crawler->addHtmlContent($html);

$spans =  $crawler->filter('span.categories__link__text--home');

foreach ($spans as $span) {
    printMessage($span->textContent);
}


function printMessage(string $message): void
{
    echo $message . PHP_EOL;
}