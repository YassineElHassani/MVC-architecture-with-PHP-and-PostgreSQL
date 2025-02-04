<?php
namespace App\Core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class View {
    private $twig;

    public function __construct() {
        $loader = new FilesystemLoader(__DIR__ . '/../../app/views');
        $this->twig = new Environment($loader, [
            'cache' => __DIR__ . '/../../var/cache/twig',
            'debug' => true
        ]);
    }

    public function render($template, $data = []) {
        echo $this->twig->render($template, $data);
    }
}