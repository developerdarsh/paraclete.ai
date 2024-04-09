<?php

//use DOMDocument;
namespace App\Library;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class URLFetcher
{
    protected string $source;

    public function __construct(
        protected string $url,
        protected bool $load_iframes = false,
    ) {
        $this->source = $this->fetch($url);

        if ($this->load_iframes) {
            $this->source .= $this->fetch_iframes($this->source);
        }
    }

    public function get_source(): string
    {
        return $this->source;
    }

    public function get_heading(): ?string
    {
        libxml_use_internal_errors(true);

        $dom = new \DOMDocument();
        if($this->source !== ''){
        $dom->loadHTML($this->source);

        $heading = $dom->getElementsByTagName('h1')->item(0);
        if ($heading) {
            return $heading->textContent;
        }
        }
       

        return null;
    }

    public function get_paragraph_content(): string
    {
        libxml_use_internal_errors(true);

        $dom = new \DOMDocument();
        
         if($this->source !== ''){
            $dom->loadHTML($this->source);

            $paragraphs = $dom->getElementsByTagName('p');
            $content = '';

            foreach ($paragraphs as $p) {
                $content .= $p->textContent . "\n";
            }

            return $content;
         }

         return '';
    }


    
    public function get_all_headings(): string
    {
        libxml_use_internal_errors(true);

        $dom = new \DOMDocument();
        if ($this->source !== '') {
            $dom->loadHTML($this->source);

            $headings = $dom->getElementsByTagName('h1');
            $h2Headings = $dom->getElementsByTagName('h2');
            $h3Headings = $dom->getElementsByTagName('h3');
            $h4Headings = $dom->getElementsByTagName('h4');
            $h5Headings = $dom->getElementsByTagName('h5');
            $h6Headings = $dom->getElementsByTagName('h6');

            $allHeadings = [];

            // Helper function to extract text content from DOMNodeList
            $extractTextContent = function (\DOMNodeList $nodeList) {
                $textContent = '';
                foreach ($nodeList as $node) {
                    $textContent .= $node->textContent . "\n";
                }
                return $textContent;
            };

            $allHeadings['h1'] = $extractTextContent($headings);
            $allHeadings['h2'] = $extractTextContent($h2Headings);
            $allHeadings['h3'] = $extractTextContent($h3Headings);
            $allHeadings['h4'] = $extractTextContent($h4Headings);
            $allHeadings['h5'] = $extractTextContent($h5Headings);
            $allHeadings['h6'] = $extractTextContent($h6Headings);

            return implode(",",$allHeadings);
        }

        return [];
    }


    private function fetch(string $url): string
    {
        $context = stream_context_create([
            'http' => [
                'method' => 'GET',
                'header' => 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3',
            ],
        ]);

        // Fetch the content with error handling
        $content = @file_get_contents($url, false, $context);

         if ($content === false) {
             // Handle the case where the URL fetch failed
             return '';
         }


        return $content;
    }

    private function fetch_iframes(string $page_source): string
    {
        // The implementation of fetching iframes can remain the same
        // if you are using a custom implementation that doesn't rely on Puppeteer.
    }
}
