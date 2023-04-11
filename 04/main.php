<?php

require "Movie.php";

$movies = [
	new Movie("Casino Royale", "Eon Productions", "PG13"),
	new Movie("Glass", "Buena Vista International", "PG"),
	new Movie("Spider-man: Into the Spider-Verse", "Columbia Pictures", "PG")
];


$moviesPG = Movie::GetPG($movies);
if (!empty($moviesPG)) {
	foreach ($moviesPG as $movie) {
		echo "Title: " . $movie->getTitle() .
			" Rating: " . $movie->getRating() .
			" Studio: " . $movie->getStudio() . PHP_EOL;
	}
}

