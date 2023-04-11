<?php
//Create a class called Date that includes: three pieces of information as instance variables — a month, a day and a year.
//
//Your class should have a constructor that initializes the three instance variables and assumes that the values provided are correct. Provide a set and a get for each instance variable.
//
//Provide a method DisplayDate that displays the month, day and year separated by forward slashes /.
//
//Write a test application named DateTest that demonstrates class Date capabilities.

class Date
{
	private string $month;
	private int $day;
	private int $year;


	public function __construct(string $month, int $day, int $year)
	{
		if($month < 1 || $month > 12){
			echo "Invalid month value: $month".PHP_EOL;
		}
		if($day < 1 || $day > 31){
			echo "Invalid day value: $day".PHP_EOL;
		}

			$this->month = $month;
			$this->day = $day;
			$this->year = $year;

	}


	public function getMonth(): string
	{
		return $this->month;
	}


	public function setMonth(string $month): void
	{
		$this->month = $month;
	}


	public function getDay(): int
	{
		return $this->day;
	}


	public function setDay(int $day): void
	{
		$this->day = $day;
	}


	public function getYear(): int
	{
		return $this->year;
	}


	public function setYear(int $year): void
	{
		$this->year = $year;
	}


}

$date = new Date(23,12,1990);

echo $date->getDay().PHP_EOL;
echo $date->getYear().PHP_EOL;
echo $date->getMonth().PHP_EOL;
echo PHP_EOL;


$date->setMonth(5);
$date->setDay(8);
$date->setYear(2024);



echo $date->getDay().PHP_EOL;
echo $date->getYear().PHP_EOL;
echo $date->getMonth().PHP_EOL;
echo PHP_EOL;