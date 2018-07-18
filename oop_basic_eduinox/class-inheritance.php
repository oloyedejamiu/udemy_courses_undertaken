<?php 
// class inheritance
class First {
	public $id = 23;
	protected $name = 'John Doe';
	public function saySomething(){
		echo 'Say something ...';
	}
}

class Second extends First{
	public function getName(){
		return $this->name;
	}
}

$second = new Second;

// echo property of the parent class
//echo $second->name . '<br>';

// echo the method of the parent class
//echo $second->saySomething() .'<br>';

// if we change name from public to protected
echo $second->getName();


