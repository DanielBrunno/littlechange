<?php 
    header("Content-Type: text/html; lang:pt-br; charset=ISO-8859-1",true);
    if(isset($_COOKIE['nome'])):
        setcookie('nome', '', time() - 2, '/');
        setcookie('nivel', '', time() - 2, '/');
        setcookie('status', '', time() - 2, '/');
    endif;
    session_start(); // Inicia a sessão
	ob_start();
	ob_end_flush();
	ob_end_clean();
	session_destroy(); // Destroi a sessao limpando todos os valores salvos
	exit(header("Location: ../index.php")); // Redireciona o visitante
?>