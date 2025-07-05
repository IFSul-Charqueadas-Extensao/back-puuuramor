<!DOCTYPE html>
<html>
<head>
    <title>Novo Animal</title>
</head>
<body>
    <h1>Cadastrar Novo Animal</h1>

    <?php if (isset($validation)): ?>
        <div style="color: red;">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="/animais/criar" method="post">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Espécie:</label><br>
        <select name="especie" required>
            <option value="gato">Gato</option>
            <option value="cachorro">Cachorro</option>
        </select><br><br>

        <label>Idade:</label><br>
        <input type="number" name="idade" min="0" required><br><br>

        <label>Descrição:</label><br>
        <textarea name="descricao"></textarea><br><br>

        <label>Categoria:</label><br>
        <select name="categoria">
            <option value="adotavel">Adotável</option>
            <option value="especial">Especial</option>
            <option value="nao_adotavel">Não Adotável</option>
            <option value="ja_adotado">Já Adotado</option>
            <option value="memorial">Memorial</option>
        </select><br><br>

        <label>Status:</label><br>
        <select name="status">
            <option value="disponivel">Disponível</option>
            <option value="em tratamento">Em tratamento</option>
            <option value="adotado">Adotado</option>
        </select><br><br>

        <label>Data de Resgate:</label><br>
        <input type="date" name="data_resgate"><br><br>

        <button type="submit">Salvar</button>
        <a href="/animais">Cancelar</a>
    </form>
</body>
</html>
