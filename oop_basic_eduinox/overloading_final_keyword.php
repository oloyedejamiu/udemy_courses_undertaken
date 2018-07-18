<?php 

//overloading and final keyword
//include 'foo.php';
//include 'bar.php';
// we need to use spl autoload register to autoload all the included classes

spl_autoload_register(function($class_name){
	include $class_name . '.php';
}); 

// instantiation
$foo = new Foo;
$bar = new Bar;

// echoes Hello World
$foo->sayHello();

// 
$bar->sayHello();

