<?php

namespace OOP\App\ExamplerSandbox\Application\Controllers;

use OOP\App\ExamplerSandbox\Core\Controller\Controller;

class AniexpressController extends Controller
{
    public function actionIndex(): void
    {


        echo <<<HTML
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Title</title>
        </head>
        <body>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam, commodi 
            consectetur ipsa, iusto labore modi porro quam quis ratione reiciendis totam 
            voluptas? Animi aperiam cum ea perspiciatis praesentium, unde!
        </body>
        </html>
        HTML;
    }
}
