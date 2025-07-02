<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Capriola&family=Cagliostro&display=swap" rel="stylesheet">
    <script defer src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/header_footer.css') ?>">
    <script defer src="<?= base_url('assets/js/adotar.js') ?>"></script>
    <title>Transparência | Puuuramor</title>
</head>

<body>
    <?php echo View('header.php') ?>

    <!-- div só para preencher o espaço e ajeitar a posição da section e do footer
    basta inserir o conteudo correto fornecido pelo responsavel, e ignorar/excluir essa div -->
    <div class="bg-purple w-100" style="height: 360px;"></div>

    <?= view('templates/contato_section') ?>

    <footer class="footer text-center">
        <p>&copy; 2025 Puuuramor - Todos os direitos reservados</p>
    </footer>
</body>

</html>