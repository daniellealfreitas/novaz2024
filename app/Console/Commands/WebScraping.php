<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Console\Command;

class WebScraping extends Command
{
    protected $signature = 'scrape:site';
    protected $description = 'Faz web scraping de um site específico';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $url = 'https://example.com';  // Substitua pela URL que deseja fazer o scraping

        // 1. Criar um cliente HTTP com o Guzzle
        $client = new Client();

        // 2. Fazer a requisição GET
        $response = $client->request('GET', $url);

        // 3. Obter o HTML da resposta
        $html = (string) $response->getBody();

        // 4. Utilizar o DomCrawler para parsear o HTML
        $crawler = new Crawler($html);

        // 5. Selecionar e extrair os dados (exemplo: títulos <h1>)
        $crawler->filter('h1')->each(function (Crawler $node) {
            $this->info($node->text());
        });
    }
}
