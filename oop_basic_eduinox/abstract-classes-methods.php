<?php

// abstract classes & methods 
abstract class Animal {
	public $name;
	public $color;
	public function describe(){
		return $this->name. ' is ' .$this->color;
	}

	abstract public function makeSound();
}

class Duck extends Animal{
	public function describe(){
		return parent::describe();
	}
	public function makeSound(){
		return 'Quack';
	}
}

class Dog extends Animal{
	public function describe(){
		return parent::describe();
	}
	public function makeSound(){
		return 'Bark';
	}
}

// we can't instantiate the abstract class, but we can instantiate any of the child classes
$animal = new Dog;
$animal->name = 'Ben';
$animal->color = 'Yellow';
// echo Ben is Yellow
echo $animal->describe();
echo '<br>';
// echoes Bark
echo $animal->makeSound();