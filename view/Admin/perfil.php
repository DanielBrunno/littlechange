<?php

/**
 * Description of Perfil Usuário
 *
 * @author Daniel Brunno
 */
?>
<style> 
  body {
    font-family: "Noto Sans JP", sans-serif;
    background-color: #F0FFF0;
  }
  li, a, .cards, .card { border-radius: 8px; }
  #corpoView{ z-index: -2; }
  @media only screen and (max-width: 600px) { #espCel{ padding-top: 30px; } }
</style>
<div class="container-fluid">
	<div class="row">
    <!-- CORPO DA VIEW -->
    <div class="col-md-12" style="z-index:-2;">
    <br><hr>
      <?php include "includes/horaUsuarioTop.php"; ?>
        <!-- SubHeader =============================================== -->
        <section id="corpoView" class="parallax-window" id="short" data-parallax="scroll">
          <div class="col-md-12">	
            <h2 style="text-align: center; font-size:12px; color:#C0C0C0; z-index:-1;">PERFIL</h2><hr>
            <div class="col-md-12">  <?php include 'includes/FormPerfil.php'; ?><hr> </div>
          </div>
      </section><!-- End section -->
      <hr>
    </div> 
    <!-- CORPO DA VIEW - COL-MD-12-->
  </div> <!-- CORPO DA VIEW - ROW -->
</div>  <!-- CORPO DA VIEW - ROW -->
<br>