<head>
  <link href="https://fonts.googleapis.com/css2?family=Capriola&family=Cagliostro&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/header_dashboard.css') ?>">
</head>

<nav class="navbar navbar-expand-md navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url('adotar/listar') ?>">Gerenciar</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="<?= base_url('adotar/listar') ?>">Adotar</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('apadrinhar/listar') ?>">Apadrinhar</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('galeria/listar') ?>">Galeria</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('loja/listar') ?>">Loja</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('resgates/listar') ?>">Resgates</a></li>
        <li class="nav-item"><a class="btn btn-danger" href="<?= base_url('/logout') ?>">Sair</a></li>
      </ul>
    </div>
  </div>
</nav>
