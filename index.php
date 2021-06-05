<?php

//error_reporting = E_ALL
//display_errors = On

spl_autoload_register(function($class)
	{   
		echo 'try load: ' . $class . PHP_EOL . '<br>';
		$path = __DIR__ . "/lib/{$class}.php";
		if (is_readable($path)){
			echo 'file was found: ' . $path . PHP_EOL . '<br>';
			require_once $path;
		}  	
	}
);

$objFoo = new Foo;
//$objBar = new Bar;
$objBaz = new Baz;