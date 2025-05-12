<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Pets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Capriola&family=Cagliostro&display=swap" rel="stylesheet">
    <script defer src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/loja.css') ?>">
    <script src defer="<?= base_url('assets/js/loja.js') ?>"></script>
</head>

<body> 
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
                        <a class="nav-link" href="#carousel">Recentes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#adocao">Adotar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#nao-adotaveis">Apadrinhar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="loja/loja.html">Loja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        
    <div class="container text-center my-5">
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
    
    <footer class="footer text-center">
        <p>&copy; 2025 Puuuramor - Todos os direitos reservados</p>
    </footer>
</body>
</html>
