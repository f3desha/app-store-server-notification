<?php

namespace OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator;

use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Iterators\MyIterator;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Shops\Shop;

class MyCatalog implements MyIterator
{
    /**
     * @var array $listOfShops
     */
    private array $listOfShops;

    /**
     * @var int $counter
     */
    private int $counter;

    public function __construct()
    {
        $this->counter = 0;
    }

    public function hasNext(): bool
    {
        return array_key_exists($this->counter, $this->listOfShops);
    }

    public function next()
    {
        $element = $this->listOfShops[$this->counter];
        $this->counter++;
        return $element;
    }

    public function render(string $htmlItems): void
    {
        echo <<<HTML
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Amster Dam's Pet projects</title>
        
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
            crossorigin="anonymous">
           
           <style>
           .figure-img {
                max-width: 250px;
                max-height: 150px;
           }
            </style> 
        </head>
        <body>
            <div class="container-fluid">
                <div class="jumbotron">
                    <h1 class="display-4">Anishop agregator</h1>
                    <p class="lead">Iterator and adapter example</p>
                    $htmlItems
                    
                  </div>
              </div>
        </body>
        </html>
        HTML;
    }

    public function buildCatalogItemsHtml(): string
    {
        $htmlItems = '';
        while ($this->hasNext()) {
            $shop = $this->next();
            $iterator = $shop->getIterator();
            while ($iterator->hasNext()) {
                $shopItem = $iterator->next();
                $adapter = $shop->getCatalogItemAdapter($shopItem);
                $htmlItems .= '<figure class="figure">
                      <img src="' . $adapter->getItemsImageUrl() . '" class="figure-img img-fluid rounded" alt="...">
                      <figcaption class="figure-caption">' . $adapter->getItemsName() . ' - ' . $adapter->getItemsPrice() . '$</figcaption>
                    </figure> ';
            }
        }
        return $htmlItems;
    }

    public function add(Shop $shop): void
    {
        $this->listOfShops[] = $shop;
    }
}
