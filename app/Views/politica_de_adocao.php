

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
    <link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">
    <script defer src="<?= base_url('assets/js/home.js') ?>"></script>
    <title>Politica de Adoção| Puuuramor</title>
    <style>
    .card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .card {
      background-color: #ffffff;
      width: 320px;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      text-align: center;
      box-sizing: border-box;
      transition: transform 0.2s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card h3 {
      margin-top: 0;
      color: #2c3e50;
    }

    .card p {
      margin: 8px 0;
    }

    .card ul {
      list-style: none;
      padding: 0;
      margin-top: 10px;
    }

    .card ul li::before {
      content: "✔ ";
      color: #27ae60;
    }

    .card ul li {
      margin: 6px 0;
    }

    @media (max-width: 1000px) {
      .card {
        width: 100%;
        max-width: 500px;
      }
    }
  </style>
</head>
<body>
    <?php echo view('header.php') ?>
    <section class="container py-5 text-center" style="display: inline-block; width: auto;" >
        <h1 style="padding-top: 60px;">Politica de Adoção</h1>
        <h2>🏡 Política de Adoção Responsável — Projeto Puuur Amor</h2>
        <p>As adoções realizadas pelo Projeto Puuur Amor são restritas à cidade de Charqueadas e à região Carbonífera, no Rio Grande do Sul. Todos os nossos gatinhos são entregues com o protocolo veterinário em dia: vacinados, vermifugados e castrados (ou com castração garantida na idade apropriada).</p>
        <p>A maioria dos gatos que chega até nós carrega marcas profundas do abandono: muitos vêm doentes, feridos, com medo e traumas causados por maus-tratos. Infelizmente, ainda existe muito preconceito e desinformação quando o assunto é gato. Nosso trabalho é resgatar, tratar e devolver a dignidade a esses animais — e garantir que eles encontrem um lar seguro, amoroso e permanente.</p>
        
        <h2>🐾 Sobre os requisitos de adoção</h2>
        <p>Nós acreditamos que gatos devem viver protegidos dentro de casa. Por isso, além do preenchimento do formulário de adoção, realizamos uma vistoria no lar adotivo antes da entrega do gatinho, para garantir que o ambiente seja seguro e apropriado.</p>

        <h2>✅ Para apartamentos:</h2>
        <p>Adoções são permitidas apenas em apartamentos com todas as aberturas teladas: janelas, sacadas, vitrôs e basculantes devem estar protegidos com telas fixas e resistentes, com tramas de no máximo 5cm. Não aceitamos telas removíveis, rede de proteção frouxa ou adaptada de forma improvisada.</p>

        <h2>✅ Para casas:</h2>
        <p>Casas também precisam oferecer segurança contra fugas. É necessário que haja barreiras físicas reais que impeçam o acesso dos gatos à rua, telhados ou muros. Algumas exigências incluem:</p>
        <p>Portões frontais (ex: garagem) devem ser totalmente telados;</p>
        <p>Todas as janelas, inclusive do segundo andar ou em locais altos, precisam estar protegidas com tela;</p>
        <p>Quintais devem ser organizados de forma que o gato não tenha acesso a áreas externas que ofereçam risco.</p>
        <p>Portas e janelas fechadas não são suficientes: a instalação de telas adequadas é imprescindível para garantir a segurança do animal.</p>

        <h2>💬 Sobre os adotantes</h2>
        <p>Além de oferecer um lar seguro, os adotantes devem ter condições financeiras de manter o bem-estar do gatinho: isso inclui alimentação de qualidade, consultas veterinárias, vacinas anuais e demais cuidados básicos.
No momento da adoção, o responsável assina um termo de compromisso onde se compromete a:</p>
        <p>Manter o gatinho em ambiente seguro, exclusivamente dentro de casa;</p>
        <p>Fornecer alimentação adequada, água fresca e acompanhamento veterinário regular;</p>
        <p>Garantir a vacinação anual;</p>
        <p>Comunicar a ONG caso surja alguma dificuldade na adaptação;</p>
        <p>Devolver o animal ao Projeto, caso a adoção não funcione, nunca abandoná-lo;</p>
        <p>Assumir a responsabilidade pela saúde e bem-estar do animal durante toda a vida dele.</p>

        <p>Cada gato tem seu próprio temperamento, histórico e necessidades. Por isso, buscamos sempre encontrar o perfil de adotante mais compatível com cada um — pensando no bem-estar de ambos.</p>
        <a href="<?= base_url('/adotar')?>">
        <p>ENCONTRE SEU GATINHO</p>
        </a>
        </section>
        
        <div class="card-container">

    <section class="card">
      <h3>1. Tela de Polietileno (tela de proteção para gatos)</h3>
      <p><strong>Material:</strong> polietileno de alta densidade (geralmente tratado contra raios UV)</p>
      <p><strong>Malha:</strong> 3x3 cm ou menor (ideal para gatos)</p>
      <p><strong>Resistência:</strong> suporta até 500 kg/m²</p>
      <p><strong>Indicação:</strong> janelas, sacadas, áreas internas/externas</p>

      <p><strong>Vantagens:</strong></p>
      <ul>
        <li>Flexível e fácil de instalar</li>
        <li>Não enferruja</li>
        <li>Visual discreto</li>
        <li>Boa durabilidade</li>
      </ul>

      <p><strong>Atenção:</strong> opte sempre por empresas especializadas em instalação para garantir a tensão correta</p>
    </section>

    <section class="card">
      <h3>2. Tela Metálica Galvanizada</h3>
      <p><strong>Material:</strong> aço galvanizado</p>
      <p><strong>Malha:</strong> de 1x1 cm até 5x5 cm (quanto menor, mais segura)</p>
      <p><strong>Indicação:</strong> gatis externos, muros, portões</p>

      <p><strong>Vantagens:</strong></p>
      <ul>
        <li>Alta resistência a mordidas e arranhões</li>
        <li>Longa durabilidade</li>
      </ul>

      <p><strong>Desvantagens:</strong></p>
      <ul>
        <li>Pode enferrujar com o tempo (a não ser que seja revestida)</li>
        <li>Mais difícil de instalar e manipular</li>
      </ul>
    </section>

    <section class="card">
      <h3>3. Tela Soldada Revestida em PVC</h3>
      <p><strong>Material:</strong> aço com revestimento em PVC</p>
      <p><strong>Malha:</strong> 2x2 ou 3x3 cm</p>
      <p><strong>Indicação:</strong> estruturas permanentes e áreas externas</p>

      <p><strong>Vantagens:</strong></p>
      <ul>
        <li>Alta durabilidade</li>
        <li>Visual mais agradável</li>
        <li>Resistente à corrosão</li>
      </ul>

      <p><strong>Ideal para:</strong> quem quer unir estética e segurança</p>
    </section>
        <section class="card">
        <h3>4. Redes de Proteção com Reforço em Aço</h3>
        <p><strong>Material:</strong> nylon com reforço interno de aço</p>
        <p><strong>Indicação:</strong> ambientes de alto risco ou com gatos muito ativos</p>

  <p><strong>Vantagens:</strong></p>
  <ul>
    <li>Visual discreto</li>
    <li>Mais segura do que a rede comum</li>
  </ul>

  <p><strong>Indicação:</strong> apartamentos, áreas com gatos que roem ou escalam muito</p>
    </section>

    <section class="card">
        <h3>5. Painéis Modulares com Tela de Arame ou Gradeado</h3>
        <p><strong>Material:</strong> ferro, aço ou alumínio com tela</p>
        <p><strong>Uso:</strong> montagem de baias, áreas de quarentena ou gatis temporários</p>

        <p><strong>Vantagens:</strong></p>
        <ul>
            <li>Versáteis e reposicionáveis</li>
            <li>Estrutura firme</li>
            <li>Podem incluir portas com trava</li>
        </ul>
    </section>
  </div>
    <footer class="footer text-center">
        <p>&copy; 2025 Puuuramor - Todos os direitos reservados</p>
        <a href="<?= base_url('/politica_de_adocao')?>"
        <p class="nav-link" style="display: inline-block; width: auto;">Politica de Adoção</p>
        </a>
    </footer>
</body>
</html>