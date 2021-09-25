<?php
/**
 * Description of Usuario
 *
 * @author Daniel Brunno
 */
class Usuario {
    //put your code here
    public function Login(){ 
        $data = new UsuarioDao();
        return $data->Login();
    }

    public function findAll(){
        $data = new UsuarioDao();
        return $data->findAll();
    }
    
    public function findId(){
        $data = new UsuarioDao();
        return $data->findId();
    }

    public function push(){
        $data = new UsuarioDao();
        return $data->push();
    }

    public function update(){
        $data = new UsuarioDao();
        return $data->update();
    }

    public function deleteId(){
        $data = new UsuarioDao();
        return $data->deleteId();
    }
}
?>