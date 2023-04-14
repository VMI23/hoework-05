<?php

//There are some special cases you should handle. If the balance is negative, put the - sign before the dollar sign.
//Also, always display the cents as a two-digit number.
//For example, if the same object had a balance of -17.5, your method should return:
//Benson, $17.50


class BankAccount
{

	private float $balance;
	private string $name;

	public function __construct(float $balance, string $name)
	{
		$this->balance = $balance;
		$this->name = $name;
	}

	public function showUserNameAndBalance(): string
	{

		if ($this->balance < 0.00) {
			return $this->name . ", -$" . abs(number_format($this->balance, 2));

		}
		return $this->name . ", $" . number_format($this->balance, 2);
	}

}

$ben = new BankAccount(17.25, "Benson");

echo $ben->showUserNameAndBalance();
