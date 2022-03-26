<?php
namespace App\Burda\Services;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Template{

    public static function render(string $template, array $data) {
        $loader = new FilesystemLoader(__DIR__ . '/../../templates');
        $twig = new Environment($loader);
        echo $twig->render($template, $data);
    }

}
