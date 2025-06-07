<!DOCTYPE html>
<html>
<head>
    <title>Editar Animal</title>
</head>
<body>
    <h1>Editar Animal</h1>

    <?php if (isset($validation)): ?>
        <div style="color: red;">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="/animais/atualizar/<?= $animal['id'] ?>" method="post">
        <label>Nome:</label><br>
        <input type="text" name="nome" value="<?= $animal['nome'] ?>" required><br><br>

        <label>Espécie:</label><br>
        <select name="especie" required>
            <option value="gato" <?= $animal['especie'] == 'gato' ? 'selected' : '' ?>>Gato</option>
            <option value="cachorro" <?= $animal['especie'] == 'cachorro' ? 'selected' : '' ?>>Cachorro</option>
        </select><br><br>

        <label>Idade:</label><br>
        <input type="number" name="idade" value="<?= $animal['idade'] ?>" min="0" required><br><br>

        <label>Descrição:</label><br>
        <textarea name="descricao"><?= $animal['descricao'] ?></textarea><br><br>

        <label>Categoria:</label><br>
        <select name="categoria">
            <option value="adotavel" <?= $animal['categoria'] == 'adotavel' ? 'selected' : '' ?>>Adotável</option>
            <option value="especial" <?= $animal['categoria'] == 'especial' ? 'selected' : '' ?>>Especial</option>
            <option value="nao_adotavel" <?= $animal['categoria'] == 'nao_adotavel' ? 'selected' : '' ?>>Não Adotável</option>
            <option value="ja_adotado" <?= $animal['categoria'] == 'ja_adotado' ? 'selected' : '' ?>>Já Adotado</option>
            <option value="memorial" <?= $animal['categoria'] == 'memorial' ? 'selected' : '' ?>>Memorial</option>
        </select><br><br>

        <label>Status:</label><br>
        <select name="status">
            <option value="disponivel" <?= $animal['status'] == 'disponivel' ? 'selected' : '' ?>>Disponível</option>
            <option value="em tratamento" <?= $animal['status'] == 'em tratamento' ? 'selected' : '' ?>>Em tratamento</option>
            <option value="adotado" <?= $animal['status'] == 'adotado' ? 'selected' : '' ?>>Adotado</option>
        </select><br><br>

        <label>Data de Resgate:</label><br>
        <input type="date" name="data_resgate" value="<?= $animal['data_resgate'] ?>"><br><br>

        <button type="submit">Atualizar</button>
        <a href="/animais">Cancelar</a>
    </form>
</body>
</html>
