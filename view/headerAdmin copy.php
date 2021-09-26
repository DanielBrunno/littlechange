<?php
if (!isset($_COOKIE['nome']) && !isset($_COOKIE['nivel']) && !isset($_COOKIE['status'])) exit(header("Location: index.php?modulo=Validacao&acao=semPermissao"));
else {
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Escolas Estaduais</title>
    <meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" style="padding: 10px; width:100%; background-image:url('./view/resources/img/fundo.jpeg'); font-size:16pt;">
<!-- INÍCIO DO MENU SUPERIOR -->

<nav class="navbar navbar-default navbar-fixed-top" style="width:100%;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <!-- LOGOTIPO -->
     <!-- <a class="navbar-brand"  style="padding-top: 5px; padding-left: 6px; margin: 0px;"  href="#">  <img style=" height:110%; margin: 0px;" src="view/resources/img/logoTop.png"></a> -->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="./index.php?modulo=Admin&acao=admin"> INÍCIO </a></li>
            <li class="dropdown" style="heigth:100%;">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">CADASTRAR<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="./index.php?modulo=Admin&acao=pushEscola"> ESCOLA </a></li>
                    <li><a href="./index.php?modulo=Admin&acao=admin"> ALUNO </a></li>
                    <li><hr></li>
                    <li><a href="./index.php?modulo=Pessoas&acao=push"> GESTÃO </a></li>
                    <li><a href="./index.php?modulo=Admin&acao=admin"> CONTATO </a></li>
                    <li><a href="./index.php?modulo=Enderecos&acao=push"> ENDEREÇO </a></li>
                    <li><a href="./index.php?modulo=Observacoes&acao=push"> OBSERVAÇÃO </a></li>
                    <li><a href="./index.php?modulo=Admin&acao=repositorio"> FOTO </a></li>
                </ul>
            </li>
            <li class="dropdown" style="heigth:100%;">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">CONSULTAS<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="./index.php?modulo=Admin&acao=escolaNome"> ESCOLA </a></li>
                    <li><hr></li>
                    <li><a href="./index.php?modulo=Admin&acao=alunoNome"> ALUNO </a></li>
                </ul>
            </li>            
        <li class="divider"> </li>
        <li><a href="view/logout.php">SAIR</a></li>
        <li class="divider"> </li>
      </ul>
    </div>
  </div>
</nav>
<hr />
<br>

<?php  } ?>