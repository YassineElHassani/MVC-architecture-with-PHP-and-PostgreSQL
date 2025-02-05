<?php
namespace App\Core;
require_once __DIR__ . '/../../vendor/autoload.php';


class View {
    private $layout = 'default';
    private $viewsPath;
    private $layoutPath;
    private $data = [];

    public function __construct() {
        $this->viewsPath = __DIR__ . '/../../app/views/';
        $this->layoutPath = $this->viewsPath . 'layout/';
    }

    public function render(string $view, array $data = []) {
        $this->data = array_merge($this->data, $data);
        
        extract($this->data);
        
        ob_start();
        
        require $this->viewsPath . $view . '.php';
        
        $content = ob_get_clean();
        
        require $this->layoutPath . $this->layout . '.php';
    }
}
