<?php
//Carrega o bootstrap que chama as triats e o model
require 'bootstrap.php';

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization");

// Chama a class controler
$c = new Controller();