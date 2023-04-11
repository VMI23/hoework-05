<?php

require "Application.php";

$matrix = new Video("M");
$spiderMan = new Video("Spiderman");
$godFather = new Video("Godfather II");
$starWars = new Video("Star Wars Episode IV: A New Hope");

$videoStore = new VideoStore($matrix, $spiderMan, $godFather, $starWars);

$app = new Application($videoStore);
$app->run();