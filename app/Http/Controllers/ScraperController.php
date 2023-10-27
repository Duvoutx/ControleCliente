<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;

class ScraperController extends Controller
{
    public function scraper()
    {
        $browser = new HttpBrowser(HttpClient::create());
        $url = 'https://weather.com/pt-BR/clima/hoje/l/BRXX0043:1:BR?Goto=Redirected';
        $crawler = $browser->request('GET', $url);

        $results = [];

        $crawler->filter('.CurrentConditions--tempValue--MHmYY')->each(function ($node) use (&$results) {
            $results[] = $node->text();
        });

        return view('scraper', ['data' => $results]);
    }
}
