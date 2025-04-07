<?php

namespace App\Core;

use CoffeeCode\Router\Router;

class Bootstrap
{
    public function run()
    {
        $router = new Router((isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"], ":");
        $router->namespace("App\Controllers");

        require_once __DIR__ . '/../../routes/web.php';

        $router->dispatch();

        if ($router->error()) {
            echo "Erro de rota: {$router->error()}";
        }
    }
}
