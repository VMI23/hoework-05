<?php

class FuelGauge
{
	private int $fuelAmount;


	public function __construct(int $fuelAmount = 0)
	{
		$this->fuelAmount = $fuelAmount;
	}

	public function printCurrentFuel()
	{

		echo "current fuel amount is " . $this->fuelAmount . " l" . PHP_EOL;
	}

	public function addFuel(int $liters)
	{
		if ($this->getFuelAmount() <= 70) {
			$this->fuelAmount += $liters;
		} else {
			return "Tank is full" . PHP_EOL;
		}
	}


	public function getFuelAmount()
	{

		return $this->fuelAmount;
	}


	public function burnFuel(int $liters = 1)
	{
		return $this->fuelAmount -= $liters;

	}


}

class Odometer
{
	private int $millage;
	private int $maxMillage = 999999;
	private FuelGauge $fuelGauge;


	public function __construct(int $millage, FuelGauge $fuelGauge)
	{
		$this->millage = $millage;
		$this->fuelGauge = $fuelGauge;
	}


	public function getMillage(): int
	{
		return $this->millage;
	}

	public function addMillage(int $millage): void
	{
		if ($this->millage <= $this->maxMillage) {

			if ($millage == 1) {
				$this->millage += $millage;
			} else echo "Increments should be 1 km ";
			if ($this->millage % 10 == 0) {
				$this->fuelGauge->burnFuel();
			}

		} else {
			echo "Millage counter reached max";
			$this->millage = 0;
		}
	}

}


//Demonstrate the classes by creating instances of each.
//Simulate filling the car up with fuel,
// and then run a loop that increments the odometer until the car runs out of fuel.
// During each loop iteration, print the car’s current mileage and amount of fuel.


$fuelTank = new FuelGauge(5);
$odometer = new Odometer(0, $fuelTank);

//$fuelTank->addFuel(70);
//$fuelTank->printCurrentFuel();
//$fuelTank->burnFuel();
//$fuelTank->printCurrentFuel();


while (!$fuelTank->getFuelAmount() == 0) {


	$odometer->addMillage(1);
	echo "Millage is ".$odometer->getMillage().PHP_EOL;
	if($fuelTank->getFuelAmount() == 0 ){
		echo "Fuel tank is empty".PHP_EOL;
	}

	$fuelTank->printCurrentFuel();
	echo PHP_EOL;



}
