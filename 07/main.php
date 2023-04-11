<?php

class Dog
{
	private string $name;
	private string $sex;

	private ?Dog $mother;//the $mother property can either hold a Dog object or a null value.

	private ?Dog $father;


	public function __construct(string $name, string $sex, ?Dog $mother = NULL, ?Dog $father = NULL)
	{

		$this->name = $name;
		$this->sex = $sex;
		$this->mother = $mother;
		$this->father = $father;
	}

	public function getName(): string
	{
		return $this->name;
	}


	public function setName(string $name): void
	{
		$this->name = $name;
	}


	public function getSex(): string
	{
		return $this->sex;
	}


	public function setSex(string $sex): void
	{
		$this->sex = $sex;
	}

	public function fathersName(): string
	{
		if ($this->father == NULL) {
			return "Unknown";
		} else {
			return $this->father->name;
		}
	}

	public function setFather(?Dog $father): void
	{
		$this->father = $father;
	}

	public function hasSameMotherAs(Dog $dog): bool
	{
		if ($this->mother == null || $dog->mother == null) {
			return false;
		} else {
			return $this->mother === $dog->getMother();
		}
	}

	public function getMother(): Dog
	{
		return $this->mother;
	}

	public function setMother(?Dog $mother): void
	{
		$this->mother = $mother;
	}


}


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

		echo $sparky->fathersName();
		echo PHP_EOL;
		echo $coco->fathersName();
		echo PHP_EOL;
		echo $coco->hasSameMotherAs($rocky);


	}

}

$dogTest = new DogTest();

$dogTest->Main();
