<?php helper('form'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Adoção - Formulário</title>
</head>
<body>
  <?php echo View('templates/header_dashboard.php')?>
  <div class="container my-5">
    <div class="row justify-content-center">
      <?php if (session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger">
          <ul>
            <?php foreach (session('errors') as $erro): ?>
              <li><?= esc($erro) ?></li>
            <?php endforeach ?>
          </ul>
        </div>
      <?php endif ?>

      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <h5 class="text-center mb-4">
              <?= isset($pet) ? 'Editando Pet' : 'Cadastrando Pet' ?>
            </h5>

            <?= form_open("adotar/salvar", ['enctype' => 'multipart/form-data']) ?>
              <input type="hidden" name="id" value="<?= esc($pet['id'] ?? '') ?>">

              <?php if (!empty($pet['imagem'])): ?>
                <div class="mb-3 text-center">
                  <img src="<?= base_url('uploads/adotar/' . $pet['imagem']) ?>" class="img-fluid rounded" style="max-height: 200px;">
                </div>
              <?php endif ?>

              <div class="mb-3">
                <label for="imagem" class="form-label">Imagem</label>
                <input type="file" name="imagem" class="form-control">
              </div>

              <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" value="<?= esc(set_value('nome', $pet['nome'] ?? '')) ?>" required>
              </div>

              <div class="mb-3">
                <label for="idade" class="form-label">Idade</label>
                <input type="number" name="idade" class="form-control" value="<?= esc(set_value('idade', $pet['idade'] ?? '')) ?>" required>
              </div>

              <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea name="descricao" rows="4" class="form-control" required><?= esc(set_value('descricao', $pet['descricao'] ?? '')) ?></textarea>
              </div>

              <div class="mb-3">
                <label for="categoria" class="form-label">Categoria</label>
                <select name="categoria" class="form-select" required>
                  <option value="adotavel" <?= (isset($pet['categoria']) && $pet['categoria'] == 'adotavel') ? 'selected' : '' ?>>Para Adoção</option>
                  <option value="especial" <?= (isset($pet['categoria']) && $pet['categoria'] == 'especial') ? 'selected' : '' ?>>Adoção Especial</option>
                </select>
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-success">Salvar</button>
              </div>
            <?= form_close() ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>