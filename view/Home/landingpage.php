<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title><?=$texto['titulo_site_landing'];?></title>
  <meta name="robots" content="index, fallow" />
  <link rel="canonical" href="<?=$site;?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <meta name="keywords" content="<?=$texto['keywords_landing'];?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="author" content="<?=$texto['autor_site_landing'];?>">
  <meta property="og:site_name" content="<?=$texto['nome_site_landing'];?>"/>
  <meta property="og:url" content="<?=$site;?>"/>
  <meta name="description" content="<?=$texto['descricao_site_landing'];?>" />
  <meta property="og:description" content="<?=$texto['descricao_site_landing'];?>" />

  <!-- Favicons-->
  <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">

  <!-- GOOGLE WEB FONT -->
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>

  <!-- BASE CSS -->
  <link href="<?=$site;?>css/base.css" rel="stylesheet">
  <link href="<?=$site;?>css/suportewats.css" rel="stylesheet">
  <link href="<?= $site; ?>notificacao/light-theme.min.css" rel="stylesheet">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.2/css/all.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato'><link rel="stylesheet" href="./style.css">

    <!-- INCLUDE JQUARY -->
    <script src="<?=$site;?>js/jquery-2.2.4.min.js"></script>

    <link href="<?= $site; ?>css/x0popup-master/dist/x0popup.min.css" rel="stylesheet">
    <script src="<?= $site; ?>css/x0popup-master/dist/x0popup.min.js"></script>
  </head>

  <body>
  <hr>
  <style>
  @media only screen and (max-width: 600px) {
    #espCel{ padding-top: 30px; }
	}
  
  </style>
  <div id="espCel"></div>
  <!-- SubHeader =============================================== -->
  <section class="parallax-window" id="short" data-parallax="scroll">
   <!-- <div id="subheader"><img src="../view/resources/img/LogoCentral4.png" width="100%" alt=""></div> --><!-- End subheader -->
   <div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
		
			<div class="main_title" style="text-align:center; color: #32CD32;">
				<h3 class="nomargin_top" style="color:#32CD32;">Deseja mudar seus hábitos? Ou empreender conosco<strong>?</strong></h3> 
			</div>
			<h2 style="text-align: center;">Login</h2>
			<form role="form">
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						Email:
					</label>
					<input type="email" class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
						Password:
					</label>
					<input type="password" class="form-control" id="exampleInputPassword1" />
				</div>
				<div style="text-align:right;">
				<button type="submit" class="btn btn-primary">
					Entrar
				</button>
				</div>
			</form>
			<div class="form-group">
				<label for="exampleInputFile" style="text-align:right;">
					<a class="btn" href="#">Cadastre-se »</a>
				</label>
			</div>
		</div>
		<div class="col-md-4"> </div>
</div>
</section><!-- End section -->
<!-- End SubHeader ============================================ -->
<!-- Content ================================================== -->
</div>
<!--<div id="pass-info" class="clearfix"></div>  -->

</div><!-- End row  -->
</div><!-- End container  -->
<!-- End Content =============================================== -->
<!-- COMMON SCRIPTS -->

<script src="<?=$site;?>js/common_scripts_min.js"></script>
<script src="<?=$site;?>js/functions.js"></script>
<script src="<?=$site;?>assets/validate.js"></script>
<script src="<?=$site; ?>notificacao/growl-notification.min.js"></script> 
<script src="<?=$site;?>assets/sweetalert.min.js"></script>
<script src="<?=$site;?>js/jquery.mask.js"></script>
<script src="<?=$site;?>js/suportewats.js"></script>
<!-- partial -->
</body>
</html>