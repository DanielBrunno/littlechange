<?php

/**
 * Description of View
 *
 * @author Daniel Brunno
 */
class View {

	private $viewfile;
	private $headerfile;
	private $footerfile;
	
	public function __construct($model, $action){
		$model_name = get_class($model);		
		$this->viewfile = PATH_VIEW . "$model_name/$action.php";
		
		//VERIFICA SE É UMA REQUISICAO DE API		
        if ($model_name === "Admin"){
    		$this->headerfile = PATH_VIEW . HEADER_FRONT_ADMIN; 
	    	$this->footerfile = PATH_VIEW . FOOTER_FRONT; 
		} else {
		    $this->headerfile = PATH_VIEW . HEADER_FRONT; 
		    $this->footerfile = PATH_VIEW . FOOTER_FRONT; 
		}

	}

	public function show($data = NULL, $dataheader = NULL, $datafooter = NULL){
		include($this->headerfile);
		include($this->viewfile);
	    include($this->footerfile);
	}
		
}

 