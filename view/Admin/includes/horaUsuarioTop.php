<div id="myPage" style="text-align: center; z-index:-1;"> <!-- <p  style="text-align:right;"> USU&Aacute;RIO: <?php // echo isset($_COOKIE['nome']); ?></p> -->
            <div id="col1" style="font-size:12px; color:#C0C0C0; z-index:-1;">
                <script LANGUAGE="JavaScript" style="z-index:-1;">
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
        <hr>