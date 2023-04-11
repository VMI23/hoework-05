<?php

class SavingsAccount
{
	private float $balance;
	private float $rate;
	public function __construct(float $balance, float $rate)
	{
		$this->balance = $balance;
		$this->rate = $rate;
	}

	public function withdrawal($amount)
	{
		$this->balance -= $amount;
	}

	public function deposit($amount)
	{
		$this->balance += $amount;
	}

	public function monthlyInterest()
	{
		$monthlyRate = $this->rate / 12;
		$monthlyInterest = $this->balance * $monthlyRate;

		$this->balance += $monthlyInterest;
	}

	public function getBalance(): float
	{
		return $this->balance;
	}


}

function calcBalanceEndMonth()
{
	$startingBalance = readline("How much money is in the account?: ");
	$rate = readline("Enter the annual interest rate: ");
	$months = readline("How long has the account been opened? ");

	$savings = new SavingsAccount($startingBalance, $rate);

	$totalDeposited = 0;
	$totalWithdrawn = 0;

	for ($i = 1; $i <= $months; $i++) {
		$monthlyDeposited = (float)readline("Enter amount deposited for month: $i: ");
		$savings->deposit($monthlyDeposited);
		$totalDeposited += $monthlyDeposited;

		$monthlyWithdrawn = (float)readline("Enter amount withdrawn for month $i: ");
		$savings->withdrawal($monthlyWithdrawn);
		$totalWithdrawn += $monthlyWithdrawn;

		$savings->monthlyInterest();

	}

	$endBalance = $savings->getBalance();
	$monthlyInterestEarnings = $endBalance - $startingBalance - $totalDeposited + $totalWithdrawn;

	echo "Total deposited: $" . number_format($totalDeposited, 2) . PHP_EOL;
	echo "Total withdrawn: $" . number_format($totalWithdrawn, 2) . PHP_EOL;
	echo "Interest earned: $" . number_format($monthlyInterestEarnings, 2) . PHP_EOL;
	echo "Ending balance: $" . number_format($savings->getBalance(), 2);

}

calcBalanceEndMonth();