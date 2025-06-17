<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adotar | PuuurAmor</title>

    <!-- Bootstrap e Fontes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Capriola&family=Cagliostro&display=swap" rel="stylesheet">
    <script defer src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="<?= base_url('assets/css/card.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/header_footer.css') ?>">
    <script defer src="<?= base_url('assets/js/adotar.js') ?>"></script>
</head>
<body>

    <!-- Header -->
    <?= view('header.php') ?>
    <a href="<?= base_url('') ?>" id="btn-voltar" class="btn btn-link">
        <i class="bi bi-arrow-left"></i>
    </a>


    <!-- Seção de Adoção -->
    <section id="adocao" class="container my-5 text-center">
        <h2>Adotar</h2>
        <p>Dê um lar cheio de amor para um de nossos animaizinhos!</p>
        <h3>Ações Especiais</h3>
        <div id="especial-container"></div>
        <button id="ver-mais-especiais" class="btn btn-custom mt-4 d-none">Ver Mais Especiais</button>
        <button id="ver-menos-especiais" class="btn btn-custom mt-4 d-none">Ver Menos Especiais</button>

        <h3>Animais para Adoção</h3>
        <div id="animal-container"></div>
        <button id="ver-mais" class="btn btn-custom mt-4 d-none">Ver Mais</button>
        <button id="ver-menos" class="btn btn-custom mt-4 d-none">Ver Menos</button>

        <!-- Mensagem de vazio -->
        <div id="mensagem-vazia" class="alert alert-danger d-none" role="alert">
            Nenhum animal cadastrado no momento.
        </div>



        <div class="row" id="animal-container">
            <!-- Cards dos animais serão adicionados dinamicamente aqui -->
        </div>


        <!-- Modal de Adoção -->
        <div class="modal fade" id="adoptModal" tabindex="-1" aria-labelledby="adoptModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content text-start">
                    <div class="modal-header">
                        <h5 class="modal-title" id="adoptModalLabel">Informações sobre o animal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                        <img src="" id="modalAnimalImage" class="img-fluid mb-3 w-100" alt="Animal">
                        <h5 id="modalAnimalName"></h5>
                        <p id="modalAnimalDescription"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
