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

<!--
<link rel="icon" href="#" type="image/x-icon" />
-->
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
<style>
.logoTop {
  border-radius: 8px;
  width:13%;
}
</style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" style="padding: 10px; width:100%; background-image:url('./view/resources/img/fundo.jpeg'); font-size:16pt;">

<!-- INÍCIO DO MENU SUPERIOR -->
<nav class="navbar navbar-default navbar-fixed-top" style="font-size: 15px;">
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
                <li class="dropdown" style="heigth:100%;">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">ENTRAR<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                         <form style="width:97%; margin:5px; "  method="POST" action="index.php?modulo=Validacao&acao=login">
                            <input style="width:100%; margin-top:5px; border-radius:3px;height:40px; " type="text" name="login" placeholder="Usu&aacute;rio" required> 
                            <input style="width:100%; margin-top:5px; border-radius:3px;height:40px;" type="password" name="senha" placeholder="Senha" required><br>
                            <li style="test-align:right;"><input style="height:30px;margin-top:5px; padding: 7px 30px 7px 30px; color:#FFFFFF; background:#006400; border:1px; border-radius:5px; border-color:#008000; " type="submit" name="Entrar" value="ENTRAR" /> </li>
                        </form>    
                    <li><hr></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>