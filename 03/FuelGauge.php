<?php

class FuelGauge
{


	private int $tank;

	public function __construct(int $fuelAmount = 0)
	{
		$this->tank = $fuelAmount;
	}

	public function printCurrentFuel(): void
	{

		echo "Current fuel amount is " . $this->tank . " l" . PHP_EOL;
	}

	public function addFuel(int $liters): void
	{

		if ($this->tank >= 70) return;
		if ($this->tank + $liters > 70) return;
		if ($this->getFuelAmount() <= 70) {
			$this->tank += $liters;
		} else {
			echo "Tank is full!" . PHP_EOL;
		}
	}

	public function getFuelAmount()
	{
		return $this->tank;
	}

	public function burnFuel(int $liters = 1)
	{
		return $this->tank -= $liters;
	}

}