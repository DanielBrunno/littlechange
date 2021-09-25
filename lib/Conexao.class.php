<?php

/**
 * Description of Conexao
 *
 * @author Daniel Brunno
 */
class Conexao {
    //put your code here
    private $usuario = "qys0zs5lsgdao0jp";
//    private $usuario = "wwstar_proerdadm";
    private $senha = "xwxhlbsk1r3oxizs";
//  private $caminho = "y5svr1t2r5xudqeq.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    private $caminho = "localhost";
    private $banco = "ibkwzmnyzbp47yqh";
//    private $banco = "sisproepm";    
    private $con;
    
    public function __construct() {
        $this->con = mysqli_connect($this->caminho, $this->usuario, $this->senha) or die ("Conexao com o banco de dados falhou" . mysqli_error($this->con));
        mysqli_set_charset($this->con, "utf8");
        mysqli_select_db($this->con, $this->banco) or die ("Conexao com o banco de dados falhou" . mysqli_error($this->con));
    }
    
    public function getCon(){ return $this->con; }
}

/*
CREATE USER 'wwstar_proerdadm'@'localhost' IDENTIFIED VIA mysql_native_password USING '***';GRANT ALL PRIVILEGES ON *.* TO 'wwstar_proerdadm'@'localhost' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;GRANT ALL PRIVILEGES ON `sisproepm`.* TO 'wwstar_proerdadm'@'localhost';
*/
?>