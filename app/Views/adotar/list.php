<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Adoção - Lista</title>
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-12">
        <?= anchor(base_url("adotar/criar"), "Adicionar pet", ["class" => "btn btn-success mb-3"]) ?>

        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($pets as $pet): ?>
                <tr>
                  <td><img src="<?= base_url('uploads/adotar/' . $pet['imagem']) ?>" style="height: 100px;"></td>
                  <td><?= esc($pet['nome']) ?></td>
                  <td><?= esc($pet['idade']) ?> anos</td>
                  <td><?= esc($pet['descricao']) ?></td>
                  <td><?= esc($pet['categoria']) ?></td>
                  <td>
                    <?= anchor("adotar/editar/{$pet['id']}", "Editar", ["class" => "btn btn-warning btn-sm"]) ?>
                    <form action="<?= site_url("adotar/deletar/{$pet['id']}") ?>" method="post" onsubmit="return confirm('Deseja remover?');" class="d-inline">
                      <?= csrf_field() ?>
                      <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                    </form>
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