<style>
    
    table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100% !important;
        table-layout: fixed;
        word-break: break-all;
    }
    tbody{ font-size: 10pt;}
    table{ font-size: 12pt;}
    .idtable{ width: 3%; }
    .contatotable{ width: 10%; }
    .qrCodeEnd{ width: 50%; }
    .editEscola{ background:none;}

</style>
<body style="width:100%;">
<div class="container-fluid" style="width:100%;">
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				<h2> Relatório, Escolas! </h2>
				<p> Relatório de dados da Escola. </p>
				<p> <a class="btn btn-primary btn-large" href="./index.php?modulo=Admin&acao=imprimirEscolas">Imprimir</a> </p>
			</div>
			<h3>1. DADOS DA ESCOLA:</h3>
			<table class="table table-sm table-hover" style="width:100%;">
				<thead>
					<tr>
    					<th  style="width:5%;"> Num. </th>
						<th class="qrCodeEnd;"> QRCode </th>
						<th class="idtable"> Id </th>
						<th style="width:25%;"> Nome </th>						
						<th style="width:20%;"> Endereço </th>
						<th class="contatotable"> Gestão </th>
						<th class="contatotable"> Contato </th>
						<th class="contatotable"> Observação </th>						
					</tr>
				</thead>
				<tbody>
				    <?php
				    

				   // echo"<hr><h1 style='background:#00FA9A; text-align: center;'> TESTE DE INFORMAÇÕES VINDAS DO BANCO DE DADOS! </h1>";
				   // print_r($data);
				    
				    				    
				    $cont = count($data) - 1;
				    $auxCont = 1;
				        while($cont >= 0){
    				        if($data[$cont]["zona"] == "Sul") echo '<style> #rowsEscolas'.$cont.'{ background: #FFB6C1; }  </style>';
				            elseif($data[$cont]["zona"] == "Leste") echo '<style> #rowsEscolas'.$cont.'{ background: #FFE4B5; }  </style>';
				            elseif($data[$cont]["zona"] == "Oeste") echo '<style> #rowsEscolas'.$cont.'{ background: #98FB98; }  </style>';
    				        else echo '<style> #rowsEscolas'.$cont.'{ background: #D3D3D3; }  </style>';

    				        if($data[$cont]["id"] >= 1){
    				        echo'
            				    <tr id="rowsEscolas'.$cont.'">
            				    	<td>'.$auxCont.'</td>
            						<td><a class="nav-link qrCodeEnd" style="padding: 0px; margin:0px;" target="_blank" href="https://www.google.com/maps/uv?pb=!1s0x7b2556abb025a6b%3A0x88f848aac684f9af!3m1!7e115!4s%2Fmaps%2Fplace%2Fescola%2Bestadual%2Blauro%2Bde%2Bcastro%2Bnatal%2F%40-5.8222174%2C-35.2361947%2C3a%2C75y%2C292.98h%2C90t%2Fdata%3D*213m4*211e1*213m2*211sSdP0osYqJIWxdL7pgXpI1g*212e0*214m2*213m1*211s0x7b2556abb025a6b%3A0x88f848aac684f9af%3Fsa%3DX!5sescola%20estadual%20lauro%20de%20castro%20natal%20-%20Pesquisa%20Google!15sCgIgAQ&imagekey=!1e2!2sSdP0osYqJIWxdL7pgXpI1g&hl=pt-BR&sa=X&ved=2ahUKEwjE7fSkg9vwAhUCFbkGHf4-DCkQpx8wCnoECB8QCA"><img style="width:60%" alt="Clique para ampliar" title="Clique para ampliar e com um app leitor de QrCode acesse a localização" src="./view/resources/img/qrCodes/qrcodeEscolaLauroDeCastro.jpg" /></a></td>
            					    <td class="idtable"><input class="editEscola" style="width: 25px; border: 0px;" type="text" id="fname" name="fname" value="'.$data[$cont]["fkEscolaPessoa"].'" readonly></td>
            						<td>
            						<input class="editEscola" style="width:350px; border: 0px;" type="text" id="fname" name="fname" value="'.$data[$cont]["nome"].'">
            						
            							<form role="form" action="./index.php?modulo=Escolas&acao=editaEscola" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="formName" value="escolaNome" readonly required />
                                            <input type="hidden" name="tipo" value="Buscar" readonly required />
                                            <input type="hidden" name="id" value="'.$data[$cont]["fkEscolaPessoa"].'" readonly required />
                	                        <button type="submit" style="background-color:#FFD700; border-color: #FFD700; color: black;" class="btn btn-primary"> Editar Nome</button>
                                        </form>
                                    </td>
            						<td>'.$data[$cont]["logradouro"].'
            						';
            				
            				if($data[$cont]["numero"] > 0) echo ", ".$data[$cont]["numero"]." - ";
            				else echo ", sn - ";
            				
            				echo '<br>'.$data[$cont]["bairro"].'. '.$data[$cont]["cidade"].'/'.$data[$cont]["estado"].'.
            					<form role="form" action="./index.php?modulo=Enderecos&acao=editaEndereco" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="formName" value="escolaNome" readonly required />
                                            <input type="hidden" name="tipo" value="Buscar" readonly required />
                                            <input type="hidden" name="id" value="'.$data[$cont]["fkEscolaPessoa"].'" readonly required />
                	                        <button type="submit" style="background-color:#FFD700; border-color: #FFD700; color: black;" class="btn btn-primary"> Editar Endereço</button>
                                </form>
            				
            				
            				</td>
            						<td> Maria <br> Diretor(a) </td>
            						<td class="contatotable"> (84) 3232-7679 </td>
            						<td> Sem alteração!
            					
            						</td>						
            					</tr>
            				    ';
    				        }
	                        $cont--;
	                        $auxCont++;
				        }
				    ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php echo " "; ?>

</body>