<?php helper('form'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Resgates - Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <?php echo View('templates/header_dashboard.php')?>
  <div class="container my-5">
    <h2 class="mb-4 text-center"><?= isset($resgate) ? 'Editar História de Resgate' : 'Nova História de Resgate' ?></h2>

    <?php if (session()->getFlashdata('errors')): ?>
      <div class="alert alert-danger">
        <ul class="mb-0">
          <?php foreach (session('errors') as $erro): ?>
            <li><?= esc($erro) ?></li>
          <?php endforeach ?>
        </ul>
      </div>
    <?php endif ?>

    <?= form_open_multipart('resgates/salvar') ?>
      <input type="hidden" name="id" value="<?= esc($resgate['id'] ?? '') ?>" />

      <div class="mb-3">
        <label for="titulo" class="form-label">Título</label>
        <input type="text" name="titulo" id="titulo" class="form-control" value="<?= esc(set_value('titulo', $resgate['titulo'] ?? '')) ?>" required />
      </div>

      <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <textarea name="descricao" id="descricao" class="form-control" rows="4" required><?= esc(set_value('descricao', $resgate['descricao'] ?? '')) ?></textarea>
      </div>

      <div class="mb-3">
        <label for="foto_antes" class="form-label">Foto Antes</label>
        <?php if (!empty($resgate['foto_antes'])): ?>
          <div class="mb-2">
            <img src="<?= base_url('uploads/resgates/' . $resgate['foto_antes']) ?>" alt="Foto Antes" class="img-fluid" style="max-height: 200px;">
          </div>
        <?php endif; ?>
        <input type="file" name="foto_antes" id="foto_antes" class="form-control" accept="image/*" <?= isset($resgate) ? '' : 'required' ?> />
      </div>

      <div class="mb-3">
        <label for="foto_depois" class="form-label">Foto Depois</label>
        <?php if (!empty($resgate['foto_depois'])): ?>
          <div class="mb-2">
            <img src="<?= base_url('uploads/resgates/' . $resgate['foto_depois']) ?>" alt="Foto Depois" class="img-fluid" style="max-height: 200px;">
          </div>
        <?php endif; ?>
        <input type="file" name="foto_depois" id="foto_depois" class="form-control" accept="image/*" <?= isset($resgate) ? '' : 'required' ?> />
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    <?= form_close() ?>
  </div>
</body>
</html>
