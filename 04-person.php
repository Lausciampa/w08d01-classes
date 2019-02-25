<?php

// Create a Person class which takes a name and age in the constructor. Also create a House class which has an addDweller() method, which you can pass a person into. The house should keep track of its dwellers. The House class should have a static method called census() which you pass an array of House objects: it should return a flat array of all the people in those house.

// Hint: PHP has an array_merge function


class Person
{
	//define var
	private $name;
	private $age;

	public function __construct($n, $a)
	{
		$this->name = $n;
		$this->age = $a;
	}

	public function setName($n)
	{
		$this->name = $n;
		return $this;
	}

	public function setAge($a)
	{
		$this->age = $a;
		return $this;
	}


}

// create some people
$carlton = new Person("Carlton", 25);
$ida = new Person("Ida", 32);
$estelle = new Person("Estelle", 57);
$jana = new Person("Jana", 48);

// var_dump($carlton);
// var_dump($ida);

class House 
{
	private $

	public function __construct()
	{
		$this->
	}

	public function addDweller()
	{

	}


}

// create a house and put some peeps in
$house1 = new House();
$house1->addDweller($carlton)
       ->addDweller($ida);

// create another house and put some other peeps in
$house2 = new House();
$house2->addDweller($estelle)
       ->addDweller($jana);

// get back an array with all the peeps in the given houses
// the actual output will be a bit messier
// but check it has the right number of people
var_dump(House::census([$house1, $house2])); // array(4) [$carlton, $ida, $estelle, $jana]
var_dump(House::census([$house2])); // array(2) [$estelle, $jana]






