<?php helper('form'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Apadrinhar - adicionar</title>
</head>
<body>
  <div class="container my-5">
    <div class="row justify-content-center">
      <?php if (session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger">
          <ul class="mb-0">
            <?php foreach (session('errors') as $erro): ?>
              <li><?= esc($erro) ?></li>
            <?php endforeach ?>
          </ul>
        </div>
      <?php endif ?>

      <div class="col-12 col-md-8 col-lg-6">
        <div class="card shadow">
          <div class="card-body">
            <h5 class="card-title text-center mb-4">
              <?= isset($pet) ? 'Editando Pet' : 'Cadastrando Pet' ?>
            </h5>

            <?= form_open("apadrinhar/salvar", ['enctype' => 'multipart/form-data']) ?>
              <input type="hidden" name="id" value="<?= esc($pet['id'] ?? '') ?>">

              <?php if (!empty($pet['imagem'])): ?>
                <div class="mb-3 text-center">
                  <img src="<?= base_url('uploads/apadrinhar/' . $pet['imagem']) ?>" alt="Imagem atual" class="img-fluid rounded" style="max-height: 200px; aspect-ratio:auto;">
                </div>
              <?php endif; ?>

              <div class="mb-3">
                <label for="imagem" class="form-label">Imagem</label>
                <input type="file" name="imagem" id="imagem" class="form-control" accept="image/*">
              </div>

              <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" value="<?= esc(set_value('nome', $pet['nome'] ?? '')) ?>" required>
              </div>

              <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea name="descricao" id="descricao" rows="4" class="form-control" required maxlength="150" style="resize: none;"><?= esc(set_value('descricao', $pet['descricao'] ?? '')) ?></textarea>
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