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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/header_footer.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/css/resgates.css') ?>" />

    <script defer src="<?= base_url('assets/js/adotar.js') ?>"></script>

    
</head>
<body>
    <?php echo View('header.php'); ?>
    <a href="<?= base_url('') ?>" id="btn-voltar" class="btn btn-link">
        <i class="bi bi-arrow-left"></i>
    </a>
    <main class="container my-5">

        <h1 class="text-center mb-4">Casos emocionantes e impactantes de resgate.</h1>
        
        <section>
            <h2 class="section-title">Histórias de Resgate</h2>
            <div class="row gy-4">
                <!-- História 1 -->
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">História de Resgate 1</h5>
                            <p class="card-text">Ainda não temos a história aqui, mas você pode imaginar um relato emocionante sobre como o gatinho foi salvo.</p>
                            
                            <div class="row mt-3">
                                <div class="col-6 text-center">
                                    <img src="<?= base_url('assets/images/antes1.jpeg') ?>" alt="Antes" class="img-fluid rounded shadow-sm mb-2" />
                                    <p><strong>Antes</strong></p>
                                </div>
                                <div class="col-6 text-center">
                                    <img src="<?= base_url('assets/images/depois1.jpeg') ?>" alt="Depois" class="img-fluid rounded shadow-sm mb-2" />
                                    <p><strong>Depois</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- História 2 -->
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">História de Resgate 2</h5>
                            <p class="card-text">Este espaço é reservado para mais um emocionante relato de resgate que ainda será adicionado.</p>
                            
                            <div class="row mt-3">
                                <div class="col-6 text-center">
                                    <img src="<?= base_url('assets/images/antes2.jpeg') ?>" alt="Antes" class="img-fluid rounded shadow-sm mb-2" />
                                    <p><strong>Antes</strong></p>
                                </div>
                                <div class="col-6 text-center">
                                    <img src="<?= base_url('assets/images/depois2.jpeg') ?>" alt="Depois" class="img-fluid rounded shadow-sm mb-2" />
                                    <p><strong>Depois</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Socorro! Encontrei um gatinho! -->
        <section>
            <h2 class="section-title">Socorro! Encontrei um gatinho! E agora?</h2>
            <p>
                Encontrar um gatinho perdido ou abandonado pode ser uma experiência emocionante, mas também desafiadora. 
                Primeiramente, avalie se o animal está em perigo imediato e, se for o caso, procure ajuda veterinária o quanto antes.
                Ofereça água e alimento adequado, e mantenha o gatinho em um local seguro. 
                Entre em contato com ONGs e grupos de proteção animal para receber orientações sobre os próximos passos e possibilidades de acolhimento ou adoção.
            </p>
        </section>

    </main>

</body>
</html>
