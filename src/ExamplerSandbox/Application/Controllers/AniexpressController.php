<?php

namespace OOP\App\ExamplerSandbox\Application\Controllers;

use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\MyCatalog;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\VendorShops\PromShopModule\PromItem;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\VendorShops\PromShopModule\PromShop;
use OOP\App\ExamplerSandbox\Core\Controller\Controller;

class AniexpressController extends Controller
{
    public function actionIndex(): void
    {
        $item1 = new PromItem('Asus Monitor', 'Regular monitor', 295.99);
        $item2 = new PromItem('Prestigio PB', 'Prestigio Power Bank', 100.99);
        $item3 = new PromItem('Inmotion V10F', 'RockMonoWheel', 1000);

        $promShop = new PromShop();
        $promShop->addItemToCatalog($item1);
        $promShop->addItemToCatalog($item2);
        $promShop->addItemToCatalog($item3);

        $htmlItems = '';

        $myCatalog = new MyCatalog([$promShop]);
        while ($myCatalog->hasNext()) {
            $shop = $myCatalog->next();
            $iterator = $shop->getIterator();
            while ($iterator->hasNext()) {
                $shopItem = $iterator->next();
                $adapter = $shop->getCatalogItemAdapter($shopItem);
                $htmlItems .= '<figure class="figure">
                      <img src="' . $adapter->getItemsShopLogo() . '" class="figure-img img-fluid rounded" alt="...">
                      <figcaption class="figure-caption">' . $adapter->getItemsName() . ' - $' . $adapter->getItemsPrice() . '$</figcaption>
                    </figure> ';
            }
        }

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

    public function actionShowprom(): void
    {
//        <figure class="figure">
//                      <img src="https://media.istockphoto.com/photos/mountain-landscape-picture-id517188688?k=20&m=517188688&s=612x612&w=0&h=i38qBm2P-6V4vZVEaMy_TaTEaoCMkYhvLCysE7yJQ5Q=" class="figure-img img-fluid rounded" alt="...">
//                      <figcaption class="figure-caption">A caption for the above image.</figcaption>
//                    </figure>
//                    <figure class="figure">
//                      <img src="https://images.pexels.com/photos/1172253/pexels-photo-1172253.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="figure-img img-fluid rounded" alt="...">
//                      <figcaption class="figure-caption">A caption for the above image.</figcaption>
//                    </figure>
    }
}
