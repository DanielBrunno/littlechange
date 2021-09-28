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
            <h2 style="text-align: center; font-size:12px; color:#C0C0C0; z-index:-1;">SUAS COMPRAS</h2><hr>

<style> 
		:root {
  --surface-color: #fff;
  --curve: 40;
}

* {
  box-sizing: border-box;
}

body {
  font-family: "Noto Sans JP", sans-serif;
  background-color: #fef8f8;
}

.cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
  margin: 4rem 5vw;
  padding: 0;
  list-style-type: none;
}

.card {
  position: relative;
  display: block;
  height: 100%;
  border-radius: calc(var(--curve) * 1px);
  overflow: hidden;
  text-decoration: none;
}

.card__image {
  width: 100%;
  height: auto;
}

.card__overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;
  border-radius: calc(var(--curve) * 1px);
  background-color: var(--surface-color);
  transform: translateY(100%);
  transition: 0.2s ease-in-out;
}

.card:hover .card__overlay {
  transform: translateY(0);
}

.card__header {
  position: relative;
  display: flex;
  align-items: center;
  gap: 2em;
  padding: 2em;
  border-radius: calc(var(--curve) * 1px) 0 0 0;
  background-color: var(--surface-color);
  transform: translateY(-100%);
  transition: 0.2s ease-in-out;
}

.card__arc {
  width: 80px;
  height: 80px;
  position: absolute;
  bottom: 100%;
  right: 0;
  z-index: 1;
}

.card__arc path {
  fill: var(--surface-color);
  d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
}

.card:hover .card__header {
  transform: translateY(0);
}

.card__thumb {
  flex-shrink: 0;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}

.card__title {
  font-size: 1em;
  margin: 0 0 0.3em;
  color: #6a515e;
}

.card__tagline {
  display: block;
  margin: 1em 0;
  font-family: "MockFlowFont";
  font-size: 0.8em;
  color: #d7bdca;
}

.card__status {
  font-size: 0.8em;
  color: #d7bdca;
}

.card__description {
  padding: 0 2em 2em;
  margin: 0;
  color: #d7bdca;
  font-family: "MockFlowFont";
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
}
@media only screen and (max-width: 600px) { #espCel{ padding-top: 30px; } }

li, a, .cards, .card { border-radius: 8px;} </style>
<br>
<hr>
<div style="z-index:-1;">
    

<div id="col1" style="font-size:12px; color:#C0C0C0; text-align: center; z-index:-1;">	
			<h2 style="text-align: center;">Suas Compras</h2>

                <script LANGUAGE="JavaScript">
                    var now = new Date();
                    var mName = now.getMonth() +1 ;
                    var dName = now.getDay() +1;
                	var dayNr = now.getDate();
                	var yearNr=now.getYear();
                	if(dName==1) {Day = "Domingo"; }
                	if(dName==2) {Day = "Segunda-feira"; }
                	if(dName==3) {Day = "Ter&ccedil;a-feira"; }
                	if(dName==4) {Day = "Quarta-feira"; }
                	if(dName==5) {Day = "Quinta-feira"; }	
                	if(dName==6) {Day = "Sexta-feira"; }
                	if(dName==7) {Day = "S&aacute;bado"; }
                	if(mName==1){Month = "Janeiro"; }
                	if(mName==2){Month = "Fevereiro"; }
                	if(mName==3){Month = "Mar&ccedil;o"; }
                	if(mName==4){Month = "Abril"; }
                	if(mName==5){Month = "Maio"; }
                	if(mName==6){Month = "Junho"; }
                	if(mName==7){Month = "Julho"; }
                	if(mName==8){Month = "Agosto"; }
                	if(mName==9){Month = "Setembro"; }
                	if(mName==10){Month = "Outubro"; }
                	if(mName==11){Month = "Novembro"; }
                	if(mName==12){Month = "Dezembro"; }
                	if(yearNr < 2000) {Year = 1900 + yearNr; }
                	else {Year = yearNr; }
                    var todaysDate =( " " + Day + ", " + dayNr + " de " + Month + " de " + Year );
                    document.write('  '+todaysDate);
                </script>
  </div>
<ul class="cards" style="z-index:-1;">
<!--       
  <li  style="z-index:-1;">
    <a href="" class="card">
      <img src="./view/resources/img/embalagembio1.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
            <path />
          </svg>      
          <div class="card__header-text">        
          <label for="vehicle1"> 1 - Embalagens Descartáveis c/50 Unid. </label><br>
            <span class="card__status" style="color: green;"> <strong>R$ 83,00</strong></span>
            <span class="card__status" style="color: #191970;">Data da Compra 30.08.2021</span>
          </div>
        </div>
      </div>
    </a>
  </li>
-->
  <li  style="z-index:-1;">
    <a href="" class="card">
      <img src="./view/resources/img/camisetaOrg1.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
            <path />
          </svg>      
          <div class="card__header-text">        
          <label for="vehicle1">1 - Blusa Eco Tam P. </label><br>
            <span class="card__status" style="color: green;"><strong>R$ 112,00 </strong></span>
            <span class="card__status" style="color: #191970;"> - Data da Compra 27.09.2021</span>
          </div>
        </div>
      </div>
    </a>
  </li>
    
 
</ul>

 <hr>
 </div>
 <br>
        </div>
      </section><!-- End section -->
      <hr>
    </div> 
    <!-- CORPO DA VIEW - COL-MD-12-->
  </div> <!-- CORPO DA VIEW - ROW -->
</div>  <!-- CORPO DA VIEW - ROW -->
<br>