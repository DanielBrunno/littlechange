<?php

require_once 'config.php';

function load_lib($class_name){
	$class_file = PATH_LIB . $class_name . CLASS_EXTENSION;
	if(is_file($class_file)){
		require_once $class_file;
	}
}

spl_autoload_register('load_lib');