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
        <link rel="stylesheet" href="<?= base_url('assets/css/parceiro_card.css') ?>">
    <title>Parceiros| Puuuramor</title>
</head>
<body class="bg-light">
    <?php echo View('header.php')?>
    <!-- Seção de Parceiros -->
    <section id="agradecimento" class="py-5 bg-white">
        <div class="container mt-5 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-4">Juntos fazemos a diferença</h2>
                    <p class="lead mb-4">O trabalho do Puuuramor só é possível graças ao apoio de parceiros incríveis que acreditam na nossa missão de proteger e cuidar dos animais.</p>
                    <p>Cada contribuição - seja ela financeira, de produtos ou serviços - nos ajuda a continuar resgatando, tratando e encontrando lares amorosos para nossos animais.</p>
                    <div class="mt-4">
                        <a href="<?= base_url('quero_ajudar') ?>" class="btn btn-success btn-lg px-4">Quero ajudar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de Parceiros -->
    <section id="nossos-parceiros" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">Nossos Apoiadores</h2>
            
            <!-- Parceiros-->
            <div class="mb-5">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">
                    <div class="col">
                        <a href="https://www.instagram.com/agroagroapis/" class="text-decoration-none" target="_blank">
                            <div class="card h-100 border-0 shadow-sm parceiro-card">
                                <div class="card-body text-center">
                                    <img src="<?= base_url('assets/images/parceiros/agroapis.png') ?>" alt="Agropecuária AgroApis" class="img-fluid rounded-1 mb-3" style="max-height: 120px;">
                                    <h5 class="card-title">Agropecuária AgroApi</h5>
                                    <!--<p class="card-text text-muted small">Texto de contribuição</p>!-->
                                </div>
                            </div>
                        </a>
                    </div>
 
        
                    <!-- Parceiro -->
                    <div class="col">
                        <a href="https://www.instagram.com/mapi.arq/" class="text-decoration-none" target="_blank">
                            <div class="card h-100 border-0 shadow-sm parceiro-card">
                                <div class="card-body text-center">
                                    <img src="<?= base_url('assets/images/parceiros/mapi.png') ?>" alt="MAPI. Arquitetura e Urbanismo" class="img-fluid rounded-1 mb-3" style="max-height: 120px;">
                                    <h5 class="card-title">MAPI. Arquitetura e Urbanismo</h5>
                                    <!--<p class="card-text text-muted small">Texto de contribuição</p>!-->
                                </div>
                            </div>
                        </a>
                    </div>
 
                    <!-- Parceiro -->                    
                    <div class="col">
                        <a href="https://www.instagram.com/m2_eng_arq/" class="text-decoration-none" target="_blank">
                            <div class="card h-100 border-0 shadow-sm parceiro-card">
                                <div class="card-body text-center">
                                    <img src="<?= base_url('assets/images/parceiros/eng_arq.png') ?>" alt="M2 Engenharia e Arquitetura" class="img-fluid rounded-1 mb-3" style="max-height: 120px;">
                                    <h5 class="card-title">M2 Engenharia e Arquitetura</h5>
                                    <!--<p class="card-text text-muted small">Texto de contribuição</p>!-->
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Parceiro -->
                    <div class="col">
                        <a href="https://www.instagram.com/tocadosbichoscharqueadas/" class="text-decoration-none" target="_blank">
                            <div class="card h-100 border-0 shadow-sm parceiro-card">
                                <div class="card-body text-center">
                                    <img src="<?= base_url('assets/images/parceiros/toca_dos_bichos.png') ?>" alt="Toca dos Bichos | Clínica Veterinária" class="img-fluid rounded-1 mb-3" style="max-height: 120px;">
                                    <h5 class="card-title">Toca dos Bichos | Clínica Veterinária</h5>
                                    <!--<p class="card-text text-muted small">Texto de contribuição</p>!-->
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Parceiro -->
                    <div class="col">
                        <a href="https://www.instagram.com/saofrancisco.charqueadas/" class="text-decoration-none" target="_blank">
                            <div class="card h-100 border-0 shadow-sm parceiro-card">
                                <div class="card-body text-center">
                                    <img src="<?= base_url('assets/images/parceiros/sao_francisco_vet.png') ?>" alt="Clínica Veterinária São Francisco" class="img-fluid rounded-1 mb-3" style="max-height: 120px;">
                                    <h5 class="card-title">Clínica Veterinária São Francisco</h5>
                                    <!--<p class="card-text text-muted small">Texto de contribuição</p>!-->
                                </div>
                            </div>                            
                        </a>
                    </div>

                    <!-- Parceiro -->
                    <div class="col">
                        <a href="https://www.instagram.com/max.graficadigital/" class="text-decoration-none" target="_blank">
                                <div class="card h-100 border-0 shadow-sm parceiro-card">
                                    <div class="card-body text-center">
                                        <img src="<?= base_url('assets/images/parceiros/max_grafica.png') ?>" alt="Max Gráfica Digital" class="img-fluid rounded-1 mb-3" style="max-height: 120px;">
                                        <h5 class="card-title">Max Gráfica Digital</h5>
                                        <!--<p class="card-text text-muted small">Texto de contribuição</p>!-->
                                    </div>
                                </div>                            
                        </a>
                    </div>
                </div>
            </div>
    </section>

    
    <!-- Seção Como Ajudar -->
    <section id="como-ajudar" class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="<?= base_url('assets/images/parceiros/parceiros1.jpeg') ?>" alt="Como se tornar parceiro" class="img-fluid rounded-4 shadow w-100" style="max-height: 400px; object-fit: cover;">
                </div>
                
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Como se tornar um parceiro</h2>
                    
                    <div id= "item" class="d-flex mb-3">
                        <div class="me-3">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <span>1</span>
                            </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Escolha sua forma de contribuição</h5>
                            <p class="mb-0">Doações financeiras, produtos, serviços ou divulgação.</p>
                        </div>
                    </div>
                    
                    <div id= "item" class="d-flex mb-3">
                        <div class="me-3">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <span>2</span>
                            </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Entre em contato conosco</h5>
                            <p class="mb-0">Através do Whatsapp, Instagram ou mensagem.</p>
                        </div>
                    </div>
                    
                    <div id= "item" class="d-flex mb-4">
                        <div class="me-3">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <span>3</span>
                            </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Definimos os detalhes</h5>
                            <p class="mb-0">Ajustamos a parceria conforme suas possibilidades.</p>
                        </div>
                    </div>
                    
                    <!-- Leva pra seção de baixo, não sei se é realmente necessário, mas deixei comentado
                    <a href="#contato" class="btn btn-success btn-lg px-4">Entrar em Contato</a>!-->
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de Contato -->
    <section id="contato" class="py-5 bg-light">
        <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 class="fw-bold">Fale com a Gente</h2>
            <p class="lead">Quer colaborar e se tornar parceiro do projeto? Entre em contato:</p>

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
    </section>

    <footer class="footer text-center">
        <p>&copy; 2025 Puuuramor - Todos os direitos reservados</p>
    </footer>
</html>
