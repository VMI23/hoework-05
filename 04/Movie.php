<?php

class Movie
{
	//title, which is a string representing the title of the movie
	//studio, which is a string representing the studio that made the movie
	//rating, which is a string representing the rating of the movie (i.e. PG­13, R, etc)
	private string $title;
	private string $studio;
	private string $rating;

//Write a constructor for the class Movie, which takes the title of the movie,
//studio, and rating as its arguments, and sets the respective class variables to these values.
	public function __construct(string $title, string $studio, string $rating)
	{
		$this->title = $title;
		$this->studio = $studio;
		$this->rating = $rating;
	}

	public static function GetPG($movies)
	{
		$moviesPG = [];

		foreach ($movies as $movie) {
			if ($movie->getRating() == "PG") {
				$moviesPG[] = $movie;
			}
		}

		return $moviesPG;
	}

	public function getRating(): string
	{
		return $this->rating;
	}

	/**
	 * @return string
	 */
	public function getStudio(): string
	{
		return $this->studio;
	}

	public function getTitle(): string
	{
		return $this->title;
	}

}