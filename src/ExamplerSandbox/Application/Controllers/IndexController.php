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
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Amster Dam's Pet projects</title>
        
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
            crossorigin="anonymous">
        </head>
        <body>
            <div class="container-fluid">
                <div class="jumbotron">
                    <h1 class="display-4">Amster Dam's Pet projects</h1>
                    <p class="lead">This is a simple collection of projects.</p>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="/index.php?controller=aniexpress">Aniexpress</a>
                        </li>
                      </ul>
                  </div>
              </div>
        </body>
        </html>
        HTML;
    }
}
