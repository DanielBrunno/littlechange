<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		    <div align="center" id="myPage"> <p  style="text-align:right;">USU&Aacute;RIO: <?php echo $_COOKIE['nome']; ?></p>
            <div id="col1" style="font-size:10px; color:#C0C0C0;">
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
    <!--    
    <div style="text-align:center; color:#50416A; font-size:16pt;"><b> BANNER TOPO </b></div> <hr>
	<form role="form" action="index.php?modulo=Admin&acao=pushBannerTop" method="POST">
	    <button type="submit" class="btn btn-primary"> CADASTRAR </button>
	</form>
    <hr>
    <div style="text-align:center; color:#50416A; font-size:16pt;"><b> NOTÍCIAS: </b>
    <form role="form" action="index.php?modulo=Admin&acao=pushNoticia" method="POST">
	    <button type="submit" class="btn btn-primary" style="background-color: green;"> CADASTRAR </button>
	</form>
    
    </div>
    -->

</div> </div> </div> <hr>