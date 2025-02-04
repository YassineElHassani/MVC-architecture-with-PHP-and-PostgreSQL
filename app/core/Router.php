<?php
namespace App\Core;

class Router {
    private array $routes = [
        "GET" => [],
        "POST" => [],
        "PUT" => [],
        "DELETE" => []
    ];

    public function addRoute(string $method, string $path, array $handler) {
        $this->routes[strtoupper($method)][$path] = $handler;
    }

    public function dispatch() {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    
        try {
            if (isset($this->routes[$method][$uri])) {
                [$controllerName, $action] = $this->routes[$method][$uri];
                
                $fullClassName = "App\\Controllers\\" . $controllerName;
        
                $controller = new $fullClassName();
    
                if (method_exists($controller, $action)) {
                    $controller->$action();
                } else {
                    throw new \Exception("Method {$action} not found in controller");
                }
            } else {
                // 404 Not Found
                http_response_code(404);
                echo "Page not found";
            }
        } catch (\Throwable $th) {
            error_log($th->getMessage());
            http_response_code(500);
            echo "An error occurred: " . $th->getMessage();
        }
    }
}