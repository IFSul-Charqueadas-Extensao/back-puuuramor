<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Capriola&family=Cagliostro&display=swap" rel="stylesheet">
    <script defer src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/header_footer.css') ?>">
    <script defer src="<?= base_url('assets/js/apadrinhar.js') ?>"></script>
    <title>Apadrinhar | Puuuramor</title>

    <script>
        const BASE_URL = "<?= base_url() ?>";
    </script>
</head>
<body>
    <?php echo View('header.php')?>
    <section id="nao-adotaveis" class="container py-5 text-center">
        <h2 id='titulo' class="mt-5 mb-3">Apadrinhar</h2>
        <p class="mb-5">Esses animais fazem parte da nossa família e precisam de cuidados contínuos.</p>

        <?php if (empty($pets)): ?>
            <p>Nenhum pet cadastrado no momento :(</p>
            <p class="mb-5">Volte mais tarde!</p>
        <?php endif; ?>

        <div class="row">
            <?php foreach($pets as $pet): ?>
                <div class="col-12 col-md-6 col-lg-4 mb-2">
                    <div class="card">
                        <img src="<?= base_url('uploads/apadrinhar/' . $pet['imagem']) ?>" alt="Descrição da imagem" class="card-img-top" style="object-fit: cover; height: 350px;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $pet['nome'] ?></h5>
                            <a href="#" class="btn btn-primary" data-id="<?php echo $pet['id'] ?>" data-bs-toggle="modal" data-bs-target="#saiba-mais">Saiba mais</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

        <div class="modal fade" id="saiba-mais" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title">Título</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-content-area">
                            <div id="modal-error" class="alert alert-danger d-none"></div>
                            <p id="modal-description">Descrição do pet</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" target="_blank" id="link-whatsapp">
                            <button class="btn btn-primary" data-bs-dismiss="modal">Apadrinhar</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
