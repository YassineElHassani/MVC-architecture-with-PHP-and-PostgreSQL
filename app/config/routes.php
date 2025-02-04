<?php

use App\Core\Router;

$router = new Router();
$router->addRoute('GET', '/', ['Front\\HomeController', 'index']);

return $router;

$router = new Router();

// Front Office Routes
$router->addRoute('GET', '/', ['HomeController', 'index']);
$router->addRoute('GET', '/articles', ['ArticleController', 'index']);

// User Authentication Routes
$router->addRoute('GET', '/login', ['UserController', 'showLoginForm']);
$router->addRoute('POST', '/login', ['UserController', 'login']);
$router->addRoute('GET', '/register', ['UserController', 'showRegistrationForm']);
$router->addRoute('POST', '/register', ['UserController', 'register']);
$router->addRoute('GET', '/logout', ['UserController', 'logout']);

// Admin Routes
$router->addRoute('GET', '/admin', ['DashboardController', 'index']);
$router->addRoute('GET', '/admin/users', ['UserController', 'listUsers']);
$router->addRoute('GET', '/admin/articles', ['ArticleController', 'adminList']);

// Return the configured router
return $router;