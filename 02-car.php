<?php
//Create a class that represents a car

class Car 
{
	private $make;
	private $np;
	private $mileage;


	public function __construct($make, $np) 
	{
		$this->make = $make;
		$this->np = $np;
		$this->mileage = 0;

	}

	public function getMake()
	{
		return $this->make;
	}


	public function getNumberplate()
	{
		return $this->np;
	}


	public function getMileage() 
	{
		return $this->mileage;
	}

	public function addJourney($mile)
	{
		$this->mileage += $mile;
		return $this;
	}


}




// you pass in a make and number plate
$car = new Car("Ford", "XY11 4TY");

// you can get various bits of information about it
var_dump($car->getNumberplate()); // string(8) "XY11 4TY"
var_dump($car->getMake()); // string(4) "Ford"
var_dump($car->getMileage()); // int(0)

// you can add journey
$car->addJourney(100);
var_dump($car->getMileage()); // int(100)

$car->addJourney(200);
var_dump($car->getMileage()); // int(300)