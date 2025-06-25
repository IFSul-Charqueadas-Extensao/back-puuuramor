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

    <title>Galeria | Puuuramor</title>
</head>
<body>
    <?php echo View('header.php') ?>

    <section id="galeria-posts" class="container py-5 text-center">
        <h2 class="mt-5 mb-3">Galeria</h2>
        <p class="mb-5">Confira os registros dos nossos bichinhos!</p>

        <?php if (empty($posts)): ?>
            <p>Nenhum post cadastrado no momento :(</p>
            <p class="mb-5">Volte mais tarde!</p>
        <?php endif; ?>

        <div class="row">
            <?php foreach($posts as $post): ?>
                <div class="col-12 col-md-6 col-lg-4 mb-2">
                    <div class="card">
                        <img src="<?= base_url('uploads/galeria/' . $post['imagem']) ?>" alt="<?= esc($post['titulo']) ?>" class="card-img-top" style="object-fit: cover; height: 350px;">
                        <div class="card-body">
                            <h5 class="card-title"><?= esc($post['titulo']) ?></h5>
                            <p class="card-text"><?= esc($post['descricao']) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </section>
</body>
</html>
