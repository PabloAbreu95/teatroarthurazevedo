<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Sistema de venda de ingressos do Teatro Arthur Azevedo</title>
  <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/normalize.css">

  <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/bootstrap.min.css">

  <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/css/style.css">
</head>
<body>
  <!-- Navbar topo -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #121112" id="navbar-topo">
    <a class="navbar-brand" href="#">
      <img class="img img-fluid rounded" style="width: 250px; " src="<?php echo BASE_URL;?>assets/images/taa-logo2.png" alt="Logotipo do Arthur Azevedo">
    </a>
    <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"style="color: red"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-5 mr-auto">

        <li class="nav-item mr-2">
          <a class="nav-link" href="#">Eventos</a>
        </li>
        <li class="nav-item dropdown mr-2">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Ingressos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item subitem" href="#">Lista de pedidos</a>

          </div>
        </li>
        <li class="nav-item dropdown mr-2">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Relatórios
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item subitem" href="#">Relação de vendas</a>
            <a class="dropdown-item subitem" href="#">Relação de eventos</a>
            <a class="dropdown-item subitem" href="#">Relação de Tipos de Ingressos</a>
            <a class="dropdown-item subitem" href="#">Relação de setores</a>
          </div>
        </li>

      </ul>
      <form class=" my-2 my-lg-0">
        <a class="nav-link " href="#" id="btn-entrar">
          Entrar
        </a>
      </form>
    </div>
  </nav>
  <!-- Fim do navbar topo -->



  <?php $this->loadViewInTemplate($viewName, $viewData) ?>

  <!-- Rodapé-->
  <section class="bg-dark container-fluid text-center text-white">
    <footer>
      <div class="row">
        <div class="col-md-4 my-2">
          <p class="font-weight-bold">Ajuda</p>
          <a href="#">Informações</a><br>
          <a href="#">Histórico</a><br>
          <a href="#">Funcionamento</a><br>
        </div>
        <div class="col-md-4 my-2">
          <p class="font-weight-bold">Sobre</p>
          <a href="#">Atores</a><br>
          <a href="#">Imagens</a><br>
          <a href="#">Memória</a><br>
        </div>
        <div class="col-md-4 my-2">
          <p class="font-weight-bold">Teatro Arthur Azevedo</p>
          <p>Rua do Sol, S/n - Centro, São luís - MA 65010120</p>
          <p>(98)3218-9900</p>
        </div>
      </div>
      <div class="row">

      </div>
    </footer>
  </section>
  <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/bootstrap.min.js"></script>
</body>
</html>
