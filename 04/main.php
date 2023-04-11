<?php

class Movie
{
	private string $title;
	private string $studio;
	private string $rating;

	public function __construct(string $title, string $studio, string $rating)
	{
		$this->title = $title;
		$this->studio = $studio;
		$this->rating = $rating;
	}

	public function getRating(): string
	{
		return $this->rating;
	}

	/**
	 * @return string
	 */
	public function getTitle(): string
	{
		return $this->title;
	}

}

$movies = [new Movie("Casino Royale", "Eon Productions", "PG13"),
	new Movie("Glass", "Buena Vista International", "PG"),
	new Movie("Spider-man: Into the Spider-Verse", "Columbia Pictures", "PG")];

function GetPG($movies)
{
	$moviesPG = [];

	foreach ($movies as $movie) {
		if ($movie->getRating() == "PG") {
			$moviesPG[] = $movie;
		}
	}

	return $moviesPG;
}

$moviesPG = GetPG($movies);
if(!empty($moviesPG)){
foreach ($moviesPG as $movie){
	echo $movie->getTitle().PHP_EOL;
}
}

