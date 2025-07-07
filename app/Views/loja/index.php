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
    <script defer src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        const BASE_URL = '<?= base_url() ?>';
    </script>
    <script defer src="<?= base_url('assets/js/loja.js') ?>"></script>
</head>

<body>
    <?= view('header') ?>

    <div class="container text-center my-5" id="container">
        <h2 class="titulo">Produtos para seu pet 🐾</h2>

        <?php if (empty($produtos)): ?>
            <div class="alert alert-warning text-center my-5 p-4" style="background-color: #fef3f8; color: #8c7db1; border: 2px dashed #c6b8e6; border-radius: 10px;">
                <h4 class="mb-3">🐾 Ops... Nenhum produto por aqui!</h4>
                <p>Estamos preparando algo especial para seus pets. Volte logo, tá bom? 💜</p>
            </div>
        <?php endif ?>

        <div class="row row-cols-1 row-cols-md-3 g-4" id="product-container">
            <?php foreach ($produtos as $produto): ?>
                <div class="col">
                    <div class="card product-card h-100">
                        <h5 class="card-title"><?= esc($produto['nome']) ?></h5>
                        <img src="<?= base_url('uploads/produtos/' . $produto['imagem']) ?>" alt="<?= esc($produto['nome']) ?>" class="card-img-top">
                        <p class="price">R$ <?= number_format($produto['preco'], 2, ',', '.') ?></p>
                        <div class="product-info px-3 pb-3">
                            <?= esc($produto['descricao']) ?>
                            <a href="#" class="btn btn-primary mt-2" data-id="<?= $produto['id'] ?>" data-bs-toggle="modal" data-bs-target="#saiba-mais">Comprar</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

        <button class="btn btn-secondary mt-4" id="load-more">Veja mais</button>
    </div>

    <section id="contato" class="bg-white py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="fw-bold">Fale com a Gente</h2>
                <p class="lead">Tem alguma dúvida, quer ajudar ou precisa conversar com a gente? Escolha o assunto e entre em contato pelo e-mail correspondente. Vamos adorar ouvir você!</p>
                <a href="/contatos" class="btn btn-success btn-lg mt-3 px-4">Contatos</a>
            </div>
        </div>
    </section>

    <!-- Modal de Saiba Mais -->
    <div class="modal fade" id="saiba-mais" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">Produto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <p id="modal-description">Descrição do produto</p>
                </div>
                <div class="modal-footer">
                    <a href="#" target="_blank" id="link-compra">
                        <button class="btn btn-success">Ir para compra</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer text-center mt-5">
        <p>&copy; 2025 Puuuramor - Todos os direitos reservados</p>
    </footer>
</body>

</html>