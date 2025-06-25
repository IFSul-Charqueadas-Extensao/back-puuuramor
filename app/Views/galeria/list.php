<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <title>Galeria - Lista</title>

  <script>
    function confirmar(){
      if(!confirm("Deseja remover o post da galeria?")){
        return false;
      }
      return true;
    }
  </script>
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-12">
        <?php if (session()->getFlashdata('erro')): ?>
          <div class="alert alert-danger">
            <?= esc(session()->getFlashdata('erro')) ?>
          </div>
        <?php endif ?>

        <?= anchor(base_url("galeria/create"), "Adicionar post", ["class" => "btn btn-success mb-3"]) ?>

        <div class="table-responsive">
          <table class="table table-striped align-middle">
            <thead>
              <tr>
                <th>Imagem</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Ação</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($posts as $post): ?>
                <tr>
                  <td>
                    <img src="<?= base_url('uploads/galeria/' . $post['imagem']) ?>"
                        alt="<?= esc($post['descricao']) ?>"
                        class="img-fluid rounded"
                        style="max-height: 180px; width: auto; object-fit: cover;">
                  </td>
                  <td style="max-width: 150px; word-break: break-word;">
                    <?= esc($post['titulo']) ?>
                  </td>
                  <td style="max-width: 300px; word-break: break-word;">
                    <?= esc($post['descricao']) ?>
                  </td>
                  <td>
                    <div class="d-flex flex-column flex-md-row gap-2">
                      <?= anchor("galeria/edit/{$post['id']}", "Editar", ["class" => "btn btn-warning btn-sm"]) ?>
                      <form action="<?= site_url("galeria/delete/{$post['id']}") ?>" method="post" onsubmit="return confirmar();">
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
    </div>
  </div>
</body>
</html>
