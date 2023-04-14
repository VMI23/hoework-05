<?php

class Video
{
	private string $title;
	private bool $checkedOut;

	private array $ratings = [];

	public function __construct(string $title, bool $checkedOut = false)
	{
		$this->title = $title;
		$this->checkedOut = $checkedOut;
	}

	public function checkOut()
	{
		$this->checkedOut = true;
	}

	public function returned()
	{
		$this->checkedOut = false;

	}

	public function receiveRating($rating): void
	{
		$this->ratings[] = $rating;


	}

	public function getTitle(): string
	{
		return $this->title;
	}

	public function getRating(): float
	{
		if (count($this->ratings) > 0) {
			return array_sum($this->ratings) / count($this->ratings);
		}
		return 0;

	}

	public function getStatus()
	{
		return $this->checkedOut;
	}

}