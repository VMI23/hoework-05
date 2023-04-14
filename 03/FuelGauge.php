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

		echo "Current fuel amount is " . $this->fuelAmount . " l" . PHP_EOL;
	}

	public function addFuel(int $liters)
	{
		if ($this->getFuelAmount() <= 70) {
			return $this->fuelAmount += $liters;
		} else {
			echo "Tank is full!" . PHP_EOL;
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