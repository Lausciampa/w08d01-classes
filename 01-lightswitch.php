<?php

class LightSwitch
{
	private $on;


	public function __construct()
	{
		$this->on = false;
	}

	public function turnOn()
	{
		$this->on = true;
		return $this;
	}

	public function turnOff()
	{
		$this->on = false;
		return $this;
	}

	public function isOn()
	{
		if ($this->on === true) {
			return true;
		} else {
			return false;
		}
	}

}



$lightSwitch = new LightSwitch();

// you can turn it on
$lightSwitch->turnOn();

// you can check whether it is on or not
var_dump($lightSwitch->isOn()); // bool(true)

// you can turn it off
$lightSwitch->turnOff();

var_dump($lightSwitch->isOn()); // bool(false)



// Create a class that represents a light switch
