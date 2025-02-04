<?php
require_once __DIR__ . '/../vendor/autoload.php';

// Load routes
$router = require_once __DIR__ . '/../app/config/routes.php';

// Dispatch the request
$router->dispatch();