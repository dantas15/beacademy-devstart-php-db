<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;

class CategoryController extends AbstractController
{

    public function listAction(): void
    {
        $con = Connection::getConnection();

        $result = $con->prepare('SELECT * FROM tb_category');
        $result->execute();

        parent::render('category/list', $result);
    }

    public function addAction(): void
    {
        if ($_POST) {
            $name = $_POST['name'];
            $description = $_POST['description'];

            $con = Connection::getConnection();

            $query = "INSERT INTO tb_category (name, description) VALUE (:name, :description)";

            $result = $con->prepare($query);

            $result->bindParam(':name', $name);
            $result->bindParam(':description', $description);

            $result->execute();
        }

        parent::render('category/add');
    }

    public function updateAction(): void
    {
        $id = $_GET['id'];

        $con = Connection::getConnection();

        if ($_POST) {
            $newName = $_POST['name'];
            $newDescription = $_POST['description'];

            $queryUpdate = "UPDATE tb_category SET name=:name, description=:description WHERE id=:id";

            $result = $con->prepare($queryUpdate);

            $result->bindParam(':name', $newName);
            $result->bindParam(':description', $newDescription);
            $result->bindParam(':id', $id);

            $result->execute();

            echo 'Pronto! Categoria atualizada';
        }

        $query = "SELECT * FROM tb_category WHERE id='{$id}'";

        $result = $con->prepare($query);
        $result->execute();

        $data = $result->fetch(\PDO::FETCH_ASSOC);

        parent::render('category/edit', $data);
    }

    public function removeAction(): void
    {
        $con = Connection::getConnection();

        $id = $_GET['id'];
        $query = "DELETE FROM tb_category WHERE id=:id";

        $result = $con->prepare($query);

        $result->bindParam(':id', $id);
        $result->execute();

        $message = 'Pronto, categoria excluída!';

        parent::message($message);
    }
}
