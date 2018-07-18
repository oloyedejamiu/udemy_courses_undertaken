<?php 
// learn object iteration
class People{
	public $person1 = 'Mike';
	public $person2 = 'Shelly';
	public $person3 = 'Jeff';
	// change from protected to public // John was added to the iteration
	public $person4 = 'John';
	private $person5 = 'Jen';

	//iterating from inside
	/*
	function iterateObject(){
		foreach ($this as $key => $value) {
			print strtoupper($key) . ' : ' .$value .'<br>';
		}
	}*/
}

// instantiation 
$people = new People;
//$people->iterateObject();

foreach ($people as $key => $value) {
	print strtoupper($key) . ' : ' .$value .'<br>';
}