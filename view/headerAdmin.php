<!DOCTYPE html>
<html lang="pt-br">
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
<title>Little Change</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!-- Favicons Icon -->
<link rel="shortcut icon" href="view/resources/img/Logo1.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="view/resources/img/Logo1.png" />
<link rel="apple-touch-icon" sizes="57x57" href="view/resources/img/Logo1.png" />
<link rel="apple-touch-icon" sizes="72x72" href="view/resources/img/Logo1.png" />
<link rel="apple-touch-icon" sizes="76x76" href="view/resources/img/Logo1.png" />
<link rel="apple-touch-icon" sizes="114x114" href="view/resources/img/Logo1.png" />
<link rel="apple-touch-icon" sizes="120x120" href="view/resources/img/Logo1.png" />
<link rel="apple-touch-icon" sizes="144x144" href="view/resources/img/Logo1.png" />
<link rel="apple-touch-icon" sizes="152x152" href="view/resources/img/Logo1.png" />
<link rel = "apple-touch-icon" size = "180x180" href = "view/resources/img/Logo1.png" />

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>

<style>
.logoTop {
  border-radius: 8px;
  width:50%;
}
</style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" style="padding: 10px; width:100%; background-image:url('./view/resources/img/fundo.jpeg'); font-size:16pt;">

<!-- INÍCIO DO MENU SUPERIOR -->
<nav class="navbar navbar-default navbar-fixed-top" style="font-size: 15px; z-index:1;">
<div class="navbar-header">
<div id="subheader" style="text-align: center; padding: 5px;" ><img src="./view/resources/img/Logo1.png" width="15%" alt=""></div>
</div>   
</nav>

<!--
<nav class="navbar navbar-default navbar-fixed-top" style="font-size: 15px; z-index:1;">
    <div class="container-fluid">
        <div class="navbar-header">
        <img class="logoTop"  src="view/resources/img/LogoCentral4.png" alt="Logo">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
            <li><a style="color: green;" href=""> Olá, Maria: você possui 100 Verdinhas </a></li>
            <li class="dropdown" style="heigth:100%;">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">PAINEL USUÁRIO <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="./index.php?modulo=Admin&acao=admin"> Perfil </a></li>
                    <li><hr></li>
                    <li><a href="./index.php?modulo=Pessoas&acao=admin"> Novidades </a></li>
                    <li><a href="./index.php?modulo=Admin&acao=admin"> Marketplace </a></li>
                    <li><hr></li>
                    <li><a href="./index.php"> Log Out </a></li>
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
-->


<?php 
include "./view/menuAdmin.php"; 
?>
