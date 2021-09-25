<?php

/**
 * Description of Admin
 *
 * @author Daniel Brunno
 */
class Admin {	
//put your code here

    function __construct(){}
	
	function admin(){}
	
	function repositorio(){}
	
	function EscolaNome(){
	    $data = new EscolaDao();
        return $data->findNome();	    
	}

	function AlunoNome(){
	    $data = new AlunoNomeDao();
        return $data->findNome();	    
	}
	
	function imprimirEscolas(){
	    $data = new EscolaNomeDao();
        return $data->findNome();	    
	}	
	
	function pushNoticia(){
	    $data = new NoticiaDao();
        return $data->push();
	}

    public function pushImg(){
	    $data = new NoticiaDao();
        return $data->pushBannerTop();
	}
	
	/* ESCOLAS */
	
	public function pushEscola(){
	    $data = new EscolaDao();
	    return $data-> push();
	}
	
}

?>