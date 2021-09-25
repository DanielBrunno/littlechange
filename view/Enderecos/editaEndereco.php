<?php

echo '<hr><h1>Editar Endereço da Escola</h1>';

//print_r($data);

if($data['result'] == "sucess" && $data['nome'] != null && $data['nome'] !== "") echo '<pre style="text-align:center; font-size:18pt;"> REGISTRO EDITADO, <b style="color:#191970; font-size:20pt;"> COM SUCESSO: </b> - Da '.$data['nome'] . '</pre>';
else if($_POST['tipo'] == "Buscar"){
    echo ' 	
        <form role="form" action="./index.php?modulo=Enderecos&acao=editaEndereco" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="formName" value="editaEndereco" readonly required />
            <input type="hidden" name="tipo" value="Editar" readonly required />

            <pre style="text-align:center; font-size:18pt;"> PARA EDITAR, <b style="color:#191970; font-size:20pt;"> DIGITE NOS CAMPOS ABAIXO O ENDEREÇO CORRETO: </b> - Da '.$data['nome'] . '</pre>
            <hr>

            <hr>
             <style> input{ width: 100%; } </style>
             <input type="hidden" name="id" value="'.$data['id'].'" readonly required />
             
             <div class="form-group"><label for="exampleInputEmail1">CEP:</label>
             <input type="text" name="regCep" value="'.$data['regCep'].'" required /></div>

             <div class="form-group"><label for="exampleInputEmail1">Logradouro:</label>
             <input type="text" name="logradouro" value="'.$data['logradouro'].'" required /></div>
             
             <div class="form-group"><label for="exampleInputEmail1">Número:</label>
             <input type="text" name="numero" value="'.$data['numero'].'" required /></div>
             
             <div class="form-group"><label for="exampleInputEmail1">Complemento:</label>
             <input type="text" name="complemento" value="'.$data['complemento'].'" required /></div>

             <div class="form-group"><label for="exampleInputEmail1">Bairro:</label>
             <input type="text" name="bairro" value="'.$data['bairro'].'" required /></div>

             <div class="form-group"><label for="exampleInputEmail1">Zona:</label>
                    <select name="zona" id="zona" required>
                        <option value="'.$data['zona'].'">'.$data['zona'].'</option>
                        <option value="Norte">Norte</option>
                        <option value="Sul">Sul</option>
                        <option value="Leste">Leste</option>
                        <option value="Oeste">Oeste</option>
                    </select></div><hr>
                    
                                 
             <div class="form-group"><label for="exampleInputEmail1">Cidade:</label>
             <input type="text" name="cidade" value="'.$data['cidade'].'" required /></div>
             
             <div class="form-group"><label for="exampleInputEmail1">Estado:</label>
             <input type="text" name="estado" value="'.$data['estado'].'" required /></div>
             
             <div class="form-group"><label for="exampleInputEmail1">Ponto de Referência:</label>
             <input type="text" name="pontoReferencia" value="'.$data['pontoReferencia'].'" required /></div>
            
            <div style=" text-align: right;"><button type="submit" style="background-color:#FFD700; border-color: #FFD700; color: black;" class="btn btn-primary"> Salvar</button></div>
        </form>
';

}
else {
    header('Location: https://startupnatal.com.br/escolasEstaduais/index.php?modulo=Admin&acao=escolaNome');
    exit;    
}

?>