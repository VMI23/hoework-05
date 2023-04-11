<?php

require "Date.php";
$date = new Date(10, 12, 1990);

echo $date;
echo PHP_EOL;

$date->setMonth(5);
$date->setDay(8);
$date->setYear(2024);

echo $date;
echo PHP_EOL;