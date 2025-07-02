<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Capriola&family=Cagliostro&display=swap" rel="stylesheet" />
    <script defer src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/header_footer.css') ?>" />
    <script defer src="<?= base_url('assets/js/adotar.js') ?>"></script>
    <title>Gatinhos | Puuuramor</title>
</head>

<body>
    <?= view('header.php') ?>

    <section class="bg-purple py-5 pt-5 mt-5">
        <div class="container">
            <h2 class="fw-bold text-center mb-5">Conheça Todos os Gatinhos</h2>

            <?php function renderCategoria($titulo, $gatos)
            { ?>
                <h3 class="text-center mt-5"><?= esc($titulo) ?></h3>
                <div class="row justify-content-center">
                    <?php foreach ($gatos as $gato): ?>
                        <div class="col-12 col-md-6 mb-4">
                            <div class="card h-100 shadow-sm">
                                <img src="<?= base_url('imagens/' . $gato['imagem']) ?>" class="card-img-top" alt="<?= esc($gato['nome']) ?>">
                                <div class="card-body text-center">
                                    <h5 class="card-title"><?= esc($gato['nome']) ?></h5>
                                    <p class="card-text"><?= esc($gato['descricao']) ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php } ?>

            <?php renderCategoria('Adotáveis', $adotaveis); ?>
            <?php renderCategoria('Não Adotáveis', $nao_adotaveis); ?>
            <?php renderCategoria('Especiais', $especiais); ?>
            <?php renderCategoria('Já Adotados', $ja_adotados); ?>
            <?php renderCategoria('Memorial', $memorial); ?>
        </div>
    </section>

    <?= view('templates/contato_section') ?>

    <footer class="footer text-center">
        <p>&copy; 2025 Puuuramor - Todos os direitos reservados</p>
    </footer>
</body>

</html>
