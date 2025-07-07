<?php helper('form'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Galeria - Adicionar</title>
</head>
<body>
  <?php echo View('templates/header_dashboard.php')?>
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
              <?= isset($post) ? 'Editando Post da Galeria' : 'Cadastrando Post na Galeria' ?>
            </h5>

            <?= form_open("galeria/store", ['enctype' => 'multipart/form-data']) ?>
              <input type="hidden" name="id" value="<?= esc($post['id'] ?? '') ?>">

              <?php if (!empty($post['imagem'])): ?>
                <div class="mb-3 text-center">
                  <img src="<?= base_url('uploads/galeria/' . $post['imagem']) ?>" alt="Imagem atual" class="img-fluid rounded" style="max-height: 200px; aspect-ratio:auto;">
                </div>
              <?php endif; ?>

              <div class="mb-3">
                <label for="imagem" class="form-label">Imagem</label>
                <input type="file" name="imagem" id="imagem" class="form-control" accept="image/*">
              </div>

              <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" name="titulo" id="titulo" class="form-control" value="<?= esc(set_value('titulo', $post['titulo'] ?? '')) ?>" required maxlength="100">
              </div>

              <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea name="descricao" id="descricao" rows="4" class="form-control" required maxlength="255" style="resize: none;"><?= esc(set_value('descricao', $post['descricao'] ?? '')) ?></textarea>
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
