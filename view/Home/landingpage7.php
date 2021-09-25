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
  <link rel="shortcut icon" href="<?= $site; ?>img/favicon.png" type="image/x-icon">

  <!-- GOOGLE WEB FONT -->
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>

  <!-- BASE CSS -->
  <link href="<?=$site;?>css/base.css" rel="stylesheet">
  <link href="<?=$site;?>css/suportewats.css" rel="stylesheet">
  <link href="<?= $site; ?>notificacao/light-theme.min.css" rel="stylesheet">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.2/css/all.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato'><link rel="stylesheet" href="./style.css">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- INCLUDE JQUARY -->
    <script src="<?=$site;?>js/jquery-2.2.4.min.js"></script>

    <link href="<?= $site; ?>css/x0popup-master/dist/x0popup.min.css" rel="stylesheet">
    <script src="<?= $site; ?>css/x0popup-master/dist/x0popup.min.js"></script>
  </head>

  <body>
<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
  <![endif]-->
  <div id="preloader" style="background-color: #4682B4;">
    <div class="sk-spinner sk-spinner-wave" id="status">
      <div class="sk-rect1"></div>
      <div class="sk-rect2"></div>
      <div class="sk-rect3"></div>
    </div>
  </div><!-- End Preload -->

  <!-- Header ================================================== -->
  <!-- <header> -->
    <div class="container-fluid" style="position: relative; position: -webkit-sticky; position: sticky; top: 0; z-index: 2; background-color: #DCDCDC; opacity: 0.2;">
      <div class="row" style="padding-bottom: 8px;">
        <div class="col--md-4 col-sm-4 col-xs-4">
         <a href="<?=$site;?>" id="logo">
          <img src="<?= $site; ?>img/home.png" height="30" width="40" alt="" data-retina="true" class="hidden-xs" style="padding-top:5px">
          <img src="<?= $site; ?>img/home.png" height="30" width="40" alt="" data-retina="true" class="hidden-lg hidden-md hidden-sm">
        </a>
        </div>
         <a href="#0" data-toggle="modal" data-target="#login_2" style="float: right;margin-top:10px; background-color: #B0C4DE; margin-right:10px; color:#000; padding:5px 12px 5px 12px; border-radius: 4px; text-size: 16pt; filter: contrast(200%);"><b>Login</b></a>
      </div><!-- End row -->
    </div><!-- End container -->
  <!-- </header> -->
  <!-- End Header =============================================== -->

  <!-- SubHeader =============================================== -->
  <section class="parallax-window" id="short" data-parallax="scroll" data-natural-width="1400" data-natural-height="350">
    <div id="subheader" Style="   height: 350px; background-position: center; background-repeat: no-repeat; opacity: 0.2; filter: grayscale(80%); 
  background-size: cover; background-repeat: repeat-y; background-image: url('https://startupnatal.com.br/escolasEstaduais/view/resources/img/mtitecnologia-ciencia-de-dados-1.jpg');">
      <div id="sub_content">
       <h1></h1>
       <!-- <a target="_blank" style="color: #ffffff;" href="<?=$site;?>Demo"><button class="btn" style="font-size: 25px; background-color: #1bc138; border-radius: 50px; width: 250px; height: 50px;">DEMONSTRAÇÃO</button></a> -->
       <p></p>
     </div><!-- End sub_content -->
   </div><!-- End subheader -->
  <div id="count" class="hidden-xs">
    <ul>
      <li><span></span> </li>
      
    </ul>
  </div>
</section><!-- End section -->
<!-- End SubHeader ============================================ -->
<!-- Content ================================================== -->
<div id="sobre" class="container">
<hr class="more_margin" style="margin:20px;">
<div class="main_title">
  <h2 class="nomargin_top" style="color:#191970;">Plataforma de análise de dados <br />Integrada com <strong>WhatsApp.</strong></h2>
  <br />
  <p>
    Tenha seu canal e otimize sua empresa.
  </p>
</div>
<div class="row">
  <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
    <div class="feature">
      <i class="icon_mobile"></i>
      <h3 style="color: #191970;"><span style="color: #4682B4;">Suporte</span> em Smartphones</h3>
      <p>Nosso sistema roda em diversos dispositivos.</p>
   </div>
 </div>
 <div class="col-md-6 wow fadeIn" data-wow-delay="0.4s">
  <div class="feature">
          <i class="icon-chart-outline"></i>
      <h3 style="color: #191970;"><span style="color: #4682B4;">Estatísticas</span> do seu negócio</h3>
      <p>Gráficos sobre relatórios e ambiente agradável!</p>
 </div>
</div>
</div><!-- End row -->
<div class="row">
  <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
    <div class="feature">
       <i class="icon-print-2"></i>
      <h3 style="color: #191970;"><span style="color: #4682B4;">Impressão</span> de Relatórios.</h3>
      <p>Imprima relatórios e agilize suas análises.</p>
    </div>
  </div>
  <div class="col-md-6 wow fadeIn" data-wow-delay="0.6s">
    <div class="feature">
 <i class="icon-arrows-cw-2"></i>
      <h3 style="color: #191970;"><span style="color: #4682B4;">Atualizações</span> constantes.</h3>
      <p>Buscamos evoluir o sistema dia-a-dia.</p>
    </div>
  </div>
</div>
<!-- End row -->
</div><!-- End container -->
</div>
<!--<div id="pass-info" class="clearfix"></div>  -->

</div><!-- End row  -->
</div><!-- End container  -->
<!-- End Content =============================================== -->

<div class="layer"></div><!-- Mobile menu overlay mask -->

<!-- Login modal -->   
<div style="margin-top: 50px;" class="modal fade" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
  <div class="modal-dialog">
   <div method="post" class="modal-content modal-popup" style="background-color: #87CEEB;">
    <!-- <a style="cursor: pointer;" id="fecharmodallogin" class="close-link"><i class="icon_close_alt2"></i>X</a> -->
    <a style="cursor: pointer;" id="fecharmodallogin" class="close-link">X</a>

    <form class="popup-form" id="UsuarioLogin" method="POST" action="../../index.php?modulo=Validacao&acao=login">
         <div class="login_icon">LOGIN</div>
         <!--   <div class="login_icon"><i class="icon_lock_alt"></i></div>
                <input name="user" type="email" autocomplete="off" class="form-control form-white" placeholder="Login"> -->
         <input name="login" type="text" autocomplete="off" class="form-control form-white" placeholder="Usu&aacute;rio" required>
         <input name="senha" type="password" autocomplete="off" class="form-control form-white" placeholder="Senha" required>
         <div class="text-left">
          <a target="_blank" href="https://api.whatsapp.com/send?phone=<?=$texto['telefoneAdministracaoTecnica'];?>">Esqueceu a senha?</a>
        </div>
        <button class="btn btn-submit" style="color: #191970;">Entrar</button>
        <small style="color: #ffffff" id="resultadoLogin"></small>
  </form>
  
  <!--  <form class="popup-form" id="UsuarioLogin" method="POST" action="index.php?modulo=Validacao&acao=login">
     <div class="login_icon">LOGIN</div>
     <input name="login" type="email" autocomplete="off" class="form-control form-white" placeholder="Usu&aacute;rio" required>
     <input name="senha" type="password" autocomplete="off" class="form-control form-white" placeholder="Senha" required>
     <div class="text-left">
      <a target="_blank" href="https://api.whatsapp.com/send?phone=<?=$texto['telefoneAdministracaoTecnica'];?>">Esqueceu a senha?</a>
    </div>
    <button id="Entraruser" class="btn btn-submit" style="color: #191970;">Entrar</button>
    <small style="color: #ffffff" id="resultadoLogin"></small>
  </form>
  -->

  <script type="text/javascript">
    $(document).ready(function(){
      $('#fecharmodallogin').click(function(){
        $("#login_2").modal('hide');
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('#Entraruser').click(function(){
        $('#Entraruser').prop('disabled', true);
        $('#Entraruser').html('Fazendo Login...');

        $.ajax({
          url: '<?=$site?>controlers/login_User.php',
          method: 'post',
          data: $('#UsuarioLogin').serialize(),
          success: function(data){
            $('#Entraruser').prop('disabled', false);
            $('#Entraruser').html('Entrar');
            $('#resultadoLogin').html(data);
          }
        });

      });
    });
  </script>
</div>
</div>
</div><!-- End modal -->   

<!-- COMMON SCRIPTS -->

<script src="<?=$site;?>js/common_scripts_min.js"></script>
<script src="<?=$site;?>js/functions.js"></script>
<script src="<?=$site;?>assets/validate.js"></script>
<script src="<?=$site; ?>notificacao/growl-notification.min.js"></script> 
<script src="<?=$site;?>assets/sweetalert.min.js"></script>
<script src="<?=$site;?>js/jquery.mask.js"></script>
<script src="<?=$site;?>js/suportewats.js"></script>

<script type="text/javascript">
  // LOGIN
  $(document).ready(function(){
   $("#cadastrarUser").click(function(){
    //formCadastro
    $(this).html('<i class="icon-spin5 animate-spin"></i> AGUARDE...');
    $(this).prop('disabled', true);

    $.ajax({
      url: '<?=$site;?>controlers/processaCadastroUser.php',
      method: 'post',
      data: $('#formCadastro').serialize(),
      success: function(data){
        if(data == "erro1"){
          x0p('Opsss', 
            'Preencha todos os campos!',
            'error', false);
          $('#cadastrarUser').html('Cadastrar Minha Loja');
          $('#cadastrarUser').prop('disabled', false);
        }else if(data == "erro2"){
          x0p('Opsss', 
            'O E-mail informado e inválido!',
            'error', false);
          $('#cadastrarUser').html('Cadastrar Minha Loja');
          $('#cadastrarUser').prop('disabled', false);
        }else if(data == "erro3"){
          x0p('Opsss', 
            'A senha informada deve ter no mínimo 8 caracteres!',
            'error', false);
          $('#cadastrarUser').html('Cadastrar Minha Loja');
          $('#cadastrarUser').prop('disabled', false);
        }else if(data == "erro4"){
          x0p('Opsss', 
            'As senhas não coincidem!',
            'error', false);
          $('#cadastrarUser').html('Cadastrar Minha Loja');
          $('#cadastrarUser').prop('disabled', false);
        }else if(data == "erro5"){
          x0p('Opsss', 
            'Esse link não está disponível!',
            'error', false);
          $('#cadastrarUser').html('Cadastrar Minha Loja');
          $('#cadastrarUser').prop('disabled', false);
        }else if(data == "erro6"){
          x0p('Opsss', 
            'Já existe uma conta com esses dados!',
            'error', false);
          $('#cadastrarUser').html('Cadastrar Minha Loja');
          $('#cadastrarUser').prop('disabled', false);
        }else if(data == "erro0"){
          x0p('Opsss', 
            'OCORREU UM ERRO AO CADASTRAR!',
            'error', false);
          $('#cadastrarUser').html('Cadastrar Minha Loja');
          $('#cadastrarUser').prop('disabled', false);
        }else{
         x0p('Sucesso!', 
          'Agora você pode fazer login.', 
          'ok', false);
         $('#cadastrarUser').html('Cadastrar Minha Loja');
         $('#cadastrarUser').prop('disabled', false);
       }
       
     }
   });

  }); 
 });
</script>


<script type="text/javascript">
  $(document).ready(function(){
    $('#verificarDisponibilidadeLink').click(function(){
      var linkuser = $('#nome_empresa_link').val();

      if(linkuser == ''){
        x0p('Opss...', 
          'Antes preencha o campo!',
          'error', false);
      }else{

        $.ajax({
          url: '<?=$site?>controlers/processaverificadisponibilidadelink.php',
          method: 'post',
          data: {'linkuser' : linkuser},
          success: function(data){

            if(data == 'true'){
              x0p('Que pena! 😔', 
                'Esse link não está disponível!',
                'error', false);
            }else{
              $('#nome_empresa_link').val(data);
              x0p('Muito bom! 😍', 
                '<?=$site;?>'+data+' está disponível!', 
                'ok', false);
            }          
          }
        });

      }
    });
  });
</script>

<script language="JavaScript">
  window.onload = function() {
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
    document.addEventListener("keydown", function(e) {
            //document.onkeydown = function(e) {
              // "I" key
              if (e.ctrlKey && e.shiftKey && e.keyCode == 73) disabledEvent(e);
              // "J" key
              if (e.ctrlKey && e.shiftKey && e.keyCode == 74) disabledEvent(e);
              // "S" key + macOS
              if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey))  disabledEvent(e);
              // "U" key
              if (e.ctrlKey && e.keyCode == 85) disabledEvent(e);
              // "F12" key
              if (event.keyCode == 123) disabledEvent(e);
            }, false);
    function disabledEvent(e){
        if (e.stopPropagation) e.stopPropagation();
        else if (window.event) window.event.cancelBubble = true;
        e.preventDefault();
      return false;
    }
  };
</script>

<script type="text/javascript"> 

  $(document).ready(function () {

    $.getJSON('<?=$site;?>estados_cidades.json', function (data) {

      var items = [];
      var options = '<option value="<?=(!empty($end_uf_empresa) ? $end_uf_empresa : "");?>"><?=(!empty($end_uf_empresa) ? $end_uf_empresa : "Escolha um estado");?></option>';  

      $.each(data, function (key, val) { options += '<option value="' + val.sigla + '">' + val.sigla + '</option>'; });
      $("#estados").html(options);        

      $("#estados").change(function () {        

        var options_cidades = '<option value="<?=(!empty($cidade_empresa) ? $cidade_empresa : "");?>"><?=(!empty($cidade_empresa) ? $cidade_empresa : "Escolha uma Cidade");?></option>';
        var str = "";         

        $("#estados option:selected").each(function () { str += $(this).text(); });

        $.each(data, function (key, val) {
          if(val.sigla == str) {              
            $.each(val.cidades, function (key_city, val_city) {
              options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
            });             
          }
        });

        $("#cidades").html(options_cidades);

      }).change();    

    });

  });

</script>

<script>

  $('#dinheiro').mask('#.##0,00', {reverse: true});
  $('.telefone').mask('(00) 0 0000-0000');
  $('.estado').mask('AA');
  $('.cpf').mask('000-000.000-00');
  $('.cnpj').mask('00.000.000/0000-00');
  $('.rg').mask('00.000.000-0');
  $('.cep').mask('00000-000');
  $('.dataNascimento').mask('00/00/0000');
  $('.placaCarro').mask('AAA-0000');
  $('.horasMinutos').mask('00:00');
  $('.cartaoCredito').mask('0000 0000 0000 0000');
  $('.numero').mask('#########0');
  $('.descontoporcentagem').mask('##0');
</script>

<div id='whatsapp-chat' class='hide'>
  <div class='header-chat'>
    <div class='head-home'>
      <h3 style="color: #ffffff;">    
        <?php
            $hr = date(" H ");
            if($hr >= 12 && $hr<18) $resp = "Boa tarde!";
            else if ($hr >= 0 && $hr <12 ) $resp = "Bom dia!";
            else $resp = "Boa noite!";
            echo "$resp";
        ?>
     </h3>
     <p>Clique em nosso atendente abaixo para conversar no WhatsApp ou envie um email para <?=$texto['emailSuporteSite'];?></p></div>
     <div class='get-new hide'><div id='get-label'></div><div id='get-nama'></div></div></div>
     <div class='home-chat'>
     <!-- Info Contact Start -->
        <a class='informasi' href='javascript:void' title='Chat Whatsapp'>
            <div class='info-avatar'><img src='<?=$site?>img/supportmale.png'/></div>
            <div class='info-chat'>
                <span class='chat-label'>Suporte Técnico</span>
                <span class='chat-nama'>Vamos iniciar o atendimento?</span>
            </div><span class='my-number'><?=$texto['telefoneAdministracaoTecnica'];?></span>
        </a>
        <!-- Info Contact End -->
        <!-- Info Contact Start -->
        <!-- Info Contact End -->
        <div class='blanter-msg'><b>HORÁRIOS: </b> de <i> das 9:00 às 12:00h.</i></div></div>
        <div class='start-chat hide'>
            <div class='first-msg'><span>Olá, Como posso te ajudar?</span></div>
            <div class='blanter-msg'>
            <input type="text" id='chat-input2' maxlength='120' class="form-control" placeholder='Escreva uma pergunta...' />
            <a href='javascript:void;' id='send-it'><i class="fa fa-paper-plane" aria-hidden="true"></i></a></div>
        </div>
        <div id='get-number'></div><a class='close-chat' href='javascript:void'>×</a>
</div>
<a class='blantershow-chat' href='javascript:void' title='Show Chat'><i class='fab fa-whatsapp'></i>Precisa de ajuda?</a>
<!-- partial -->
</body>
</html>