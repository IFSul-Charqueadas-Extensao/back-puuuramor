<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Resgates - Lista</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    function confirmar(){
      return confirm("Deseja realmente remover esta história de resgate?");
    }
  </script>
</head>
<body>
  <div class="container mt-5">
    <?php if (session()->getFlashdata('erro')): ?>
      <div class="alert alert-danger"><?= esc(session()->getFlashdata('erro')) ?></div>
    <?php endif ?>

    <?= anchor(base_url("resgates/criar"), "Adicionar história", ["class" => "btn btn-success mb-3"]) ?>

    <div class="table-responsive">
      <table class="table table-striped align-middle">
        <thead>
          <tr>
            <th>Foto Antes</th>
            <th>Foto Depois</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($resgates as $resgate): ?>
            <tr>
              <td>
                <img src="<?= base_url('uploads/resgates/' . $resgate['foto_antes']) ?>"
                     alt="Foto Antes"
                     class="img-fluid rounded"
                     style="max-height: 150px; object-fit: cover;">
              </td>
              <td>
                <img src="<?= base_url('uploads/resgates/' . $resgate['foto_depois']) ?>"
                     alt="Foto Depois"
                     class="img-fluid rounded"
                     style="max-height: 150px; object-fit: cover;">
              </td>
              <td style="max-width: 150px; word-break: break-word;">
                <?= esc($resgate['titulo']) ?>
              </td>
              <td style="max-width: 300px; word-break: break-word;">
                <?= esc($resgate['descricao']) ?>
              </td>
              <td>
                <div class="d-flex gap-2 flex-column flex-md-row">
                  <?= anchor("resgates/editar/{$resgate['id']}", "Editar", ["class" => "btn btn-warning btn-sm"]) ?>
                  <form action="<?= site_url("resgates/deletar/{$resgate['id']}") ?>" method="post" onsubmit="return confirmar();">
                    <?= csrf_field() ?>
                    <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                  </form>
                </div>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
