<?php
    //print_r($data);
    if(isset($formView)) echo $formView;

    if(isset($data[0]) && $data[0] == "REGISTRO NÃO EXISTE") echo "<hr><pre style='background: red; font-size:16pt;'> O REGISTRO AO QUAL DESEJA CADASTRAR ENDEREÇO - NÃO EXISTE! </pre><hr>";
?>
<style>
    input, select, button{ 
        width: 100%;
        height: 45px;
        font-size: 14pt;    
    }
</style>

<?php
    if(isset($data["formView"])){
        $id = isset($data["id"]);
        $nome = isset($data["nome"]);
        $formView = isset($data["formView"]); // $tipo
        $natureza = isset($data["natureza"]); //tabela
    } else $data = null;

    if(isset($id) && isset($formView) && $formView == "Continuar"){
        // FORM VIEW COM DADOS PARA QUEM SERÁ O ENDEREÇO CADASTRADO E BOTÃO "CONFIRMAR"
       // echo '<hr>';
       //     print_r($data);
       // echo '<hr>';
        if(!empty($data['logradouro']) && isset($formView) && $formView == "Sucesso") echo "<pre style='background: #00FA9A; font-size:16pt;'> TUDO CERTO, O ENDEREÇO: ".$data["logradouro"].",<br> FOI CADASTRADO COM SUCESSO! </pre>";
        if(!empty($data['logradouro']) && isset($formView) && $formView == "Continuar"){ 
            echo "<pre style='background: #00FA9A; font-size:16pt;'> REGISTRO LOCALIZADO! LEIA COM ATENÇÃO PARA CONTINUAR. </pre>
                <pre style='background: #FFD700; font-size:16pt; text-align: center;'>EXISTE UM ENDEREÇO CADASTRADO PARA ESTE REGISTRO: EM <br> ". $data['logradouro'] 
                . ", N.º: " . isset($data['numero'])
                . " - ". isset($data['bairro'])
                . "<br> Zona ". isset($data['zona'])
                . " de ". isset($data['cidade'])
                . "/".isset($data['estado'])
                . ".</pre>";
        } else {
            echo "<pre style='background: #ADFF2F; font-size:16pt;'> PRENCHA OS DADOS DO NOVO ENDEREÇO E CLIQUE EM SALVAR. </pre>
                 <div class='form-group'><label for='exampleInputEmail1'>Verifique se os dados estão corretos para continuarmos: </label></div>";

            // FORM VIEW DA CADASTRO DE ENDEREÇO COMPLETO E BOTÃO "SALVAR"
            echo '<hr>
            <form role="form" action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="tipo" value="Salvar" required  />          
                <input type="hidden" name="formNome" value="escolas" required  /><hr>        
                <div class="form-group"><label for="exampleInputEmail1">Nome: </label></div>
                <div class="form-group" style="width: 100%;">
                    <input style="width: 5%;" type="text" name="fkEscolaPessoa" value="'.$data["id"].'" readonly required  />
                    <input style="width: 94%;" type="text" name="nome" value="'.$data["nome"].'" readonly/><hr>
                </div>
                        
                        <div class="form-group"><label for="exampleInputEmail1">Natureza:</label></div>
                        <select name="natureza" id="natureza" required>
                            <option value="Atual">Atual</option>
                            <option value="Parente">Parente</option>
                        </select><hr>
            
                        <div class="form-group"><label for="exampleInputEmail1">Logradouro:</label></div>
                        <input type="text" name="logradouro" placeholder="Logradouro" required  /><hr>
                        
                        <div class="form-group"><label for="exampleInputEmail1">Número:</label></div>
                        <input type="text" name="numero" value="sn" required  /><hr>
                        
                        <div class="form-group"><label for="exampleInputEmail1">Complemento:</label></div>
                        <input type="text" name="complemento" value="-" required  /><hr>
                        
                        <div class="form-group"><label for="exampleInputEmail1">Bairro:</label></div>
                        <input type="text" name="bairro" placeholder="Bairro" required  /><hr>
                        
                        <div class="form-group"><label for="exampleInputEmail1">CEP:</label></div>
                        <input type="text" name="regCep" placeholder="Cep" required  /><hr>
            
                        
                        <div class="form-group"><label for="exampleInputEmail1">Zona:</label></div>
                        <select name="zona" id="zona" required>
                            <option value="-"></option>
                            <option value="Norte">Norte</option>
                            <option value="Sul">Sul</option>
                            <option value="Leste">Leste</option>
                            <option value="Oeste">Oeste</option>
                        </select><hr>
                        
                        <div class="form-group"><label for="exampleInputEmail1">Cidade:</label></div>
                        <input type="text" name="cidade" value="Natal" required  /><hr>
                        
                        <div class="form-group"><label for="exampleInputEmail1">Estado:</label></div>
                        <input type="text" name="estado" Value="RN" required  /><hr>
                        
                        <div class="form-group"><label for="exampleInputEmail1">Ponto de Referência:</label></div>
                        <input type="text" name="pontoReferencia" value="-" required  /><hr>
                        
                        <button style="font-size: 20pt;" type="submit" class="btn btn-primary"> Salvar </button>
                    
                    </form>
                    <div class="container-fluid">
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                          </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right" >
                            <li class="divider"> </li>
                            <li style="background-color: #FFDEAD;"><a style="backgroung-color: #FFDEAD;"href="./index.php?modulo=Admin&acao=admin#">VOLTAR</a></li>            
                            <li class="divider"> </li>
                        </ul>
                    </div>
                    </div>
                ';        
                
        }
    } else {
        // IF DE MENSAGEMS DE RESULTADOS DAS REQUISIÇÕES
        if(isset($formView) && $formView === 'Sucesso') echo "<pre style='background: #00FA9A; font-size:16pt;'> TUDO CERTO, O ENDEREÇO:".isset($data['logradouro'])." FOI CADASTRADO COM SUCESSO! </pre>";
        else echo "<pre style='background: #DCDCDC; font-size:16pt;'> PREENCHA AS INFORMAÇÕES SOLICITADAS PARA INICIAR.</pre>"; 
        // FORM VIEW COM INPUTS: ESCOLA PARA QUEM IRÁ CADASTRADAR O ENDEREÇO, NOME OU ID, E BOTÃO "BUSCAR"
        echo '  <hr>
                <form role="form" action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="tipo" value="Buscar" required  />
                    <div class="form-group"><label for="exampleInputEmail1">Para quem, está cadastrando este endereço?</label></div>
                    <select name="natureza" id="natureza" required>
                        <option value="escolas">Escolas</option>
                        <option value="pessoas">Alunos</option>
                        <option value="pessoas">Servidor</option>
                    </select>
                    <div class="form-group"><label for="exampleInputEmail1">Informe o Código do registro: </label></div>
                    <input style="width:100%;" type="text" name="fkEscolaPessoa" placeholder="Informe o Id da Escola, Aluno ou Servidor da escola" required  />
                    <hr><div style="text-align: right; style="font-size: 20pt;"><button type="submit" class="btn btn-primary"> BUSCAR </button></div>
                </form>
                <hr>
        ';
    }

    echo '
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right" >
                    <li class="divider"> </li>
                    <li style="background-color: #FFDEAD;"><a style="backgroung-color: #FFDEAD;"href="./index.php?modulo=Admin&acao=admin#">VOLTAR</a></li>            
                    <li class="divider"> </li>
                </ul>
            </div>
        </div>
    ';
?>