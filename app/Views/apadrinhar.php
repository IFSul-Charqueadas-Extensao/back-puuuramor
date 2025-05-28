<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Capriola&family=Cagliostro&display=swap" rel="stylesheet">
    <script defer src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/card.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/header_footer.css') ?>">
    <script defer src="<?= base_url('assets/js/adotar.js') ?>"></script>
    <title>Apadrinhar | Puuuramor</title>
</head>
<body>
    <?php echo View('header.php')?>
    <section id="nao-adotaveis" class="container py-5 text-center">
        <h2 id='titulo'>Apadrinhar</h2>
        <p>Esses animais fazem parte da nossa família e precisam de cuidados contínuos.</p>

        <div class="row" id="nao-adotaveis-container">
            <!-- Animais iniciais -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://media.istockphoto.com/id/1525417918/photo/wearing-cat-scratcher-bored-red-collar-collar-brush-pets-close-up-young-old-handsome-animal.jpg?s=612x612&w=0&k=20&c=pbc2e4Z0ZYjsfif9JKZXlh7vu86f2Whaaqe5GC_mwqg=" class="card-img-top" alt="Gato">
                    <div class="card-body">
                        <h5 class="card-title">Bento</h5>
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#apadrModal" data-name="Bento" data-description="Sem descrição" data-image="https://media.istockphoto.com/id/1525417918/photo/wearing-cat-scratcher-bored-red-collar-collar-brush-pets-close-up-young-old-handsome-animal.jpg?s=612x612&w=0&k=20&c=pbc2e4Z0ZYjsfif9JKZXlh7vu86f2Whaaqe5GC_mwqg=">
                            <div class="wrapper-button-2">
                                <div class="apadrinhar"></div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqTPffZMd-c5jCe_1HtbpdsvSxq2bnvRPV2t1a0eH2Bb7zXpISqd4D21CvlJV7BGXVWbY" class="card-img-top" alt="Cachorro">
                    <div class="card-body">
                        <h5 class="card-title">Max</h5>
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#apadrModal" data-name="Max" data-description="Sem descrição" data-image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqTPffZMd-c5jCe_1HtbpdsvSxq2bnvRPV2t1a0eH2Bb7zXpISqd4D21CvlJV7BGXVWbY">
                            <div class="wrapper-button-2">
                                <div class="apadrinhar"></div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://as1.ftcdn.net/v2/jpg/01/06/39/60/1000_F_106396068_ubLYv1qXZgsEHA2ihHcWvXQsyS4WDvox.jpg" class="card-img-top" alt="Gato">
                    <div class="card-body">
                        <h5 class="card-title">Lola</h5>
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#apadrModal" data-name="Lola" data-description="Sem descrição" data-image="https://as1.ftcdn.net/v2/jpg/01/06/39/60/1000_F_106396068_ubLYv1qXZgsEHA2ihHcWvXQsyS4WDvox.jpg">
                            <div class="wrapper-button-2">
                                <div class="apadrinhar"></div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Animais extras escondidos -->
        <div class="row d-none" id="extra-nao-adotaveis">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://cache.desktopnexus.com/thumbseg/55/55490-bigthumbnail.jpg" class="card-img-top" alt="Cachorro">
                    <div class="card-body">
                        <h5 class="card-title">Duke</h5>
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#apadrModal" data-name="Duke" data-description="Sem descrição" data-image="https://cache.desktopnexus.com/thumbseg/55/55490-bigthumbnail.jpg">
                            <div class="wrapper-button-2">
                                <div class="apadrinhar"></div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Botões de Ver Mais e Ver Menos -->
        <button id="ver-mais-nao-adotaveis" class="btn btn-custom mt-4">Ver Mais</button>
        <button id="ver-menos-nao-adotaveis" class="btn btn-custom mt-4 d-none">Ver Menos</button>
        <div class="modal fade" id="apadrModal" tabindex="-1" aria-labelledby="apadrModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="apadrModalLabel">Informações sobre o animal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="" id="modalAnimalImage" class="img-fluid mb-3" alt="Animal">
                        <h5 id="modalAnimalName"></h5>
                        <p id="modalAnimalDescription"></p>
                        <a href="https://www.instagram.com/projeto.puuuramor/" target="_blank" class="btn">Quero Apadrinhar</a>
                    </div>
                </div>
            </div>
        </div>
    
    </section>
</body>
</html>