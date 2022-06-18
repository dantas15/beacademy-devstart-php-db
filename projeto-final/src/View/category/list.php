<h1>Listar categoria</h1>

<table class="">
  <thead class="">
    <tr>
      <th>#</th>
      <th>Nome</th>
      <th>Descrição</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while ($category = $data->fetch(\PDO::FETCH_ASSOC)) {
      echo '<tr>';
      echo '<td>' . $category['id'] . '</td>';
      echo '<td>' . $category['name'] . '</td>';
      echo '<td>' . $category['description'] . '</td>';
      echo '</tr>';
    }
    ?>
  </tbody>
</table>