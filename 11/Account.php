<?php

class Account
{
	private string $name;

	private float $balance;

	public function __construct(string $name, float $balance)
	{
		$this->name = $name;
		$this->balance = $balance;
	}

	static function transfer(Account $from, Account $to, int $howMuch)
	{
		if ($from->getBalance() >= $howMuch) {

			$to->deposit($howMuch);
			$from->withdrawal($howMuch);
		} else {
			throw new LogicException("Insufficient funds");
		}
	}


	public function getBalance(): float
	{
		return $this->balance;
	}

	public function deposit($amount): float
	{
		return $this->balance += $amount;
	}

	public function withdrawal($amount): float
	{
		return $this->balance -= $amount;
	}


	public function getName(): string
	{
		return $this->name;
	}

	public function __toString()
	{
		return $this->name . " balance : $" . number_format($this->balance, 2) . PHP_EOL;
	}
}