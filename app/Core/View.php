<?php

namespace App\Core;

class View
{
    public static function render(string $view, array $data = []): void
    {
        $viewPath = __DIR__ . '/../../views/' . $view . '.php';

        if (!file_exists($viewPath)) {
            http_response_code(404);
            echo "View '{$view}' não encontrada.";
            return;
        }

        extract($data); // Torna as chaves do array em variáveis
        require $viewPath;
    }
}
