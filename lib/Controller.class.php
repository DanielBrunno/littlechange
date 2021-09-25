<?php
    
class Controller {
    
    // Montar a resposta da requisição http:\\localhost\file\function\parametro
	private $view;
	private $model;
	private $action;
	
	public function __construct() {
		$this->getModel();
		$this->getAction();
		$this->getView();		
		$data = $this->model->{$this->action}();
		$this->view->show($data);
	}
	
	private function getModel(){
		if(isset($_GET['modulo'])){
			return $this->model = new $_GET['modulo'];
		}else{
			return $this->model = new Home();
		}
	}
	
	private function getAction(){
		if(isset($_GET['acao'])){
			return $this->action =  $_GET['acao'];
		}else{
			return $this->action =  'landingpage';
		}
	}
	
	private function getView(){
		return $this->view = new View($this->model, $this->action);
	}

}
//landingpage
?>