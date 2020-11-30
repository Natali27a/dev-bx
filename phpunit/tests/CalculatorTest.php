<?php
//CalculatorTest.php
use \PHPUnit\Framework\TestCase;
require_once (__DIR__ . '/../lib/Calculator.php');

class CalculatorTest extends TestCase
{
	public function testAdd(): void
	{
		$calculator = new Calculator();
		self::assertEquals(4, $calculator->add(2, 2));
		self::assertEquals(-50, $calculator->add(-70, 20));
		self::assertEquals(17, $calculator->add(15, 2));
		self::assertEquals(8, $calculator->add(-2, 10));
	}

	public function testSubtract(): void
	{
		$calculator = new Calculator();
		self::assertEquals(-5, $calculator->subtract(0, 5));
		self::assertEquals(5, $calculator->subtract(10, 5));
		self::assertEquals(99, $calculator->subtract(100, 1));
		self::assertEquals(-6, $calculator->subtract(19, 25));
	}

	public function testDivideException(): void
	{
		$calculator = new Calculator();
		$this->expectExceptionMessage("Divider cant be a zero");
		self::assertEquals("Divider cant be a zero", $calculator->divide(5, 0));
		self::assertEquals(0, $calculator->divide(0, 5));
		self::assertEquals(-2, $calculator->divide(10, -5));
		self::assertEquals(100, $calculator->divide(100, 1));
		self::assertEquals(1.5, $calculator->divide(3, 2));
	}

	public function testMultiply(): void
	{
		$calculator = new Calculator();
		self::assertEquals(0, $calculator->multiply(0, 5));
		self::assertEquals(50, $calculator->multiply(10, 5));
		self::assertEquals(-100, $calculator->multiply(100, -1));
		self::assertEquals(6, $calculator->multiply(-2, -3));
	}

	public function testExponentiation(): void
	{
		$calculator = new Calculator();
		self::assertEquals(32, $calculator->exponentiation(2, 5));
		self::assertEquals(100000, $calculator->exponentiation(10, 5));
		self::assertEquals(0.0001, $calculator->exponentiation(100, -2));
		self::assertEquals(1, $calculator->exponentiation(-2, 0));
	}

	public function testSquareRoot(): void
	{
		$calculator = new Calculator();
		$this->expectExceptionMessage("Argument cant be a negative");
		self::assertEquals(2, $calculator->squareRoot(4));
		self::assertEquals("Argument cant be a negative", $calculator->squareRoot(-100));
		self::assertEquals(100, $calculator->squareRoot(10000));
		self::assertEquals(1, $calculator->squareRoot(1));
	}

}
