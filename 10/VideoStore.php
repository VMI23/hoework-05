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



	public function listItemsInStore()
	{

		foreach ($this->inventory as $key => $movie) {
			$statuss = ($movie->getStatus() ? " | Checked out " : " | In store ");

			echo $key . " Title: " . $movie->getTitle() . " | Rating: " . $movie->getRating() . $statuss . PHP_EOL;
			echo PHP_EOL;


		}

	}

	public function getByIndex(int $id): ?Video
	{
		return $this->inventory[$id] ?? null;

	}

}
