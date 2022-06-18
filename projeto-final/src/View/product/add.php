<h1>Cadastrar produto</h1>

<form method="POST">
    <div class="mb-3">
        <label for="category_id">Categoria</label>
        <select name="category_id" id="category_id" class="form-select">
            <option selected>-- Selecione --</option>
            <?php
            while ($category = $data->fetch(\PDO::FETCH_ASSOC)) {
                extract($category);

                echo "<option value='{$id}'>{$name}</option>";
            }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input name="name" type="text" class="form-control" id="name" placeholder="Insira o nome da categoria...">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrição</label>
        <input name="description" type="textarea" class="form-control" id="description"
               placeholder="Insira o nome da categoria...">
    </div>
    <div class="mb-3">
        <label for="value" class="form-label">Preço</label>
        <input name="value" type="number" step="0.01" class="form-control" id="value"
               placeholder="Insira o nome da categoria...">
    </div>
    <div class="mb-3">
        <label for="quantity" class="form-label">Quantidade</label>
        <input name="quantity" type="number" class="form-control" id="quantity"
               placeholder="Insira o nome da categoria...">
    </div>
    <div class="mb-3">
        <label for="photo" class="form-label">Link foto</label>
        <input name="photo" type="text" class="form-control" id="photo" placeholder="Insira o nome da categoria...">
    </div>
    <button class="btn btn-primary" type="submit">Enviar</button>
</form>