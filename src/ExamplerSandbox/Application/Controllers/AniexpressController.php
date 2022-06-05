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

        $myCatalog = new MyCatalog([$promShop]);
        $myCatalog->render($myCatalog->buildCatalogItemsHtml());
    }

    public function actionShowprom(): void
    {
//        https://media.istockphoto.com/photos/mountain-landscape-picture-id517188688?k=20&m=517188688&s=612x612&w=0&h=i38qBm2P-6V4vZVEaMy_TaTEaoCMkYhvLCysE7yJQ5Q=
//        https://images.pexels.com/photos/1172253/pexels-photo-1172253.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500
    }
}
