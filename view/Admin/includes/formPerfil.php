<?php

/**
 * Description of Cadastre
 *
 * @author Daniel Brunno
 */
?>
<style> @media only screen and (max-width: 600px) { #espCel{ padding-top: 30px; } } </style>
  <div id="espCel"></div>
  <!-- SubHeader =============================================== -->
  <section class="parallax-window" id="short" data-parallax="scroll">
   <div id="subheader" style="text-align: center;" ><img src="./view/resources/img/Logo1.png" width="15%" alt=""></div><!-- End subheader -->
   <div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
		
			
			<h2 style="text-align: center;">Editar Perfil</h2>
			<form role="form">
            <div class="main_title" style="text-align:center; color: #2F4F4F; font-family: Times New Roman, Times, serif; font-size: 18pt;">
				<hr><h3 class="nomargin_top">Aqui você edita<br> seu perfil.</h3> <hr>
			</div>
            <hr>
			<div class="form-group">					 
					<label for="exampleInputEmail1">
						Nome da Empresa, Se pessoa Jurídica:
					</label>
					<input type="text" class="form-control" id="exampleInputEmail1" />
				</div>
            	<div class="form-group">					 
					<label for="exampleInputEmail1">
						Nome:
					</label>
					<input type="text" class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">					 
					<label for="exampleInputEmail1">
						Sobrenome:
					</label>
					<input type="text" class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">					 
					<label for="exampleInputEmail1">
						E-mail:
					</label>
					<input type="email" class="form-control" id="exampleInputEmail1" />
				</div>
				<hr>
				<label for="exampleInputEmail1" style="color: #C0C0C0;">
						Trocar Senha
					</label>
				<div class="form-group">					 
					<label for="exampleInputEmail1">
						Digite uma senha:
					</label>
					<input type="password" class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">					 
					<label for="exampleInputEmail1">
						Confirme a Senha:
					</label>
					<input type="password" class="form-control" id="exampleInputEmail1" />
				</div>				
				<hr>				
				<div class="form-group">					 
					<label for="exampleInputEmail1">
						WhatsApp / Contato:
					</label>
					<input type="text" class="form-control" id="exampleInputEmail1" />
				</div>
                <div class="form-group">					 
					<label for="exampleInputEmail1">
						Data do Nascimento:
					</label>
					<input type="date" class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">					 
					<label for="exampleInputEmail1">
						Cidade:
					</label>
					<input type="text" class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">					 
					<label for="exampleInputEmail1">
						Estado:
					</label>
					<?php include 'view/Home/estados.php'?>				
				</div>
				<div style="text-align:right;">
				<button type="submit" class="btn btn-primary">
					Salvar
				</button>
				</div>
			</form>
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
<hr>