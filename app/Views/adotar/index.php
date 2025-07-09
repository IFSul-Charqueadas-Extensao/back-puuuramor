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
  <script defer src="<?= base_url('assets/js/adotar.js') ?>"></script>
  <title>Adoção | Puuuramor</title>
  <script>const BASE_URL = "<?= base_url() ?>";</script>
</head>
<body>
<?php echo view('header.php') ?>

    <section class="container py-5 text-center">
        <h2 class="mt-5 mb-3">Para Adoção</h2>
            <?php if (empty($adotaveis)): ?>
                <p>Nenhum pet cadastrado no momento :(</p>
                <p class="mb-5">Volte mais tarde!</p>
            <?php endif; ?>
        <div class="row">
            <?php foreach ($adotaveis as $pet): ?>
            <div class="col-12 col-md-6 col-lg-4 mb-2">
                <div class="card">
                <img src="<?= base_url('uploads/adotar/' . $pet['imagem']) ?>" class="card-img-top" style="height: 350px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title"><?= esc($pet['nome']) ?></h5>
                    <a href="#" class="btn btn-primary" data-id="<?= $pet['id'] ?>" data-bs-toggle="modal" data-bs-target="#saiba-mais">Saiba mais</a>
                </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>

        <h2 class="mt-5 mb-3">Adoção Especial</h2>
        <div class="row">
            <?php if (empty($especiais)): ?>
                <p>Nenhum pet cadastrado no momento :(</p>
                <p class="mb-5">Volte mais tarde!</p>
            <?php endif; ?>

            <?php foreach ($especiais as $pet): ?>
            <div class="col-12 col-md-6 col-lg-4 mb-2">
                <div class="card">
                <img src="<?= base_url('uploads/adotar/' . $pet['imagem']) ?>" class="card-img-top" style="height: 350px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title"><?= esc($pet['nome']) ?></h5>
                    <a href="#" class="btn btn-primary" data-id="<?= $pet['id'] ?>" data-bs-toggle="modal" data-bs-target="#saiba-mais">Saiba mais</a>
                </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>

        <div class="modal fade" id="saiba-mais" tabindex="-1">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modal-title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                <div id="modal-error" class="alert alert-danger d-none"></div>
                <p id="modal-description"></p>
                </div>
                <div class="modal-footer">
                <a target="_parent" href="<?= base_url('/formulario')?>" >
                    <button class="btn btn-success">Adotar</button>
                </a>
                </div>
            </div>
            </div>
        </div>
    </section>
</body>
</html>

<?php echo View('templates/footer') ?>
