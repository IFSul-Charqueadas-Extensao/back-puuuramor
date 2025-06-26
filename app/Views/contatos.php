<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Fale com a Gente 💌 | Puuur Amor</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Capriola&family=Cagliostro&display=swap" rel="stylesheet">
  <script defer src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="<?= base_url('assets/css/header_footer.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/contatos.css') ?>">
</head>

<body>
  <?php echo View('header.php') ?>
  <section class="contato-section">
    <h1 class="text-center">Fale com a Gente 💌</h1>
    <p>Tem alguma dúvida, quer ajudar ou simplesmente conversar? Estamos aqui para ouvir você!<br>
    Entre em contato pelos nossos canais:</p>

    <div class="canal">
      <strong>📱 WhatsApp</strong><br>
      Fale direto com a gente pelo <a href="https://wa.me/5551981536015" target="_blank">WhatsApp</a>.<br>
    </div>

    <div class="canal">
      <strong>📸 Instagram</strong><br>
      Mande uma DM ou acompanhe nosso trabalho no <a href="https://www.instagram.com/projeto.puuuramor/" target="_blank">Instagram</a>.<br>
    </div>

    <div class="canal">
      <strong>📧 E-mail</strong><br>
      Envie um e-mail para <a href="mailto:projetopuuuramor@gmail.com">projetopuuuramor@gmail.com</a>.<br>
    </div>

    <!-- esperando retorno p/ remover ou finalizar a implementação -->
    <!-- <div class="canal">
      <strong>💌 Envie uma mensagem pra gente</strong><br>
      Se preferir, preencha o formulário abaixo e responderemos o mais breve possível!
      <form class="mt-3">
        <div class="mb-3">
          <label for="nome" class="form-label">Nome:</label>
          <input type="text" class="form-control" id="nome" placeholder="Seu nome">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail:</label>
          <input type="email" class="form-control" id="email" placeholder="seu@email.com">
        </div>
        <div class="mb-3">
          <label for="mensagem" class="form-label">Mensagem:</label>
          <textarea class="form-control" id="mensagem" rows="4" placeholder="Digite sua mensagem"></textarea>
        </div>
        <button type="submit" class="btn btn-purple w-100">Enviar</button>
      </form>
    </div> -->

    <!-- sugestão de newsletter pra captar emails -->
    <!-- <div class="newsletter-box mt-4">
      <strong>🐾 Quer acompanhar as novidades?</strong>
      <p>Assine nossa newsletter e receba atualizações sobre os gatinhos, eventos e formas de ajudar!</p>
      <form>
        <div class="mb-3">
          <label for="newsletter-email" class="form-label">E-mail:</label>
          <input type="email" class="form-control" id="newsletter-email" placeholder="seu@email.com">
        </div>
        <button type="submit" class="btn btn-purple w-100">Quero receber novidades</button>
      </form>
    </div> -->
  </section>

  <footer class="footer text-center">
    <p>&copy; 2025 Puuuramor - Todos os direitos reservados</p>
  </footer>
</body>

</html>