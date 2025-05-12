<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puuuramor - ONG de Resgate Animal</title>
    <link href="https://fonts.googleapis.com/css2?family=Capriola&family=Cagliostro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">
    <script defer src="<?= base_url('assets/js/home.js') ?>"></script>
</head>
<body class="bg-light">
    <section class="hero">
        <h1 style="z-index: 2;">Bem-vindo à Puuuramor</h1>
        <p style="z-index: 2;">Uma ONG dedicada ao resgate e adoção de animais em busca de um lar amoroso.</p>
        <a href="#adocao" class="btn-hero" style="z-index: 2;">Ver animais para adoção</a>
    </section>    
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Puuuramor</a>
            <div class="logo"></div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('adotar') ?>">Adotar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('apadrinhar') ?>">Apadrinhar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('loja') ?>">Loja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('quero_ajudar') ?>">Quero ajudar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('transparencia') ?>">Transparência</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <section id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="d-flex justify-content-center align-items-center">
        <!-- Indicadores -->
            <section id="carouselExemplo" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicadores -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExemplo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExemplo" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExemplo" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                
                <!-- Slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background-image: url('<?= base_url("assets/images/foto1-news.jpeg") ?>')" data-bs-title="Título do Primeiro Slide" data-bs-description="Uma breve descrição sobre o conteúdo deste slide. Aqui você pode colocar informações importantes.">
                        <div class="carousel-caption">
                            <h2>Resgates</h2>
                            <p>Casos emocionantes e impactantes de resgate.</p>
                            <button class="saiba-mais" data-bs-toggle="modal" data-bs-target="#modalNoticia">Saiba Mais</button>
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image: url('<?= base_url("assets/images/foto2-news.jpg") ?>')" data-bs-title="Título do Segundo Slide" data-bs-description="Outra descrição breve e atrativa para este slide. Destaque os principais pontos do seu conteúdo.">
                        <div class="carousel-caption">
                            <h2>Faça sua doação</h2>
                            <p>Nos ajude a comprar os medicamentos e rações para nossos gatinhos.</p>
                            <button class="saiba-mais" data-bs-toggle="modal" data-bs-target="#modalNoticia">Saiba Mais<i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image: url('<?= base_url("assets/images/foto1-news.jpeg") ?>')" data-bs-title="Título do Terceiro Slide" data-bs-description="Mais uma descrição interessante para este slide. Mantenha seu texto curto e direto ao ponto.">
                        <div class="carousel-caption">
                            <h2>Galeria</h2>
                            <p>Momentos fofos e marcantes.</p>
                            <button class="saiba-mais" data-bs-toggle="modal" data-bs-target="#modalNoticia">Saiba Mais <i class="fas fa-arrow-right"></i></button>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modalNoticia" tabindex="-1" aria-labelledby="modalNoticiaLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalNoticiaLabel">Título da Notícia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p id="modalDescricao">Aqui vai o conteúdo da notícia.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              </div>
            </div>
          </div>
        </div>
    </section> 


    <section id="nossa-historia" class="bg-white py-5">
        <div class="container">
            <!-- Título da notícia -->
            <div class="mb-4 text-center">
                <h1 class="display-5 fw-bold ">O nascimento do Projeto Puuur Amor</h1>
                <p class=" fst-italic">Como um resgate mudou o destino de duas protetoras – e centenas de animais</p>
                <small>Nossa História</small>
            </div>

                <!-- Imagem de destaque -->
            <div class="mb-5">
                <img src="<?= base_url('assets/images/animais/cachorro2.jpeg') ?>" alt="Imagem do projeto" class="img-fluid rounded-4 shadow w-100" style="max-height: 450px; object-fit: cover;">
            </div>

                <!-- Corpo da notícia -->
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <p class="fs-5 mb-4">O Projeto Puuur Amor nasceu a partir de um encontro que mudou o curso de duas vidas – e, desde então, a de centenas de animais. Em setembro de 2017, as protetoras Andressa Einloft e Kátia Einloft resgataram uma gatinha grávida abandonada em uma rua de Charqueadas. A partir desse gesto, identificaram um propósito comum: acolher, cuidar e oferecer uma nova chance aos animais que não tinham um lar.</p>
                    
                    <p class="fs-5 mb-4">Em 2018, foi construído o primeiro gatil, simples, porém acolhedor. Ele abrigava, inicialmente, 12 gatos – incluindo mães prenhas e filhotes abandonados. Nos dois primeiros anos, o trabalho foi realizado de forma totalmente independente, dentro da própria residência das fundadoras, com recursos financeiros próprios, dedicação diária e o objetivo de proporcionar novos lares aos animais resgatados.</p>
                    
                    <!-- Imagem no meio do texto -->
                    <div class="text-center my-5">
                    <img src="<?= base_url('assets/images/animais/gato1.jpeg') ?>" alt="Gatil e resgates" class="img-fluid rounded-3 shadow" style="max-height: 400px;">
                    </div>

                    <p class="fs-5 mb-4">Com o tempo, o número de resgates aumentou, assim como os desafios. Em 2019, a mudança de endereço e os custos com aluguel trouxeram instabilidade financeira, especialmente diante da crescente demanda por cuidados veterinários, alimentação e medicamentos para os cerca de 20 animais já sob tutela.</p>
                    
                    <p class="fs-5 mb-4">A chegada da pandemia, em 2020, impôs ainda mais obstáculos. Mas também revelou o poder da mobilização. Por meio das redes sociais, surgiram os primeiros apoiadores, pessoas sensibilizadas pela causa que decidiram contribuir. Rifas, doações e parcerias pontuais ajudaram a manter a estrutura e garantiram a continuidade do trabalho. No ano seguinte, oficialmente, nascia o Projeto Puuur Amor.</p>

                    <p class="fs-5 mb-4">Hoje, mesmo com maior reconhecimento na cidade, a ONG segue enfrentando limitações: ainda não possui sede própria, nem tem um próprio meio de locomoção, não conta com patrocínio fixo e depende exclusivamente da solidariedade de quem acredita na causa. Todo animal acolhido recebe atendimento veterinário, é vermifugado, vacinado e castrado antes de ser disponibilizado para adoção responsável.</p>

                    <p class="fs-5 mb-4">O cuidado vai muito além do básico. Muitos dos gatos chegam em situação crítica – vítimas de maus-tratos, doenças graves, traumas emocionais e desnutrição. Há filhotes que necessitam de mamadeira de três em três horas, casos que exigem medicação frequente e acompanhamento constante.</p>

                    <p class="fs-5 mb-4">Apesar dos momentos de exaustão e das dores inevitáveis dessa missão, seguimos em frente. Porque cada vida salva representa uma vitória. Cada lar conquistado renova a esperança. Cada gesto de apoio reafirma nosso propósito.</p>

                    <p class="fs-5">O Projeto Puuur Amor é, acima de tudo, uma escolha diária por empatia, compromisso e respeito à vida. E enquanto houver animais precisando de ajuda, nossa luta continuará — com coragem, responsabilidade e, claro, muito amor.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="missao-valores" class="py-5 bg-dark">
        <div class="container text-white">
            <div class="row align-items-center">
            <!-- Coluna de imagem ilustrativa -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="<?= base_url('assets/images/animais/gato2.jpg') ?>" alt="Missão do projeto" class="img-fluid rounded-4 shadow">
                </div>

                <!-- Coluna de conteúdo -->
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-3 ">Nossa Missão</h2>
                    <p class="fs-5 mb-3">
                        O <strong>Projeto Puuur Amor</strong> é uma iniciativa independente que atua em Charqueadas/RS com foco no <strong>resgate, acolhimento e adoções responsáveis</strong> de gatos em situação de abandono.
                    </p>

                    <div class="mb-3 d-flex">
                        <i class="bi bi-heart-pulse-fill text-danger fs-4 me-3"></i>
                        <p class="mb-0 fs-5">
                            Conscientizamos sobre a <strong>importância da castração</strong> para conter o ciclo de sofrimento e abandono nas ruas.
                        </p>
                    </div>

                    <div class="mb-3 d-flex">
                        <i class="bi bi-house-heart-fill text-primary fs-4 me-3"></i>
                        <p class="mb-0 fs-5">
                            Cuidamos dos acolhidos com carinho na <strong>sede do projeto</strong> e em lares temporários de voluntários.
                        </p>
                    </div>

                    <div class="mb-3 d-flex">
                        <i class="bi bi-paw-fill text-warning fs-4 me-3"></i>
                        <p class="mb-0 fs-5">
                            Atualmente cuidamos de <strong>44 animais</strong> (41 gatos e 3 cães), todos preparados com atenção para adoção.
                         </p>
                    </div>

                    <p class="fs-5 mt-4">
                        Se você acredita na nossa missão, existem muitas formas de ajudar: <strong>adotando, apadrinhando, sendo voluntário, compartilhando</strong> ou contribuindo com doações.
                    </p>
                        <!-- Botão de apoio -->
                    <a href="<?= base_url('quero_ajudar') ?>" class="btn btn-success btn-lg mt-3 px-4">Quero Ajudar</a>

                </div>
            </div>
        </div>
    </section>

 

            <!-- Apoiadores -->
        <section id="apoie" class="py-5 bg-light">
        <div class="container">

            <!-- Apoiadores -->
            <div class="row align-items-center flex-lg-row-reverse mb-5">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <img src="assets/images/parceiros/parceiros2.jpeg" alt="Apoiadores" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-7 text-center text-lg-start">
                <h2 class="fw-bold">Apoiadores do Puuur Amor</h2>
                <p class="lead">Conheça as empresas e pessoas que acreditam na nossa missão de transformar vidas.</p>
                <a href="<?= base_url('parceiros') ?>" class="btn btn-outline-dark">Ver Apoiadores</a>
            </div>
            </div>

            <!-- Loja -->
            <div class="row align-items-center mb-5">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <img src="assets/images/loja/loja1.png" alt="Amimal comendo racao" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-7 text-center text-lg-start">
                <h2 class="fw-bold">Loja Solidária</h2>
                <p class="lead">Ajude a ONG comprando produtos. Toda compra gera impacto direto no cuidado dos animais.</p>
                <a href="<?= base_url('loja') ?>" class="btn btn-success">Visitar Loja</a>
            </div>
            </div>

            <!-- Contato -->
            <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="fw-bold">Fale com a Gente</h2>
                <p class="lead">Tem dúvidas, quer colaborar ou conhecer mais sobre o projeto? Entre em contato:</p>

                <div class="d-flex justify-content-center gap-3 flex-wrap mt-4">
                <a href="https://wa.me/numero" target="_blank" class="btn btn-outline-success">
                    <i class="bi bi-whatsapp me-1"></i> WhatsApp
                </a>
                <a href="https://www.instagram.com/projeto.puuuramor/" target="_blank" class="btn btn-outline-danger">
                    <i class="bi bi-instagram me-1"></i> Instagram
                </a>
                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#contatoModal">
                    <i class="bi bi-envelope me-1"></i> Enviar Mensagem
                </button>
                </div>
            </div>
            </div>

        </div>
        </section>
    
    <!-- Modal de Contato -->
    <div class="modal fade" id="contatoModal" tabindex="-1" aria-labelledby="contatoModalLabel" aria-hidden="true">
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
    


    <footer class="footer text-center">
        <p>&copy; 2025 Puuuramor - Todos os direitos reservados</p>
    </footer>
</body>
</html>
