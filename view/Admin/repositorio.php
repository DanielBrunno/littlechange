<?php 
$nivelpermitido = (1 || 26);
$statuspermitido = 1;

if($_COOKIE['status'] <> $statuspermitido && $_COOKIE['nivel'] <> $nivelpermitido)
?>
 <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		    <div align="center" id="myPage"> <p  style="text-align:right;">USU&Aacute;RIO: <?php echo $_COOKIE['nome']; ?></p>
            <div id="col1" style="font-size:10px; color:#C0C0C0;">
                 <b> Repositório: </b><br>
                 <!-- <a href="http://primonerd.com/view/resources/repositorio/ChatBot/Aulas_DialogFlow.zip" ><strong>Material -</strong> ChatBot DialogFlow. Crédito: Professor Barão, IFRN. </a> -->
                 
		    
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
        </div>
        
   <!--     
    <div style="text-align:center; color:#50416A; font-size:16pt;">
        <a href="#aula01" ><button type="submit" class="btn btn-primary"> Aula 01 </button></a>
        <a href="#aula02" ><button type="submit" class="btn btn-primary"> Aula 02 </button></a>         
        <a href="#aula03" ><button type="submit" class="btn btn-primary"> Aula 03 </button></a>
        <a href="#aula04" ><button type="submit" class="btn btn-primary"> Aula 04 </button></a>
        <a href="#aula05" ><button type="submit" class="btn btn-primary"> Aula 05 </button></a>
        <a href="#aula06" ><button type="submit" class="btn btn-primary"> Aula 06 </button></a>
        <a href="#aula07" ><button type="submit" class="btn btn-primary"> Aula 07 </button></a>
        <a href="#aula08" ><button type="submit" class="btn btn-primary"> Aula 08 </button></a>
        <a href="#aula09" ><button type="submit" class="btn btn-primary"> Aula 09 </button></a>
        <a href="#aula10" ><button type="submit" class="btn btn-primary"> Aula 10 </button></a>
-->
<!--
</hr><br>
<b> Repositório: </b><br>
<br>
</hr>

<a href="http://primonerd.com/view/resources/repositorio/ChatBot/Aulas_DialogFlow.zip" ><strong>Material -</strong> ChatBot DialogFlow. </a><br>
		    
    </hr>
   -->
    <!-- 
         <a href="http://primonerd.com.br/view/resources/repositorio/ChatBot/01%20-%20Aula_01.pdf" ><button type="submit" class="btn btn-primary"> Aula 01 </button></a>
         <a href="http://primonerd.com.br/view/resources/repositorio/ChatBot/02%20-%20Aula_02.pdf" ><button type="submit" class="btn btn-primary"> Aula 02 </button></a>
         <a href="http://primonerd.com.br/view/resources/repositorio/ChatBot/03%20-%20Aula_03.pdf" ><button type="submit" class="btn btn-primary"> Aula 03 </button></a>
         <a href="http://primonerd.com.br/view/resources/repositorio/ChatBot/04%20-%20Aula_04.pdf" ><button type="submit" class="btn btn-primary"> Aula 04 </button></a>
         <a href="http://primonerd.com.br/view/resources/repositorio/ChatBot/05%20-%20Aula_05.pdf" ><button type="submit" class="btn btn-primary"> Aula 05 </button></a>
         <a href="http://primonerd.com.br/view/resources/repositorio/ChatBot/06%20-%20Aula_06.pdf" ><button type="submit" class="btn btn-primary"> Aula 06 </button></a>
         <a href="http://primonerd.com.br/view/resources/repositorio/ChatBot/07%20-%20Aula_07.pdf" ><button type="submit" class="btn btn-primary"> Aula 07 </button></a>
         <a href="http://primonerd.com.br/view/resources/repositorio/ChatBot/08%20-%20Aula_08%20-%20Integrando_o_Bot_com_FaceBook_Message.pdf" ><button type="submit" class="btn btn-primary"> Aula 08 </button></a>
         <a href="http://primonerd.com.br/view/resources/repositorio/ChatBot/09%20-%20Aula_09%20-%20Usando_Cards_Responses.pdf" ><button type="submit" class="btn btn-primary"> Aula 09 </button></a>
         <a href="http://primonerd.com.br/view/resources/repositorio/ChatBot/10%20-%20Aula_10%20-%20Desenvolvendo_um_aplicativo_android.pdf" ><button type="submit" class="btn btn-primary"> Aula 10 </button></a>
    </br> <i style="font-size: 8pt;">Créditos: Professor Barão, IFRN.</i>
    </hr>
<br>
</hr>
<br>
<a href="#" ><strong>Material -</strong> Estrutura de dados não lineares. </a><br>
		    
    </hr>
         <a href="http://primonerd.com.br/view/resources/repositorio/EstruturadeDadosNaoLinear/" ><button type="submit" class="btn btn-primary"> Pasta de Implementações </button></a>
         </br> <i style="font-size: 8pt;">
Créditos: Daniel Bruno, IFRN. 
</i>
</hr>

</div>
</div> </div> </div> 
-->


       <!--     <section id="aula01">
                <iframe style="width: 100%; height: 600px; " src="http://primonerd.com/view/resources/repositorio/ChatBot/01%20-%20Aula_01.pdf" title="Aula 1"></iframe>
            </section>
            <section id="aula02">
                <iframe style="width: 100%; height: 600px; " src="http://primonerd.com/view/resources/repositorio/ChatBot/02%20-%20Aula_02.pdf" title="Aula 1"></iframe>
            </section>
            <section id="aula03">
                <iframe style="width: 100%; height: 600px; " src="http://primonerd.com/view/resources/repositorio/ChatBot/03%20-%20Aula_03.pdf" title="Aula 1"></iframe>
            </section>
            <section id="aula04">
                <iframe style="width: 100%; height: 600px; " src="http://primonerd.com/view/resources/repositorio/ChatBot/04%20-%20Aula_04.pdf" title="Aula 1"></iframe>
            </section>
            <section id="aula05">
                <iframe style="width: 100%; height: 600px; " src="http://primonerd.com/view/resources/repositorio/ChatBot/05%20-%20Aula_05.pdf" title="Aula 1"></iframe>
            </section>
            <section id="aula06">
                <iframe style="width: 100%; height: 600px; " src="http://primonerd.com/view/resources/repositorio/ChatBot/06%20-%20Aula_06.pdf" title="Aula 1"></iframe>
            </section>
            <section id="aula07">
                <iframe style="width: 100%; height: 600px; " src="http://primonerd.com/view/resources/repositorio/ChatBot/07%20-%20Aula_07.pdf" title="Aula 1"></iframe>
            </section>
            <section id="aula08">
                <iframe style="width: 100%; height: 600px; " src="http://primonerd.com/view/resources/repositorio/ChatBot/08%20-%20Aula_08.pdf" title="Aula 1"></iframe>
            </section>
            <section id="aula09">
                <iframe style="width: 100%; height: 600px; " src="http://primonerd.com/view/resources/repositorio/ChatBot/09%20-%20Aula_09.pdf" title="Aula 1"></iframe>
            </section>
            <section id="aula10">
                <iframe style="width: 100%; height: 600px; " src="http://primonerd.com/view/resources/repositorio/ChatBot/10%20-%20Aula_10.pdf" title="Aula 1"></iframe>
            </section>
            </hr><br>
            
            -->