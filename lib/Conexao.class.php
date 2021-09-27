<?php

/**
 * Description of Conexao
 *
 * @author Daniel Brunno
 */
class Conexao {
    //put your code here
    private $usuario = "";
    private $senha = "";
    private $caminho = "localhost";
    private $banco = "";    
    private $con;
    
    public function __construct() {
        $this->con = mysqli_connect($this->caminho, $this->usuario, $this->senha) or die ("Conexao com o banco de dados falhou" . mysqli_error($this->con));
        mysqli_set_charset($this->con, "utf8");
        mysqli_select_db($this->con, $this->banco) or die ("Conexao com o banco de dados falhou" . mysqli_error($this->con));
    }
    
    public function getCon(){ return $this->con; }
}
?>