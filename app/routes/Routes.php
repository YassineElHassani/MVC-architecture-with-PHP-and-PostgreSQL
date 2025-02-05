<?php
namespace App\Routes;
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Controller\Controller;

class Routes {
    private array $path = [
        "GET" => [
            '/' => [Controller::class, 'index'],
            '/login' => [Controller::class, 'login'],
            '/register' => [Controller::class, 'register'],
            '/logout' => [Controller::class, 'logout'],
            '/admin' => [Controller::class, 'admin']
        ],
        "POST" => [
            '/login' => [Controller::class, 'login']
        ]
    ];
        
    public function dispatch($method, $uri) {
        if(isset($this->path[$method][$uri])) {
            [$class, $action] = $this->path[$method][$uri];
            $controller = new $class();

            if (method_exists($controller, $action)) {
                $controller->$action();
            } else {
                throw new \Exception("Method {$action} not found in controller");
            }
        } else {
            http_response_code(404);
            header('location: ./404.php');
        }
    }

}


?>