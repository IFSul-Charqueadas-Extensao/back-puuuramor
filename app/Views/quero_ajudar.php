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
    <script defer src="<?= base_url('assets/js/ajudar.js') ?>"></script>
    <title>Quero Ajudar| Puuuramor</title>
</head>
<body>
<?php echo View('header.php') ?>

<main class="pt-5 mt-3">
    <div class="donate-info text-center my-5">
        <h2 class="mb-3">O que doar?</h2>
        <p class="mb-4">A Puuuramor precisa de:</p>

        <div class="d-flex justify-content-center gap-5 flex-wrap">
            <img src="https://cobasiadocao.blob.core.windows.net/files/medicamentos_1_2167d888ad.svg" width="153"
                 height="207" alt="Ração para cães e gatos">
            <img src="https://cobasiadocao.blob.core.windows.net/files/alimento_1_57d9ec1682.svg" width="153"
                 height="207" alt="Medicamentos veterinários">
            <img src="https://cobasiadocao.blob.core.windows.net/files/higiene_limpeza_538d8cfc35.svg" width="153"
                 height="207" alt="Produtos de limpeza">
        </div>
        <p class="mt-4">Ou qualquer outro item que proporcione conforto e bem-estar aos animais resgatados, como camas,
            roupas, cobertores, brinquedos, entre outros.</p>
    </div>
</main>
<div class="como-doar py-5 bg-light text-center">
    <div class="container">
        <h2 class="mb-4">Como doar?</h2>

        <p class="lead mb-3">
            Você pode fazer um Pix usando a chave abaixo ou escaneando o QR Code:
        </p>

        <img src="/assets/images/qrcodepix/qrcode-chave-pix.png"
             alt="QR Code Pix" width="180" height="180" style="margin-bottom: 15px;">

        <p class="fw-bold mb-2" style="cursor: pointer; color: #0d6efd; text-decoration: underline;" id="copy-pix">
            Clique para copiar a chave: 51981536015
        </p>
        <span id="copy-feedback-pix" style="color: green; display: none;">Chave Pix copiada!</span>
        <p>Nome: Andressa Einloft Reichert</p>

        <p class="mt-4">
            Doações de cobertores, camas, comidas não perecíveis e outros itens são bem-vindas. Entre em contato via
            WhatsApp
        </p>

        <a href="https://wa.me/5551981536015?text=Olá,%20quero%20fazer%20uma%20doação%20para%20o%20projeto%20de%20ajuda%20aos%20animais."
           target="_blank"
           class="btn btn-lg"
           style="background-color: #6f42c1; color: white; border: none;">
            Falar pelo WhatsApp
        </a>

    </div>
</div>


<section class="como-onde py-3 bg-light text-center">
    <div class="container">
        <h2 class="mb-4">Onde doar?</h2>
        <p class="lead mb-3">Você pode entregar as doações diretamente em nosso endereço.</p>

        <ul class="list-unstyled">
            <li><strong>Endereço:</strong> Av. Primeiro de Maio, 406 - Vila Rosa, Charqueadas-rs</li>
            <li><strong>Horário:</strong> 09:00 - 12:00 || 14:00 - 19:00</li>
            <li><strong>Contato:</strong> (51) 98153-6015</li>
        </ul>
        <div class="mt-4 d-flex justify-content-center">
            <div class="ratio ratio-4x3" style="max-width: 400px; width: 100%;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.8727239739123!2d-51.62725532465866!3d-29.954339374969003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951bc11231a8c8d5%3A0x8d3ab2081b2c8733!2sAv.%20Primeiro%20de%20Maio%2C%20406%20-%20Vila%20Rosa%2C%20Charqueadas%20-%20RS%2C%2096745-000!5e0!3m2!1spt-PT!2sbr!4v1750893375445!5m2!1spt-PT!2sbr"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <p class="mt-3">
  <span id="copy-endereco" role="button" style="cursor: pointer; color: #0d6efd; text-decoration: underline;">Copiar endereço para área de transferência
  </span>
            <span id="copy-feedback" style="margin-left:10px; color: green; display: none;">Copiado!</span>
        </p>
    </div>
</section>
<div class="gostou-trabalho py-3 text-center bg-light">
    <div class="container">
        <h2 class="mb-3">Gostou do nosso trabalho?</h2>
        <p class="mb-4">Siga-nos no Instagram e acompanhe mais ações, histórias e formas de ajudar!</p>

        <a href="https://www.instagram.com/projeto.puuuramor/"
           target="_blank"
           class="btn btn-outline-danger btn-lg">
            <i class="bi bi-instagram me-1"></i> Instagram
        </a>
    </div>
</div>

</body>
</html>
