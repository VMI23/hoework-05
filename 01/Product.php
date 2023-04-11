<?php

class Product
{
	private string $name;
	private float $startPrice;

	private int $amount;

	public function __construct(string $name, float $startPrice, int $amount)
	{
		$this->name = $name;
		$this->startPrice = $startPrice;
		$this->amount = $amount;
	}


	public function printProduct()
	{
		$text = $this->name . " price " . $this->startPrice . ", amount " . $this->amount;
		return $text;
	}

	public function setStartPrice(float $startPrice): void
	{
		$this->startPrice = $startPrice;
	}

	public function setAmount(int $amount): void
	{
		$this->amount = $amount;
	}


}


class Main
{
	private array $products = [];

	public function main()
	{
		$this->products = [new Product("Banana",
			1.1, 13),
			new Product("Logitech mouse", 70.00, 14),
			new Product("iPhone 5s", 999.99, 3),
			new Product("Epson EB-U05", 440.46, 1),
			];
	}

	public function printAll()
	{
		foreach ($this->products as $product) {

			echo $product->printProduct() . PHP_EOL;
		}
	}

}





