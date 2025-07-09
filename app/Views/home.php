<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puuuramor | ONG de Resgate Animal</title>
    <link href="https://fonts.googleapis.com/css2?family=Capriola&family=Cagliostro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/header_footer.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">
    <script defer src="<?= base_url('assets/js/home.js') ?>"></script>
</head>
<body class="bg-light">
    <?php echo View('header.php')?>
    <section class="hero">
        <h1 style="z-index: 2;">Bem-vindo à Puuuramor</h1>
        <p style="z-index: 2;">Uma ONG dedicada ao resgate e adoção de animais em busca de um lar amoroso.</p>
        <a href="<?= base_url('adotar')?>" class="btn-hero" style="z-index: 2;">Ver animais para adoção</a>
    </section>

    <!-- Comentário -->

</body>
</html>
<?php echo View('templates/footer') ?>
