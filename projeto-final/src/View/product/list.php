<div class="d-flex align-items-start justify-content-between w-100">
    <h1>
        Listar produtos
    </h1>
    <a href="/produtos/novo" class="btn btn-dark">
        Novo produto
    </a>
</div>

<table class="table table-hover table-striped">
    <thead class="table-dark">
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Imagem</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Data de cadastro</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($product = $data->fetch(\PDO::FETCH_ASSOC)) {
        extract($product);
        echo
        "<tr>
          <td> {$id} </td>
          <td> {$product} </td>
          <td> {$description} </td>
          <td> <img style='object-fit:cover; width: 4rem' src='{$photo}' /></td>
          <td> {$value} </td>
          <td> {$quantity} </td>
          <td> {$created_at} </td>
          <td>
            <a href='/categorias/editar?id={$id}'class='btn btn-sm btn-warning'>Editar</a>
            <a href='/categorias/excluir?id={$id}'class='btn btn-sm btn-danger'>Excluir</a>
          </td>
        </tr>";
    }
    ?>
    </tbody>
</table>