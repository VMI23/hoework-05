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
		return $this->name . " balance : $" . number_format($this->balance,2) . PHP_EOL;
	}
}


$accountA = new Account("A", 100.0);
$accountB = new Account("B", 0.0);
$accountC = new Account("C", 0.0);

Account::transfer($accountA, $accountB, 50);
Account::transfer($accountB, $accountC, 25);


echo $accountA;
echo $accountB;
echo $accountC;



$bartos_account = new Account("Barto's account", 100.00);
$bartos_swiss_account = new Account("Barto's account in Switzerland", 1000000.00);

echo "Initial state";
echo $bartos_account;
echo $bartos_swiss_account;

$bartos_account->withdrawal(20);
echo "Barto's account balance is now: $" . number_format($bartos_account->getBalance(),2 ) . PHP_EOL;


$bartos_swiss_account->deposit(200);
echo "Barto's Swiss account balance is now: $" . number_format($bartos_swiss_account->getBalance(),2) . PHP_EOL;

echo "Final state";
echo $bartos_account;
echo $bartos_swiss_account;






$matts_account = new Account("Matt's account", 1000);
$my_account = new Account("My account", 0);

$matts_account->withdrawal(100);
$my_account->deposit(100);

echo $matts_account;
echo $my_account;