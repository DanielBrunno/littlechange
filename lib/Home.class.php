<?php
class Home{	

    function __construct(){}

	public function inicio(){}
	
	public function landingpage(){}

	public function cadastre(){}
	
	public function noticias(){
	   $data = new NoticiaDao();
       return $data->findLast();
	}	
}

?>