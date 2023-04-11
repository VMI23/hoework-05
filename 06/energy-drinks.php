<?php


$surveyed = 12467;
$purchased_energy_drinks = 0.14;
$prefer_citrus_drinks = 0.64;

function calculate_energy_drinkers(int $surveyed, float $purchased_energy_drinks)
{
	if ($purchased_energy_drinks >= 0.00 && $purchased_energy_drinks <= 1.00) {
		return $surveyed * $purchased_energy_drinks;
	} else {

		throw new LogicException(";(");
	}
}

function calculate_prefer_citrus(int $surveyed, float $purchased_energy_drinks, float $prefer_citrus_drinks)
{
	if ($purchased_energy_drinks >= 0.00 && $purchased_energy_drinks <= 1.00 && $prefer_citrus_drinks >= 0.00 && $prefer_citrus_drinks <= 1.00) {
		return $surveyed * $purchased_energy_drinks * $prefer_citrus_drinks;
	} else {
		throw new LogicException(";(");
	}
}

echo "Total number of people surveyed " . $surveyed . PHP_EOL;
echo "Approximately " . (calculate_energy_drinkers($surveyed, $purchased_energy_drinks)) . " bought at least one energy drink" . PHP_EOL;
echo calculate_prefer_citrus($surveyed, $purchased_energy_drinks, $prefer_citrus_drinks) . " of those " . "prefer citrus flavored energy drinks.";

