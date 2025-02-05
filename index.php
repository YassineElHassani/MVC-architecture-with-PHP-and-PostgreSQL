<?php 
require_once __DIR__ . '/vendor/autoload.php';
use App\Routes\Routes;

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$uriClean = str_replace('/routing', '', $uri);

$url = parse_url($uriClean, PHP_URL_PATH);

$routes = new Routes();
$routes->Dispatch($method, $url);

header('Location: ./app/view/home/index.php');
exit;
?>