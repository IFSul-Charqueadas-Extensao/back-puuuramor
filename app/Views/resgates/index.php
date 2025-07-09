<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Resgates | Puuuramor</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Capriola&family=Cagliostro&display=swap" rel="stylesheet" />
    <script defer src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="<?= base_url('assets/js/resgates.js') ?>"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/resgates.css') ?>" />

    <link rel="stylesheet" href="<?= base_url('assets/css/header_footer.css') ?>" />

</head>
<body>
    <?= view('header.php') ?>
<section class="container py-5" id="resgates-section">
    <h1 class="mb-5 text-center fw-bold">Casos emocionantes e impactantes de resgate</h1>

    <article class="mb-5 text-center">
        <h2 class="mb-3 fw-semibold">Histórias de Resgate</h2>
        <p class="lead">Conheça os relatos dos nossos resgates transformadores que deram uma nova chance a muitos animais.</p>
    </article>
    <div class="text-center my-4">
        <img src="<?= base_url('assets/images/resgates.png') ?>" alt="Imagem ilustrativa de resgates" class="img-fluid rounded shadow" style="max-width: 500px;">
    </div>

    <section aria-label="Lista de resgates com fotos antes e depois">
        <div class="row g-4">
            <?php if(empty($resgates)): ?>
                <p class="text-muted">Nenhuma história cadastrada ainda.</p>
            <?php else: ?>
                <?php foreach($resgates as $resgate): ?>
                    <div class="col-12">
                        <article class="card shadow-sm mb-4">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><?= esc($resgate['titulo']) ?></h5>
                                <p class="card-text"><?= esc($resgate['descricao']) ?></p>
                            </div>

                            <div class="resgates-imgs row g-0 text-center">
                                <div class="col-md-6">
                                    <img src="<?= base_url('uploads/resgates/' . $resgate['foto_antes']) ?>"
                                        alt="Antes - <?= esc($resgate['titulo']) ?>"
                                        class="img-fluid w-100 rounded-0 border-top">
                                    <small class="d-block py-2 fw-medium text-muted">Antes</small>
                                </div>
                                <div class="col-md-6">
                                    <img src="<?= base_url('uploads/resgates/' . $resgate['foto_depois']) ?>"
                                        alt="Depois - <?= esc($resgate['titulo']) ?>"
                                        class="img-fluid w-100 rounded-0 border-top">
                                    <small class="d-block py-2 fw-medium text-muted">Depois</small>
                                </div>
                            </div>
                        </article>
                    </div>

                <?php endforeach ?>
            <?php endif ?>
        </div>
    </section>
</body>
</html>

<?php echo View('templates/footer') ?>

