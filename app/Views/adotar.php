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

            <section id="contato" class="bg-white py-5">
                <!-- Contato -->
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="fw-bold">Fale com a Gente</h2>
                        <p class="lead">Tem alguma dúvida, quer ajudar ou precisa conversar com a gente? Escolha o assunto e entre em contato pelo e-mail correspondente. Vamos adorar ouvir você!</p>
                        <!-- <div class="d-flex justify-content-center gap-3 flex-wrap mt-4">
                            <a href="https://wa.me/numero" target="_blank" class="btn btn-outline-success">
                                <i class="bi bi-whatsapp me-1"></i> WhatsApp
                            </a>
                            <a href="https://www.instagram.com/projeto.puuuramor/" target="_blank" class="btn btn-outline-danger">
                                <i class="bi bi-instagram me-1"></i> Instagram
                            </a>
                            <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#contatoModal">
                                <i class="bi bi-envelope me-1"></i> Enviar Mensagem
                            </button>
                        </div> -->
                        <a href="/contatos" class="btn btn-success btn-lg mt-3 px-4">Contatos</a>
                    </div>
                </div>
        </div>
    </section>

    <!-- Modal de Contato -->
    <!-- <div class="modal fade" id="contatoModal" tabindex="-1" aria-labelledby="contatoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contatoModalLabel">Enviar Mensagem</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Seu Nome">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Seu Email">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Sua Mensagem"></textarea>
                        </div>
                        <button type="submit" class="btn  w-100">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section> -->

    <footer class="footer text-center">
        <p>&copy; 2025 Puuuramor - Todos os direitos reservados</p>
    </footer>
</body>
</html>
