<h1>Editar categoria</h1>

<form method="POST">
  <div class="mb-3">
    <label for="name" class="form-label">Nome</label>
    <input name="name" type="name" class="form-control" id="name" placeholder="Insira o nome da categoria..." value="<?= $data['name'] ?>">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Descrição</label>
    <input name="description" type="text" class="form-control" id="description" placeholder="Insira o nome da categoria..." value="<?= $data['description'] ?>">
  </div>
  <button class="btn btn-primary" type="submit">Atualizar</button>
</form>