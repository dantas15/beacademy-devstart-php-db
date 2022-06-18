<?php

include '../vendor/autoload.php';

$database = 'db_store';
$username = 'root';
$password = 'toor_drowssap';

$connection = new PDO('mysql:host=127.0.0.1;dbname=' . $database, $username, $password);

$query = 'SELECT * FROM tb_category;';

$preparacao = $connection->prepare($query);
$preparacao->execute();

var_dump($preparacao);

while ($registro = $preparacao->fetch()) {
  var_dump($registro);
}

// use App\Controller\IndexController;
// use App\Controller\ProductController;
// use App\Controller\ErrorController;

// $url = explode('?', $_SERVER['REQUEST_URI'])[0];

// function route(string $controllerName, string $methodName)
// {
//   return [
//     'controller' => $controllerName,
//     'method' => $methodName,
//   ];
// }

// $routes = [
//   '/' => route(IndexController::class, 'indexAction'),
//   '/produtos' => route(ProductController::class, 'listAction'),
//   '/produtos/novo' => route(ProductController::class, 'addAction'),
// ];

// if (!isset($routes[$url])) {
//   (new ErrorController())->notFoundAction();
//   exit;
// }

// $controllerName = $routes[$url]['controller'];
// $methodName = $routes[$url]['method'];

// (new $controllerName())->$methodName();
  
// var_dump($routes[$url]);
