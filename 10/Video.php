<?php

class Video
{

	private string $title;

	private bool $checkedOut;

	private float $rating;

	private array $usersWhoRated;


	public function __construct(string $title, bool $checkedOut = false, float $rating = 0.0)
	{
		$this->title = $title;
		$this->checkedOut = $checkedOut;
		$this->rating = $rating;
	}

	public function checkOut()
	{
		$this->checkedOut = true;
	}

	public function returned()
	{
		$this->checkedOut = false;

	}

	public function receiveRating($rating)
	{
		$this->usersWhoRated[] = $rating;

		$averageRating = array_sum($this->usersWhoRated) / count($this->usersWhoRated);


		$this->rating = $averageRating;
	}


	public function getTitle(): string
	{
		return $this->title;
	}


	public function getRating(): float
	{
		return $this->rating;
	}

	public function getStatus()
	{
		return $this->checkedOut;
	}


}