<?php

class Point
{
	public int $x;
	public int $y;

	public function __construct(int $x, int $y)
	{
		$this->x = $x;
		$this->y = $y;
	}


	public function swapPoints(Point $p1, Point $p2)
	{
		$justForNowX = $p1->getX();
		$justForNowY = $p1->getY();

		$p1->setX($p2->getX());
		$p1->setY($p2->getY());

		$p2->setX($justForNowX);
		$p2->setY($justForNowY);
	}


	public function getX(): int
	{
		return $this->x;
	}


	public function setX(int $x): void
	{
		$this->x = $x;
	}


	public function getY(): int
	{
		return $this->y;
	}


	public function setY(int $y): void
	{
		$this->y = $y;
	}

}


