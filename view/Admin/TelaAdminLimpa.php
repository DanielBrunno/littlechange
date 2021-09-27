 <?php

/**
 * Description of Perfil View
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
      <br><hr><?php include "includes/horaUsuarioTop.php"; ?>
      
      <!-- SubHeader =============================================== -->
      <section id="corpoView" class="parallax-window" id="short" data-parallax="scroll">
        <div class="col-md-12">	
          <!-- SEU CÓDIGO AQUI -->
        </div>
      </section><!-- End section -->
      <hr><br>
    </div> 
    <!-- CORPO DA VIEW - COL-MD-12-->
  </div> <!-- CORPO DA VIEW - ROW -->
</div>  <!-- CORPO DA VIEW - ROW -->
