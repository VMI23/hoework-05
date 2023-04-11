<?php

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
			} else echo "Increments should be 1 km " . PHP_EOL;
			if ($this->millage % 10 == 0) {
				$this->fuelGauge->burnFuel();
			}

		} else {
			echo "Millage counter reached max" . PHP_EOL;
			$this->millage = 0;
		}
	}

}