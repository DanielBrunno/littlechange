<hr>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		    <div align="center" id="myPage"> <!-- <p  style="text-align:right;"> USU&Aacute;RIO: <?php // echo isset($_COOKIE['nome']); ?></p> -->
            <div id="col1" style="font-size:12px; color:#C0C0C0;">
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
        </div> <hr>
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
 </style>

  <!-- SubHeader =============================================== -->
  <section class="parallax-window" id="short" data-parallax="scroll">
  
   <div class="row">

		<div class="col-md-12">
		
			
		<style> li, a, .cards, .card { border-radius: 8px;} </style>
		<ul class="cards">
      <li>
        <a href="" class="card">
          <img src="https://sustentavel.com.br/wp-content/uploads/2019/12/Embalagens-sustent%C3%A1veis-1-810x494.jpg" class="card__image" alt="" />
          <div class="card__overlay">
            <div class="card__header">
              <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                <path />
              </svg>
              <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt="" />
              <div class="card__header-text">
                <h3 class="card__title">Jessica Parker</h3>
                <span class="card__status">1 hour ago</span>
              </div>
            </div>
            <p class="card__description">Embalegens Sustentáveis</p>
          </div>
        </a>
      </li>
      <li>
        <a href="" class="card">
          <img src="https://sustentavel.com.br/wp-content/uploads/2018/07/pl%C3%A1sticos-1-810x457.jpg" class="card__image" alt="" />
          <div class="card__overlay">
            <div class="card__header">
              <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                <path />
              </svg>
              <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />
              <div class="card__header-text">
                <h3 class="card__title">kim Cattrall</h3>
                <span class="card__status">1 hour ago</span>
              </div>
            </div>
            <p class="card__description">Produtos biodegradáveis</p>
          </div>
        </a>
      </li>
      <li>
        <a href="" class="card">
          <img src="https://sustentavel.com.br/wp-content/uploads/2019/11/Produtos-biodegrad%C3%A1veis-1-810x431.jpg" class="card__image" alt="" />
          <div class="card__overlay">
            <div class="card__header">
              <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                <path />
              </svg>
              <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt="" />
              <div class="card__header-text">
                <h3 class="card__title">Jessica</h3>
                <span class="card__status">1 hour ago</span>
              </div>
            </div>
            <p class="card__description">Embalegens Sustentáveis</p>
          </div>
        </a>
      </li>
  <li>
    <a href="" class="card">
      <img src="https://sustentavel.com.br/wp-content/uploads/2018/07/lustres.jpg" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
            <path />
          </svg>
          <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Jessica </h3>
         <!--   <span class="card__tagline">Nem todo plástico é reciclável: conheça... </span> -->
            <span class="card__status">1 hour ago</span>
          </div>
        </div>
        <p class="card__description">Nem todo plástico é reciclável: conheça... Qual o material mais presente no dia a dia? Exato, o plástico.</p>
      </div>
    </a>
  </li>
</ul>


		</div>
</div>
</section><!-- End section -->
<!-- End SubHeader ============================================ -->
<!-- Content ================================================== -->
</div>
<!--<div id="pass-info" class="clearfix"></div>  -->

</div><!-- End row  -->
</div><!-- End container  -->
<!-- End Content =============================================== -->
<hr>

</div> </div> </div> <hr>