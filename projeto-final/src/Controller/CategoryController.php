<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller\Connection\Connection;

class CategoryController extends AbstractController
{

  public function listAction(): void
  {
    $con = Connection::getConnection();

    $result = $con->prepare('SELECT * FROM tb_category');

    $result->execute();

    var_dump($result->fetch(\PDO::FETCH_ASSOC));

    parent::render('category/list');
  }

  public function addAction(): void
  {
    parent::render('category/add');
  }

  public function editAction(): void
  {
    parent::render('category/edit');
  }
}
