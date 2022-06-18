<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;
use Dompdf\Dompdf as Dompdf;

class ProductController extends AbstractController
{
    public function listAction(): void
    {
        $con = Connection::getConnection();

        $result = $con->prepare('SELECT * FROM tb_product');
        $result->execute();

        parent::render('product/list', $result);
    }

    public function addAction(): void
    {
        $con = Connection::getConnection();

        if ($_POST) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $value = $_POST['value'];
            $photo = $_POST['photo'];
            $quantity = $_POST['quantity'];
            $categoryId = $_POST['category_id'];
            $createdAt = date('Y-m-d H:i:s');

            $query = "INSERT INTO tb_product (name, description, photo, quantity, value, category_id, created_at) VALUES('{$name}', '{$description}', '{$photo}', '{$quantity}', '{$value}', '{$categoryId}', '{$createdAt}' )";

            $result = $con->prepare($query);
            $result->execute();

            echo 'Pronto! Produto adicionado';
        }

        $result = $con->prepare('SELECT * FROM tb_category');
        $result->execute();

        parent::render('product/add', $result);
    }

    public function editAction(): void
    {
        $id = $_GET['id'];

        $con = Connection::getConnection();

        $categories = $con->prepare('SELECT * FROM tb_category');
        $categories->execute();

        if ($_POST) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $value = $_POST['value'];
            $photo = $_POST['photo'];
            $quantity = $_POST['quantity'];
            $categoryId = $_POST['category_id'];

            $query = "UPDATE tb_product SET
                name='{$name}',
                description='{$description}',
                photo='{$photo}',
                quantity='{$quantity}',
                value='{$value}',
                category_id='{$categoryId}'
            ";

            $resultUpdate = $con->prepare($query);
            $resultUpdate->execute();

            echo 'Pronto! Produto atualizado';
        }

        $product = $con->prepare("SELECT * FROM tb_product WHERE id='{$id}'");
        $product->execute();

        parent::render('product/edit', [
            'product' => $product->fetch(\PDO::FETCH_ASSOC),
            'categories' => $categories,
        ]);
    }

    public function removeAction(): void
    {
        $id = $_GET['id'];
        $con = Connection::getConnection();

        $result = $con->prepare("DELETE FROM tb_product WHERE id='{$id}'");
        $result->execute();

        $message = 'Pronto! produto excluído';

        parent::message($message);
    }

    public function reportAction(): void
    {
        $con = Connection::getConnection();

        $result = $con->prepare('SELECT prod.id, prod.name, prod.quantity, cat.name as category FROM tb_product AS prod INNER JOIN tb_category AS cat ON prod.category_id = cat.id');
        $result->execute();

        $content = '';

        while ($product = $result->fetch(\PDO::FETCH_ASSOC)) {
            extract($product);

            $content .= "
            <tr>
                <td>{$id}</td>
                <td>{$name}</td>
                <td>{$quantity}</td>
                <td>{$category}</td>
            </tr>
            ";
        }

        $html = "
        <h1>Relatórios de Produtos no Estoque</h1>
        <table border='1' width='100%'>
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            {$content}
        </tbody>
        ";

        $pdf = new Dompdf();

        $pdf->loadHtml($html);

        $pdf->render();

        $pdf->stream();
    }
}
