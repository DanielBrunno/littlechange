<?php

class EnderecosDao{
    
 //put your code here
    private $conexao;
    protected $data;
    public function __construct() { $this->conexao = new Conexao(); }
        
    public function push(){
        if($_POST){
            if(isset($_POST['fkEscolaPessoa']) && $_POST['fkEscolaPessoa'] > 0){
                 $id = $_POST['fkEscolaPessoa'];
                 $fkEscolaPessoa = $_POST['fkEscolaPessoa'];
            }
            if(isset($_POST['tipo'])) $tipo = $_POST['tipo'];
            if(isset($_POST['natureza'])) $natureza = $_POST['natureza']; // residencial, parente
            if(isset($_POST['formView'])) $formView = $_POST['formView']; // Form Escola, Form Aluno
            if(isset($_POST['formNome'])) $formNome = $_POST['formNome']; // Form Escola, Form Aluno
            if(isset($_POST['logradouro'])) $logradouro = $_POST['logradouro'];
            if(isset($_POST['regCep'])) $regCep = $_POST['regCep'];
            if(isset($_POST['numero'])) $numero = $_POST['numero'];
            if(isset($_POST['complemento'])) $complemento = $_POST['complemento'];
            if(isset($_POST['bairro'])) $bairro = $_POST['bairro'];
            if(isset($_POST['zona'])) $zona = $_POST['zona'];
            if(isset($_POST['cidade'])) $cidade = $_POST['cidade'];
            if(isset($_POST['estado'])) $estado = $_POST['estado'];
            if(isset($_POST['pontoReferencia'])) $pontoReferencia = $_POST['pontoReferencia'];                
        } else return $data = null;
      
        if(isset($id) && isset($tipo) && isset($natureza) && $tipo == "Buscar"){        
            $query = "SELECT * FROM {$natureza} INNER JOIN enderecos WHERE {$natureza}.id = {$id} AND fkEscolaPessoa = {$id} ORDER BY {$natureza}.id LIMIT 1";
            $result = mysqli_query($this->conexao->getCon(), $query);  
            $rowcount = mysqli_num_rows($result);
            if($rowcount > 0){
                while($row = $result->fetch_assoc()){ $data = $row; }
                $data['formView'] = "Continuar";                
            } else {
                $query = "SELECT * FROM {$natureza} WHERE id = {$id} ORDER BY id LIMIT 1";
                $result = mysqli_query($this->conexao->getCon(), $query);  
                $rowcount = mysqli_num_rows($result);
                if($rowcount > 0){
                    while($row = $result->fetch_assoc()){ $data = $row; }
                    $data['formView'] = "Continuar";                
                } else $data[] = "REGISTRO NÃO EXISTE";
            } 
        } else if(isset($_POST) && isset($id) && isset($logradouro) && isset($natureza) && $tipo=="Salvar"){               
                $sql = "INSERT INTO enderecos (fkEscolaPessoa, natureza, formNome, regCep, logradouro, numero, complemento, bairro, zona, cidade, estado, pontoReferencia) VALUES ('$fkEscolaPessoa', '$natureza', '$formNome', '$regCep', '$logradouro', '$numero', '$complemento', '$bairro', '$zona', '$cidade', '$estado', '$pontoReferencia')";
                $execute = mysqli_query($this->conexao->getCon(), $sql);
                    //APÓS A INCLUSÃO - FAZ A BUSCA NO BANCO E RETORNA O ÚLTIMO ENDEREÇO CADASTRADO
                    $query = "SELECT * FROM enderecos ORDER BY id DESC LIMIT 1";
                    $link = mysqli_query($this->conexao->getCon(), $query);
                    $rowcount = mysqli_num_rows($link);
                    if($rowcount > 0) while($row = $link->fetch_assoc()){ $data = $row; } // transformo os dados da string em objetos e copio para o array
                    $data['formView'] = "Sucesso";
                   // echo ' <script> alert("CHEGOU NO CADASTRAR"); </script>';
            } else {
                if(isset($formView)) $_POST["formView"] = "Cadastrar";
                else $data = null;
            }
        $this->conexao = null;
    return $data;
    }

    public function findId(){
        if(isset($_POST['id'])) $id = $_POST['id'];
        if(isset($id) && isset($formNome) && isset($_POST['tipo'])){ // busca
            $sql = "SELECT enderecos WHERE id = {$id} ORDER BY id LIMIT 1 DESC";
            $result = msyqli_query($this->conexao->getCon(), $sql);
            $rowcount = mysqli_num_rows($result);
            if($rowcount > 0) while($row = $result->fetch_assoc()){ $data[] = $row; }            
        } else $data = null;
        $this->conexao = null;
    return $data;
    }
    
    public function update(){
        
        $id = isset($_POST['id']);
        $regCep = isset($_POST['regCep']);
        $logradouro = isset($_POST['logradouro']);
        $numero = isset($_POST['numero']);
        $complemento = isset($_POST['complemento']);
        $bairro = isset($_POST['bairro']);
        $zona = isset($_POST['zona']);
        $cidade = isset($_POST['cidade']);
        $estado = isset($_POST['estado']);
        $pontoReferencia = isset($_POST['pontoReferencia']);
        $formName = isset($_POST['formName']);
        $tipo = isset($_POST['tipo']);
        
        if(!empty($id) && isset($_POST) && $tipo == "Buscar" && $formName == "escolaNome"){
            $sql = "SELECT * FROM escolas INNER JOIN enderecos ON escolas.id = enderecos.fkEscolaPessoa ORDER BY escolas.id DESC";
            $result = mysqli_query($this->conexao->getCon(), $sql);
            $rowcount = mysqli_num_rows($result);
            if($rowcount > 0) while($row = $result->fetch_assoc()){ $data[] = $row; }           
        }else if(!empty($id) && isset($_POST) && $tipo == "Editar" && $formName == "editaEndereco" ){
            $sql = "UPDATE enderecos SET regCep='$regCep', "
            . "logradouro ='$logradouro', "
            . "numero ='$numero', "
            . "complemento ='$complemento', "
            . "bairro ='$bairro', "
            . "zona ='$zona', "
            . "cidade ='$cidade', "
            . "estado ='$estado', "
            . "pontoReferencia ='$pontoReferencia' WHERE id ='$id'";

            $execute = mysqli_query($this->conexao->getCon(), $sql);
            if($execute){
                $data['nome'] = $nome;
                $data['result'] = "Sucesso";
            } else $data = false;
        } else $data = null;
        $this->conexao = null;
    return $data;    
    }
}

?>