<?php

class Bike 
{
	public $price;
	public $max_speed;
	public $miles;

	public function __construct($price_p, $max_speed_p) 
	{
		$this->price = $price_p;
		$this->max_speed = $max_speed_p;
		$this->miles = 0;
	}

	function displayInfo()
	{
		echo $this->price;
		echo '<br>';
		echo $this->max_speed;
		echo '<br>';
		echo $this->miles;
		echo '<br>';
	}

	function drive()
	{
		echo "Driving...";
		$this->miles+=10;
		return ($this->miles);
	}

	function reverse()
	{
		echo "Reversing...";
		$this->miles-=5;
		if($this->miles < 0)
		{
			$this->miles = 0;
		}
		return ($this->miles);
	}
}

$bike1 = new Bike(200, '25mph');
$bike1->drive();
$bike1->drive();
$bike1->drive();
$bike1->reverse();
$bike1->displayInfo();


$bike2 = new Bike(200, '25mph');
$bike2->drive();
$bike2->drive();
$bike2->reverse();
$bike2->reverse();
$bike2->displayInfo();

$bike3 = new Bike(200, '25mph');
$bike3->reverse();
$bike3->reverse();
$bike3->reverse();
$bike3->displayInfo();

?>