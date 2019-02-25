<?php

// Create a class that represents an address - use different properties for each part of the address. It should have a fullAddress method, which will return the full address as a nicely formatted string.

// Hint: PHP has an implode() function, which is similar to join() in JS

class Address
{
	private $street;
	private $postcode;
	private $town;

	public function __construct($st, $pc, $t)
	{
		$this->street = $st;
		$this->postcode = $pc;
		$this->town = $t;
	}

	public function setStreet($st)
	{
		$this->street = $st;
		return $this;
	}

	public function setPostcode($pc)
	{
		$this->postcode = $pc;
		return $this;
	}

	public function setTown($t)
	{
		$this->town = $t;
		return $this;
	}

	public function fullAddress()
	{
		return implode(", ", $this->pieces());
		

	}

	//public or private?
	private function pieces()
	{
		return array_filter([
			$this->street,
			$this->postcode,
			$this->town,
		]);
	}



}



$address = new Address("1 Made Up Street", "BS4 8TR", "Bristol");

// logs the full address neatly
var_dump($address->fullAddress()); // string(34) "1 Made Up Street, Bristol, BS4 8TR"

// can update the street, postcode, and town
// using chaining
$address->setStreet("12 Cantelope Way")
        ->setPostcode("SW5 8RQ")
        ->setTown("Swansea");

// logs the new full address neatly
var_dump($address->fullAddress()); // string(34) "12 Cantelope Way, SW5 8RQ, Swansea"

