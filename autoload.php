<?php

spl_autoload_register('autoLoader');

function autoLoader($className){
	echo "try load: $className \n";
	$className = str_replace('\\', '/', $className ) ;
	$path = __DIR__ . "/{$className}.php";
	if (is_readable($path)){
		echo "file was found: $path \n";
		require_once $path;
	} else return false;
}