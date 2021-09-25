<?php

class Enderecos{

    public function push(){
        $data = new EnderecosDao();
        return $data->push();
    }
    
    public function findId(){
        $data = new EnderecosDao();
        return $data->findId();
    }
    
    public function editaEndereco(){
        $data = new EnderecosDao();
        return $data->update();
    }
    
}

?>