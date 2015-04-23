 <?php session_start();?>
 <?php require_once("./controller/conexao.php");?>
 <?php if(isset($_SESSION['usuario_logado'])){//usuario logado?>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">TecWeb</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="upload.php">Upload</a></li>
            <li><a href="webcam.php">Tirar Foto</a></li>
            <li><a href="lista_imagens.php">Minhas Fotos</a></li>
            <li><a href="./controller/login_controller.php?acao=sair">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<?php }else{//usuario não logado?>


    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">TecWeb</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="cadastro.php">Cadastro</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<?php }?>