<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Http\Request;

class ScrapingController extends Controller
{
    // Função principal do Scraping
    public function scrape(Request $request)
    {
        // 1. Receber a URL do formulário
        $url = $request->input('url');
        if (!$url) {
            return "Por favor, insira uma URL.";
        }

        // 2. Coletar emails navegando pelos links
        $emails = $this->scrapeEmailsFromPage($url);

        // 3. Retornar os emails coletados
        return view('scraping-emails', ['emails' => $emails]);
    }

    private function scrapeEmailsFromPage($url, $maxDepth = 2, $depth = 0, &$visited = [])
    {
        if ($depth > $maxDepth || isset($visited[$url])) {
            return [];
        }
    
        $visited[$url] = true;  // Marcar a URL como visitada
    
        $client = new Client();
        $response = $client->request('GET', $url);
        $html = (string) $response->getBody();
    
        $crawler = new Crawler($html, $url);  // Passa a URL base aqui
    
        // Coletar todos os emails da página atual
        preg_match_all('/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}/i', $crawler->text(), $matches);
        $emails = array_unique($matches[0]);
    
        // Coletar todos os links da página atual
        $links = $crawler->filter('a')->links();
    
        // Navegar pelos links e coletar emails das páginas linkadas
        foreach ($links as $link) {
            $nextUrl = $link->getUri();
            // Ignorar links externos e navegar apenas no mesmo domínio
            if (strpos($nextUrl, parse_url($url, PHP_URL_HOST)) !== false) {
                $emails = array_merge($emails, $this->scrapeEmailsFromPage($nextUrl, $maxDepth, $depth + 1, $visited));
            }
        }
    
        return array_unique($emails);  // Retornar emails únicos
    }
    
}
