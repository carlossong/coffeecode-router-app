<?php

namespace App\Controllers;

use App\Core\View;

class HomeController
{
    public function index(): void
    {
        View::render("home", [
            "title" => "Página Inicial",
            "mensagem" => "Seja bem-vindo ao CoffeeCode Router!"
        ]);
    }
}
