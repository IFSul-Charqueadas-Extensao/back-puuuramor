<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Loja - Lista</title>

    <script>
        function confirmar() {
            if (!confirm("Deseja remover o post da loja?")) {
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

                <?= anchor(base_url("loja/criar"), "Adicionar produto", ["class" => "btn btn-success mb-3"]) ?>

                <div class="table-responsive">
                    <table class="table table-striped align-middle">
                        <thead>
                            <tr>
                                <th>Imagem</th>
                                <th>Nome</th>
                                <th>Preço</th>
                                <th>Descrição</th>
                                <th>Link de Compra</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($produtos as $produto): ?>
                                <tr>
                                    <td>
                                        <img src="<?= base_url('uploads/produtos/' . $produto['imagem']) ?>"
                                            alt="<?= esc($produto['descricao']) ?>"
                                            class="img-fluid rounded"
                                            style="max-height: 180px; width: auto; object-fit: cover;">
                                    </td>
                                    <td style="max-width: 150px; word-break: break-word;">
                                        <?= esc($produto['nome']) ?>
                                    </td>
                                    <td style="max-width: 100px;">
                                        R$ <?= number_format($produto['preco'], 2, ',', '.') ?>
                                    </td>
                                    <td style="max-width: 300px; word-break: break-word;">
                                        <?= esc($produto['descricao']) ?>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?= esc($produto['link_compra']) ?>" target="_blank" class="btn btn-outline-primary">
                                            🐾 Comprar
                                        </a>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column flex-md-row gap-2">
                                            <?= anchor("loja/editar/{$produto['id']}", "Editar", ["class" => "btn btn-warning btn-sm"]) ?>
                                            <form action="<?= site_url("loja/deletar/{$produto['id']}") ?>" method="post" onsubmit="return confirmar();">
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