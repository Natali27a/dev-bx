<?php
//Calculator.php

class Calculator
{
	public function add(int $a, int $b): int
	{
		return $a + $b;
	}

	public function subtract(int $a, int $b): int
	{
		return $a - $b;
	}

	public function multiply(int $a, int $b): int
	{
		return $a * $b;
	}

	public function divide(int $a, int $b): float
	{
		if($b === 0)
		{
			throw new InvalidArgumentException('Divider cant be a zero');
		}

		return $a / $b;
	}

	public function exponentiation(int $a, int $b): float
	{
		return pow($a,$b);
	}
	public function squareRoot(int $a): float
	{
		if($a < 0)
		{
			throw new InvalidArgumentException('Argument cant be a negative');
		}
		return sqrt($a);
	}
}