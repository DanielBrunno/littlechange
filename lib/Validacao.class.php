<?php

/**
 * Description of Validacao
 *
 * @author Daniel Brunno
 */
 
class Validacao {

    public function login() {
        $data = new UsuarioDao();
        return $data->loginAdm($_POST['login'],$_POST['senha']);
    }
//landingpage
    public function semPermissao(){ exit(header("Location: index.php?modulo=Home&acao=inicio")); }    
    public function verifica($nome,$status,$nivel){
        //echo "<br><br>".$nome." - ".$status." - ".$nivel ;
        $nivel_necessario = (1 || 26);
        $status_necessario = 1;
        if(!isset($nome) && ($nivel <> $nivel_necessario) && ($status <> $status_necessario)) exit(header("Location: index.php?modulo=Home&acao=inicio"));
        else {
            /*
            Warning: Cannot modify header information - headers already sent by (output started at /home/usuario/public_html/arquivo.php:2) in .... on line 464
            Este erro ocorre quando você tenta emitir um header de PHP depois de ter enviado algum conteúdo para o navegador do cliente. Por padrão, todos os headers precisam ser enviados antes de qualquer outro conteúdo da página (echo, print, etc..). O que é um header? Cookies, variáveis de sessão, content-type e outros.
            
            Para solucionar o problema, edite seu php.ini e altere a linha: output_buffering = Off
                                                                     Para:  output_buffering = 4096
            Fazendo esta configuração, você indica para o PHP que ele deverá fazer um buffer de 4096 bytes (4k) antes de processar os headers. 
            Em outras palavras, o PHP irá aguardar 4kbytes de dados antes de processar os headers.
            */
            $_cookie_name = $nome ;
            $_cookie_nivel = $nivel ;
            $_cookie_status = $status ;
            setcookie("nome", $_cookie_name, time()+ 1800); // estava 900 
            setcookie("nivel", $_cookie_nivel, time()+ 1800); // estava 900 
            setcookie("status", $_cookie_status, time()+ (60 * 10)); // estava * 5  
        }
        header("Location: index.php?modulo=Admin&acao=admin");
    }    

}

?>