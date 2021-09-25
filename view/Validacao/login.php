<?php
if($data){
    $validacao = new Validacao();
    $validacao->verifica($data['nome'],$data['status'],$data['nivel']);
} else echo "<h4 style='text-align:center; background-color:#800000; top:100px; border-radius: 20px; color: #FFFFFF;' ><hr><hr> Algo deu errado, por favor, verifique os dados digitados!<hr></h4>";

?>