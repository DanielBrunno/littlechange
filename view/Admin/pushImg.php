<?php

if ( isset( $_FILES[ 'file' ][ 'name' ] ) && $_FILES[ 'file' ][ 'error' ] == 0 ) {

    $arquivo_tmp = $_FILES[ 'file' ][ 'tmp_name' ];
    $nome = $_FILES[ 'file' ][ 'name' ];
    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
    $extensao = strtolower ( $extensao );
 
    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {

        $novoNome = uniqid ( time () ) . '.' . $extensao;
        $destino = 'view/resources/img/Banner/' . $novoNome;
        if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
            echo '<strong>' . $destino . '</strong><br />';
            echo' <pre style="text-align:center;"> <h3 style="background: #780D12; color: #FFF; text-size: 20px; text-align: center; padding: 10px; border-radius: 5px;"> <strong style="padding-bottom: 5px;"> Assim que ficará sua imagem na tela principal.</strong></h3><hr> </pre> ';
            echo ' <hr>
                <!-- CARROCEL -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active"> <img src="' .$destino. '" style="width:100%" alt="ClassRoom" class="imgCarrocel" ></div>
                        <div class="item"> <img src="' .$destino. '" style="width:100%" alt="ClassRoom" class="imgCarrocel" ></div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Voltar</span> </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Avan&ccedil;ar</span> </a>
                    </div>
                </div>
                <!-- FIM DO CARROCEL -->
            ';
            
            echo '  <form role="form" action="" method="POST" enctype="multipart/form-data">
                		<div class="form-group">
                            <label for="exampleInputEmail1">  </label>
                			<input type="hidden" name="arquivo" value="'. $novoNome .'" readonly  />
                			<input type="hidden" name="pasta" value="'. $destino .'" readonly  />
                        </div>    
                		<div class="checkbox">
                            <label> <input type="checkbox" name="status" value="1" required/> Confirmar </label>
                        </div>
                	    
                	    <button type="submit" class="btn btn-primary" style="background-color:green;"> Publicar </button>
                    </form>
            	</div> </div> </div> <hr>   ';

        } else echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de publicar.<br />';
        
    } else echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';

    
} else echo '<h6 style="color: #999999;"> Enviar um novo arquivo!</h6>';

?>

<br><hr>
<form role="form" action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
	    <label for="exampleInputFile"> Selecione o Banner: </label>
        <input type="file" name="file" class="form-control-file" />
		<p class="help-block"> Suporta arquivo com tamanho máximo de 2Mb . </p>
	</div>
	<button type="submit" class="btn btn-primary"> Carregar Imagem </button>
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
