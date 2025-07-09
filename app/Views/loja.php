<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja | PuuurAmor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Capriola&family=Cagliostro&display=swap" rel="stylesheet">
    <script defer src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/loja.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/header_footer.css') ?>">
    <script src defer="<?= base_url('assets/js/loja.js') ?>"></script>
</head>

<body> 
    <?php echo View('header.php')?>        
    <div class="container text-center my-5" id="container">
        <h2 class="titulo">Produtos para seu pet 🐾</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4" id="product-container">
            <div class="col">
                <div class="card product-card">
                    <h5 class="card-title">Ração Premium</h5>
                    <img src="https://images.petz.com.br/fotos/1708614057884.jpg" alt="Produto 1">
                        <p class="price">R$ 49,90</p>
                    <div class="product-info">Refeição Natural Zee.Dog Kitchen Lata para Cães Adultos Sabor Frango
                        <button class="btn btn-primary mt-2" id="meuBotao">Comprar</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card product-card">
                    <h5 class="card-title">Ração Premium</h5>
                    <img src="https://images.petz.com.br/fotos/1669215743652.jpg" alt="Produto 2">
                    <p class="price">R$ 49,90</p>
                    <div class="product-info">Refeição Natural Zee.Dog Kitchen Lata para Cães Adultos Sabor Frango
                        <button class="btn btn-primary mt-2" id="meuBotao">Comprar</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card product-card">
                    <h5 class="card-title">Ração Premium</h5>
                    <img src="https://images.petz.com.br/fotos/1715289228426.jpg" alt="Produto 3">
                        <p class="price">R$ 49,90</p>
                    <div class="product-info">Refeição Natural Zee.Dog Kitchen Lata para Cães Adultos Sabor Frango
                        <button class="btn btn-primary mt-2" id="meuBotao">Comprar</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card product-card">
                    <h5 class="card-title">Ração Premium</h5>
                    <img src="https://images.petz.com.br/fotos/20003280000046_1738760537062.jpg" alt="Produto 1">
                    <p class="price">R$ 49,90</p>
                    <div class="product-info">Refeição Natural Zee.Dog Kitchen Lata para Cães Adultos Sabor Frango
                        <button class="btn btn-primary mt-2" id="meuBotao">Comprar</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card product-card">
                    <h5 class="card-title">Ração Premium</h5>
                    <img src="https://images.petz.com.br/fotos/1683816068257.jpg" alt="Produto 2">
                    <p class="price">R$ 49,90</p>
                    <div class="product-info">Refeição Natural Zee.Dog Kitchen Lata para Cães Adultos Sabor Frango
                        <button class="btn btn-primary mt-2" id="meuBotao">Comprar</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card product-card">
                    <h5 class="card-title">Ração Premium</h5>
                    <img src="https://images.petz.com.br/fotos/20003280000048_1738760716567.jpg" alt="Produto 3">
                    <p class="price">R$ 49,90</p>
                    <div class="product-info">Refeição Natural Zee.Dog Kitchen Lata para Cães Adultos Sabor Frango
                        <button class="btn btn-primary mt-2" id="meuBotao">Comprar</button>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-secondary mt-4" id="load-more">Veja mais</button>
    </div>
    
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

</body>
</html>

<?php echo View('templates/footer') ?>

