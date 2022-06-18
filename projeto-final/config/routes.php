<?php

use App\Controller\CategoryController;
use App\Controller\IndexController;
use App\Controller\ProductController;


function route(string $controllerName, string $methodName)
{
  return [
    'controller' => $controllerName,
    'method' => $methodName,
  ];
}

$routes = [
  '/' => route(IndexController::class, 'indexAction'),
  '/produtos' => route(ProductController::class, 'listAction'),
  '/produtos/novo' => route(ProductController::class, 'addAction'),
  '/produtos/excluir' => route(ProductController::class, 'removeAction'),
  '/categorias' => route(CategoryController::class, 'listAction'),
  '/categorias/nova' => route(CategoryController::class, 'addAction'),
  '/categorias/excluir' => route(CategoryController::class, 'removeAction'),
  '/categorias/editar' => route(CategoryController::class, 'updateAction'),
];

return $routes;
