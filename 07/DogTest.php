<?php

class DogTest
{
	public function Main()
	{

		$sam = new Dog("Sam", "male");
		$molly = new Dog("Molly", "female");
		$sparky = new Dog("Sparky", "male");
		$rocky = new Dog("Rocky", "male", $molly, $sam);
		$lady = new Dog("Lady", "female");
		$buster = new Dog("Buster", "male", $lady, $sparky);
		$coco = new Dog("Coco", "female", $molly, $buster);
		$max = new Dog("Max", "male", $lady, $rocky);

		echo $sparky->getName() . "'s Father's name: " . $sparky->fathersName();
		echo PHP_EOL;
		echo $coco->getName() . "'s Father's name: " . $coco->fathersName();
		echo PHP_EOL;
		echo $coco->getName()." has the same  Mother as  ".$rocky->getName()." : ".
			($coco->hasSameMotherAs($rocky) ? "ture" : "false");


	}

}