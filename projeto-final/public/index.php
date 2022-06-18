<?php

include '../vendor/autoload.php';

use App\Controller\Connection\Connection;
use App\Controller\ErrorController;

$connection = Connection::getConnection();
$query = 'SELECT * FROM tb_category;';

$preparacao = $connection->prepare($query);
$preparacao->execute();

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

$routes = include '../config/routes.php';

if (!isset($routes[$url])) {
  (new ErrorController())->notFoundAction();
  exit;
}

$controllerName = $routes[$url]['controller'];
$methodName = $routes[$url]['method'];

include '../includes/head.php';

(new $controllerName())->$methodName();

include '../includes/foot.php';
