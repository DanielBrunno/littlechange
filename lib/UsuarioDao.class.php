<?php
header("Access-Control-Allow-Origin: *");

/**
 * Description of UsuarioDao
 *
 * @author Daniel Brunno
 **/
 
class UsuarioDao {

    //put your code here
    private $conexao;
    protected $data = [];
    
    public function __construct() { $this->conexao = new Conexao(); }
    
    public function loginAdm($login,$senha1){
        $usuario = $login;
        $senha = sha1($senha1);
        $sql = "SELECT id,nome,usuario,nivel,status FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' LIMIT 1";
        $result = mysqli_query($this->conexao->getCon(), $sql);
        $rowcount = mysqli_num_rows($result);
        if($rowcount > 0) while($row = $result->fetch_assoc()){ $data = $row; }
        else $data = null;
        $this->conexao = null;
        return $data;
    }
    
    public function findAll(){
        $sql = "SELECT * FROM usuarios";
        $result = mysqli_query($this->conexao->getCon(), $sql);
        $rowcount = mysqli_num_rows($result);
        if($rowcount > 0) while($row = $result->fetch_assoc()){ $data = $row; }
        mysqli_close($result); 
        return $data; 
    }

    public function push(){
        if (isset($_POST['email']) && (count($_POST) >= 1) && ($_POST['token'] == VS_TOKEN)) {
            if ($token != "FD7FCBFD3D3A990B9603B82AB690BFA87F1FCBF7") return null;
            $email = $_POST['email'];
            $sql = 'SELECT email FROM usuarios WHERE email = "' . $email . '" ';
            $result = mysqli_query($this->conexao->getCon(), $sql);
            $rowcount = mysqli_num_rows($result);
            if($rowcount > 0) $data = "email em uso";
            else{
                $nome = $_POST['nome'];
                $login = $_POST['login'];
                $senha = sha1($_POST['senha']);
                $nivel = $_POST['nivel'];
                $status = $_POST['status'];
    
                if ($senha) {
                    $execute = "INSERT INTO usuarios (nome , usuario, senha, nivel, status)"
                        . " VALUES ('$nome', '$login', '$senha','$nivel', '$status') ";
                    $link = mysqli_query($this->conexao->getCon(), $sql);
                    $data = array($nome, $login);
                }
            }
        } else $data = null;
        $this->conexao = null;
    return $data;
    }

    public function update(){
        if (isset($_POST['fkUsuario']) && ($_POST['tipost'] == "Buscar") && ($_POST['token'] == VS_TOKEN)) {
            $fkUsuario = $_POST['id'];
            $sql = "SELECT * FROM usuarios WHERE id = {$fkUsuario} ";
            $result = mysqli_query($this->conexao->getCon(), $sql);
            $rowcount = mysqli_num_rows($result);
            if($rowcount > 0) while($row = $result->fetch_assoc()){ $data = $row; } // transformo os dados da string em objetos e copio para o array
        } elseif (isset($_POST["id"]) && ($_POST['tipost'] == "Editar") && ($_POST['token'] == VS_TOKEN)) {
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $login = $_POST['login'];
            $nivel = $_POST['nivel'];
            $status = $_POST['status'];

            $sql = "UPDATE usuarios SET nome='$nome', "
                . "login='$login', "
                . "nivel='$nivel', "
                . "status='$status' WHERE id='$id'";

            $link = mysqli_query($this->conexao->getCon(), $sql);
        } else $data = null;
        $this->conexao = null;
    return $data;
    }

    public function deleteId(){
        if (isset($_POST['fkUsuario']) && ($_POST['tipost'] == "Buscar") && ($_POST['token'] == VS_TOKEN)) {
            $sql = "SELECT * FROM usuarios WHERE id = {$_POST['fkUsuario']} ";
            $result = mysqli_query($this->conexao->getCon(), $sql);
            $rowcount = mysqli_num_rows($result);
            if($rowcount > 0) while($row = $result->fetch_assoc()){ $data = $row; } // transformo os dados da string em objetos e copio para o array
        
        } elseif (isset($_POST["id"]) && ($_POST['tipost'] == "Deletar") && ($_POST['token'] == VS_TOKEN)) {
            $deleteq = 'DELETE FROM usuarios WHERE id = "' . $_POST['id'] . '" ';
            $link = mysqli_query($this->conexao->getCon(), $deleteq);
            $data = true;
        } else $data = false;
        $this->conexao = null;
    return $data;
    }

    public function findId(){
        if (isset($_POST['fkUsuario']) && ($_POST['tipost'] == "Buscar") && ($_POST['token'] == VS_TOKEN)) {
            $sql = "SELECT * FROM usuarios WHERE fkUsuario = {$_POST['fkUsuario']} ";
            $result = mysqli_query($this->conexao->getCon(), $sql);
            $rowcount = mysqli_num_rows($result);
            if($rowcount > 0) while($row = $result->fetch_assoc()){ $data = $row; }
        } else $data = null;
        $this->conexao = null;
    return $data;
    }

}