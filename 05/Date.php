<?php

class Date
{
	private string $month;
	private int $day;
	private int $year;


	public function __construct(string $month, int $day, int $year)
	{
		if ($month < 1 || $month > 12) {
			throw new LogicException("Invalid month value: $month");
		}
		if ($day < 1 || $day > 31) {
			throw new LogicException("Invalid Day value: $day");
		}

		$this->month = $month;
		$this->day = $day;
		$this->year = $year;

	}

	public function __toString()
	{
		return "Day: " . $this->getDay() . " /Month: " . $this->getMonth() . " /Year: " . $this->getYear();
	}

	public function getDay(): int
	{
		return $this->day;
	}

	public function setDay(int $day): void
	{
		$this->day = $day;
	}

	public function getMonth(): string
	{
		return $this->month;
	}

	public function setMonth(string $month): void
	{
		$this->month = $month;
	}

	public function getYear(): int
	{
		return $this->year;
	}

	public function setYear(int $year): void
	{
		$this->year = $year;
	}

}
