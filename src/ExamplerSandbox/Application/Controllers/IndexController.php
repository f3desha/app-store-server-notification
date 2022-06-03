<?php

namespace OOP\App\ExamplerSandbox\Application\Controllers;

use OOP\App\ExamplerSandbox\Core\Controller\Controller;

class IndexController extends Controller
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
            <ul>
                <li><a href="index.php?controller=aniexpress">Aniexpress example</a></li>
            </ul>
        </body>
        </html>
        HTML;
    }
}
