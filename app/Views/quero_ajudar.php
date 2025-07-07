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
<section class="apresentacao mt-5 py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 text-center mb-4 mb-md-0">
                <img src="assets/images/icons/Alternate3Logo.svg" alt="Imagem do Projeto"
                     class="img-fluid rounded shadow" style="max-height: 300px;">
            </div>

            <div class="col-md-8">
                <h2 class="mb-4 text-center text-md-start">Sobre o Projeto</h2>
                <p class="lead text-md-start">
                    O Projeto Puuur Amor é sustentado, em grande parte, pela generosidade de pessoas que acreditam na
                    nossa missão. Desde os primeiros resgates, quando ainda cuidávamos de poucos gatinhos com recursos
                    próprios,
                    até hoje — com dezenas de animais sob nossa proteção — contamos com a ajuda de quem compartilha do
                    nosso propósito: oferecer cuidado, dignidade e esperança a animais abandonados.
                </p>
                <p class="lead text-md-start">
                    Atualmente, o nosso trabalho só é possível graças às doações recorrentes e eventuais de apoiadores.
                    Por isso, cada contribuição faz a diferença para que possamos continuar acolhendo, tratando e
                    garantindo qualidade de vida aos nossos resgatados.
                </p>
                <p class="lead fw-bold text-md-start mt-4">
                    Principais formas de nos ajudar:
                </p>
            </div>
        </div>
    </div>
</section>


<main class="pt-1 mt-1">
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
        <p class="mt-4">
            Ou qualquer outro item que proporcione conforto e bem-estar aos animais resgatados, como camas,
            roupas, cobertores, brinquedos, <a href="#produtos-necessarios"
                                               class="text-decoration-underline text-primary">entre outros</a>.
        </p>
    </div>
</main>
<div class="como-doar py-5 bg-light text-center">
    <div class="container">
        <h2 class="mb-4">Como doar?</h2>

        <p class="lead mb-3">
            Você pode fazer um Pix usando a chave abaixo ou escaneando o QR Code:
        </p>

        <img src="/assets/images/qrcodepix/qrcode-chave-pix.png"
             alt="QR Code Pix" width="250" height="250" style="margin-bottom: 15px;">

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

<section class="produtos-necessarios py-5">
    <div class="container text-start">
        <h2 class="mb-4 text-center" id="produtos-necessarios">Produtos Sempre Necessários</h2>

        <h4 class="mt-4 mb-2">Remédios Veterinários (uso animal)</h4>
        <p><strong>Comprimidos/cápsulas:</strong> Emedron, Doxiciclina 400mg, Helfine plus, Milbemax, Simparic, Flamavet
            0,2mg e 2mg, Norflagen 200mg, Petsporin 75mg, Agemoxi 250mg, Clinbacter 75mg e 150mg, Meloxitabs Biovet
            0,5mg, Ômega 3, Capstar, Pro Cart Flex, Pro Cart 25 2.100mg, Rimadyl 25mg, Cronidor 40mg, etc.</p>
        <p><strong>Líquidos:</strong> Tussedan xarope, Ibatrim Oral, Simeticona, Drasil, Calmavet, Ômega 3, etc.</p>
        <p><strong>Pomadas e tópicos:</strong> Óleo ozonizado de girassol, colírio antibacteriano e anti-inflamatório,
            pasta Cyst-Aid, pasta probiótico, pasta Calmisyn TP, pasta Lactobac Cat, Revolution antipulgas, etc.</p>

        <h4 class="mt-4 mb-2">Remédios de Farmácia Humana (uso veterinário controlado)</h4>
        <p><strong>Comprimidos:</strong> Cobavital, Metronidazol 250mg, Predsim, Dipirona, Gabapentina, Pre Gabalina,
            Amitriptilina 25mg, Ondansetrona 8mg, Tramadol, Simeticona, Furosemida, Pressat, Prednisolona 20mg, etc.</p>
        <p><strong>Líquidos:</strong> Buscopan, Dipirona, óleo mineral, Lactulona, Fosfato sódico de prednisolona 3mg,
            Benzoilmetronidazol 40mg, etc.</p>
        <p><strong>Pomadas, ampolas e outros:</strong> Sucralfilm, Nebacetin.</p>

        <h4 class="mt-4 mb-2">Materiais e Descartáveis</h4>
        <ul>
            <li>Seringas (1ml a 20ml)</li>
            <li>Luvas descartáveis</li>
            <li>Gaze, esparadrapo, algodão</li>
        </ul>

        <h4 class="mt-4 mb-2">Produtos de Limpeza e Higiene</h4>
        <ul>
            <li>Álcool 70%, sabão neutro</li>
            <li>Desinfetante Herbalvet, desinfetante</li>
            <li>Sacos de lixo 60L reforçados, panos e toalhas</li>
            <li>Tapetes higiênicos, areia higiênica</li>
        </ul>
    </div>
</section>


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
<div class="row justify-content-center">
    <div class="col-lg-8 text-center">
        <h2 class="fw-bold mt-3">Fale com a Gente</h2>
        <p class="lead">Tem dúvidas, quer colaborar ou conhecer mais sobre o projeto? Entre em contato:</p>

        <div class="d-flex justify-content-center gap-3 flex-wrap mt-4">
            <a href="https://api.whatsapp.com/send?phone=5551981536015" target="_blank" class="btn btn-outline-success">
                <i class="bi bi-whatsapp me-1"></i> WhatsApp
            </a>
            <a href="https://www.instagram.com/projeto.puuuramor/" target="_blank" class="btn btn-outline-danger">
                <i class="bi bi-instagram me-1"></i> Instagram
            </a>
            <a href="https://www.facebook.com/projeto.puuuramor/" target="_blank" class="btn btn-outline-primary">
                <i class="bi bi-envelope me-1"></i> Facebook
            </a>

        </div>
    </div>
</div>

</body>
</html>

<?php echo View('templates/footer') ?>
