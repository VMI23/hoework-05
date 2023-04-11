<?php

require "FuelGauge.php";
require "Odometer.php";

$fuelTank = new FuelGauge(10);
$odometer = new Odometer(999989, $fuelTank);

//$fuelTank->addFuel(70);
//$fuelTank->printCurrentFuel();
//$fuelTank->burnFuel();
//$fuelTank->printCurrentFuel();

while (!$fuelTank->getFuelAmount() == 0) {

	$odometer->addMillage(1);
	echo "Millage is " . $odometer->getMillage() . PHP_EOL;
	if ($fuelTank->getFuelAmount() == 0) {
		echo "Fuel tank is empty" . PHP_EOL;
	}

	$fuelTank->printCurrentFuel();
	echo PHP_EOL;

}
