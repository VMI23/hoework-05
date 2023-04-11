<?php

require "Video.php";

class VideoStore
{
	private ?Video $movie;
	private array $inventory = [];


	public function __construct(...$movie)
	{
		foreach ($movie as $singleMovie) {

			$this->inventory[] = $singleMovie;

		}
	}

	public function addMovie($title)
	{

		$this->inventory[] = new Video($title);

	}

	public function checkOut($title)
	{
		foreach ($this->inventory as $movie) {
			if ($movie->getTitle() == $title) {
				$movie->checkOut();
			}
		}

	}

	public function returnMovie($title)
	{

		foreach ($this->inventory as $movie) {
			if ($movie->getTitle() == $title) {
				$movie->returned();
			}
		}

	}

	public function usersRating($title, $rating)
	{
		foreach ($this->inventory as $movie) {
			if ($movie->getTitle() == $title) {
				$movie->receiveRating($rating);
			}
		}

	}


	public function listItemsInStore()
	{

		foreach ($this->inventory as $movie) {

				echo "Title: " . $movie->getTitle() . " | Rating: " . $movie->getRating() .
					($movie->getStatus() ? " | Checked out " : " | In store ") . PHP_EOL;
				echo PHP_EOL;


		}

	}

}
