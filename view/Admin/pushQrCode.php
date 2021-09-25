<?php

if ( isset( $_FILES[ 'file' ][ 'name' ] ) && $_FILES[ 'file' ][ 'error' ] == 0 ) {

    $arquivo_tmp = $_FILES[ 'file' ][ 'tmp_name' ];
    $nome = $_FILES[ 'file' ][ 'name' ];
    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
    $extensao = strtolower ( $extensao );
 
    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {

        $novoNome = uniqid ( time () ) . '.' . $extensao;
        $destino = 'view/resources/img/Noticias/' . $novoNome;
        if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
            echo '<strong>' . $destino . '</strong><br />';
            echo "<img src='" .$destino. "' style='width:30%' />";
            echo '

            <form role="form" action="" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="exampleInputEmail1">
						Título
					</label>
					<input type="text" name="titulo" class="form-control" id="titulo" required />
				</div>
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						Descrição
					</label>
					<textarea class="form-control" name="descricao" rows="4" placeholder="Digite uma breve descrição"></textarea>
				</div>
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						Fonte
					</label>
					<input type="text" name="fonte" class="form-control" id="fonte" />
					<input type="hidden" name="arquivo" value="'. $novoNome .'" readonly  />
					<input type="hidden" name="pasta" value="'. $destino .'" readonly  />
					
				</div>    
					<div class="checkbox">
					<label>
						<input type="checkbox" name="status" value="1" required/> Confirmar
					</label>
				</div>
	            <button type="submit" class="btn btn-primary" style="background-color:green;"> Publicar </button>
            </form>
	    </div> </div> </div> <hr>
	    ';
        }
        else {
            echo "<img src='" .$destino. "' style='width:30%' />";
            echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
        }
    }
    else echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
}
else echo '<h6 style="color: #999999;">CADASTRAR ESCOLA!</h6><h1>EM CONSTRUÇÃO!</h1>';

?>
<style>
    input{width: 100%;}
</style>
            <br><hr>
<form role="form" action="" method="POST" enctype="multipart/form-data">
    <div class="form-group"><label for="exampleInputEmail1">Nome da Escola:</label></div>
    <input type="text" name="nome" placeolder="INSERIR NOME DA ESCOLA" required  /><hr>
    <div class="form-group">
	    <label for="exampleInputFile"> Selecione o QRCode: </label>
        <input type="file" name="file" class="form-control-file" />
		<p class="help-block"> Suporta arquivo com tamanho máximo de 4Mb . </p>
	</div>
	<!-- <button type="submit" class="btn btn-primary"> Carregar QRCode </button> -->
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