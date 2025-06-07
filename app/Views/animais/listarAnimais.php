<!DOCTYPE html>
<html>
<head>
    <title>Animais</title>
</head>
<body>
    <h1>Lista de Animais</h1>
    <a href="/animais/novo">Novo Animal</a>
    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Espécie</th>
                <th>Idade</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($animais as $animal): ?>
            <tr>
                <td><?= $animal['id'] ?></td>
                <td><?= $animal['nome'] ?></td>
                <td><?= $animal['especie'] ?></td>
                <td><?= $animal['idade'] ?></td>
                <td><?= $animal['status'] ?></td>
                <td>
                    <a href="/animais/editar/<?= $animal['id'] ?>">Editar</a> |
                    <a href="/animais/excluir/<?= $animal['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
