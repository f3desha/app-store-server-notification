<?php

namespace OOP\App\ExamplerSandbox\Application\Controllers;

use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\MyCatalog;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Shops\MyOpencart;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Shops\MyPrestoShop;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\VendorShops\OpencartShopModule\Opencart;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\VendorShops\OpencartShopModule\OpencartItem;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\VendorShops\PrestoShopModule\PrestoItem;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\VendorShops\PrestoShopModule\PrestoShop;
use OOP\App\ExamplerSandbox\Core\Controller\Controller;

class AniexpressController extends Controller
{
    public function actionIndex(): void
    {
        //Use vendor shop for adding goods
        $item1 = new PrestoItem('Asus Monitor', 'Regular monitor', 295.99, './resources/img1.webp');
        $item2 = new PrestoItem('Prestigio PB', 'Prestigio Power Bank', 100.99, './resources/img2.png');
        $item3 = new PrestoItem('Inmotion V10F', 'RockMonoWheel', 1000, './resources/img3.webp');

        $prestoShop = new PrestoShop();
        $prestoShop->addItemToCatalog($item1);
        $prestoShop->addItemToCatalog($item2);
        $prestoShop->addItemToCatalog($item3);

        $opencartItem1 = new OpencartItem(['Kingsong S20', 'Dream', 500, './resources/img4.jpg']);
        $opencartItem2 = new OpencartItem(['Tesla Model S', 'Dream', 32999]);

        $opencart = new Opencart();
        $opencart->add($opencartItem1);
        $opencart->add($opencartItem2);

        //Wrap vendor shop into our shop wrapper
        $myPrestoShop = new MyPrestoShop($prestoShop);
        $myOpencart = new MyOpencart($opencart);

        //Build catalog
        $myCatalog = new MyCatalog([$myPrestoShop,$myOpencart]);
        $myCatalog->render($myCatalog->buildCatalogItemsHtml());
    }
}
