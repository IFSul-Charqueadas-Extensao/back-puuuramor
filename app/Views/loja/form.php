<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2><?= isset($produto) ? "Editar Produto" : "Cadastrar Produto" ?></h2>

        <?php if (session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger">
                <?php foreach (session()->getFlashdata('errors') as $erro): ?>
                    <p><?= esc($erro) ?></p>
                <?php endforeach ?>
            </div>
        <?php endif ?>

        <form action="<?= base_url('/loja/salvar') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <?php if (isset($produto)): ?>
                <input type="hidden" name="id" value="<?= $produto['id'] ?>">
            <?php endif ?>

            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" class="form-control" required
                    placeholder="Ex: Ração Natural Premium"
                    value="<?= old('nome', $produto['nome'] ?? '') ?>">
            </div>

            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição:</label>
                <textarea name="descricao" class="form-control" rows="3" required
                    placeholder="Ex: Ração completa para cães adultos, sabor frango."><?= old('descricao', $produto['descricao'] ?? '') ?></textarea>
            </div>

            <div class="mb-3">
                <label for="preco" class="form-label">Preço:</label>
                <input type="text" name="preco" class="form-control" required
                    placeholder="Ex: 49.90"
                    value="<?= old('preco', $produto['preco'] ?? '') ?>">
            </div>

            <div class="mb-3">
                <label for="link_compra" class="form-label">Link de Compra:</label>
                <input type="url" name="link_compra" class="form-control" required
                    placeholder="Cole o link do seu produto no Enjoei, Shopee ou Amazon"
                    value="<?= old('link_compra', $produto['link_compra'] ?? '') ?>">
            </div>

            <div class="mb-3">
                <label for="imagem" class="form-label">Imagem:</label>
                <input type="file" name="imagem" class="form-control">
                <?php if (isset($produto['imagem'])): ?>
                    <p class="mt-2">Imagem atual:
                        <img src="<?= base_url('uploads/produtos/' . $produto['imagem']) ?>" height="100">
                    </p>
                <?php endif ?>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="<?= base_url('/loja/listar') ?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>

</html>