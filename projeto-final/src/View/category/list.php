<h1>Listar categoria <a href="/categorias/nova" class="btn btn-dark">+ Cadastrar</a></h1>

<table class="table table-hover table-striped">
  <thead class="table-dark">
    <tr>
      <th>#</th>
      <th>Nome</th>
      <th>Descrição</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while ($category = $data->fetch(\PDO::FETCH_ASSOC)) {
      $id = $category['id'];
      $name = $category['name'];
      $description = $category['description'];

      echo
      "<tr>
          <td> {$id} </td>
          <td> {$name} </td>
          <td> {$description} </td>
          <td>
            <a href='/categorias/editar?id={$id}'class='btn btn-sm btn-warning'>Editar</a>
            <a href='/categorias/excluir?id={$id}'class='btn btn-sm btn-danger'>Excluir</a>
          </td>
        </tr>";
    }
    ?>
  </tbody>
</table>