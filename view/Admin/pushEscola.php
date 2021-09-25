<?php
error_reporting(0); 
if(strlen(isset($data['nome'])) > 16){ 
    echo '
        <pre style="text-align:center; font-size:18pt;"> A ESCOLA <b style="color:#191970; font-size:20pt;"> ID: '.$data['id'] .'</b> - '.$data['nome'] . '</pre>
        <hr>
        <form style="text-align: center;" role="form" action="./index.php?modulo=Enderecos&acao=push" method="POST" enctype="multipart/form-data" >

            PARA CADASTRAR O ENDEREÇO, CLIQUE EM CONTINUAR:
            <input type="hidden" name="idVindoFormEscola" value="'.$data["id"].'" required  />
            <hr>
            <button type="submit" class="btn btn-primary"> CONTINUAR </button>
        </form>
        <hr>
    '; 
    
}

else if(isset($data[0]['id']) != null && (isset($data[0]['id']) != "false")){
    $_POST['Nnome'] = $data[0]['id'];
    $_POST['nId'] = $data[0]['nome'];
    header('Location: ./index.php?modulo=Enderecos&acao=push');
    exit;
} 
else{
        echo '
            <br><hr>
            <form role="form" action="" method="POST" enctype="multipart/form-data">
                <div class="form-group"><label for="exampleInputEmail1">Nome da Escola:</label></div>
                <input type="text" name="nome" placeolder="INSERIR NOME DA ESCOLA" required  /><hr>
            	<button type="submit" class="btn btn-primary"> Carregar Dados </button>
            </form>
            <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                  </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right" >
                    <li class="divider"> </li>
                    <li style="background-color: #FFDEAD;"><a style="backgroung-color: #FFDEAD;"href="./index.php?modulo=Admin&acao=admin#">VOLTAR</a></li>            
                    <li class="divider"> </li>
                </ul>
            </div>
            </div>
        ';
}

?>
<style> input{width: 100%;} </style>