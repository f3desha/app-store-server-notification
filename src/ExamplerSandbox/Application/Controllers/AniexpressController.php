<?php

namespace OOP\App\ExamplerSandbox\Application\Controllers;

use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\MyCatalog;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Shops\MyPrestoShop;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\VendorShops\PrestoShopModule\PrestoItem;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\VendorShops\PrestoShopModule\PrestoShop;
use OOP\App\ExamplerSandbox\Core\Controller\Controller;

class AniexpressController extends Controller
{
    public function actionIndex(): void
    {
        //Use vendor shop for adding goods
        $item1 = new PrestoItem('Asus Monitor', 'Regular monitor', 295.99);
        $item2 = new PrestoItem('Prestigio PB', 'Prestigio Power Bank', 100.99);
        $item3 = new PrestoItem('Inmotion V10F', 'RockMonoWheel', 1000);

        $prestoShop = new PrestoShop();
        $prestoShop->addItemToCatalog($item1);
        $prestoShop->addItemToCatalog($item2);
        $prestoShop->addItemToCatalog($item3);

        //Wrap vendor shop into our shop wrapper
        $myPrestoShop = new MyPrestoShop($prestoShop);

        //Build catalog
        $myCatalog = new MyCatalog([$myPrestoShop]);
        $myCatalog->render($myCatalog->buildCatalogItemsHtml());
    }

    public function actionShowprom(): void
    {
//        https://media.istockphoto.com/photos/mountain-landscape-picture-id517188688?k=20&m=517188688&s=612x612&w=0&h=i38qBm2P-6V4vZVEaMy_TaTEaoCMkYhvLCysE7yJQ5Q=
//        https://images.pexels.com/photos/1172253/pexels-photo-1172253.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500
    }
}
