<?php
require 'read.php';

function testing(){
	test('true', true);
	test('false', false);
	test('2.0', 2.0);
	test('1', 1);
	test('i`m a string!', 'i`m a string!');
	test('!stop', null);
	test('1m',  '1m');
	test('241241241.5152151.215125', '241241241.5152151.215125');
	test('.0000', 0.0000);
	test('211255.', 211255.0);
	test('24124.0', 24124.0);
	test('13e421', INF);
	test('2e8', 2e8);
	test('2e2', 2e2);
	test('e22', 'e22');
	test('22e', '22e');
}

function test($testInput, $answer)
{
	$res = readFromConsole($testInput);
	echo 'Результат '.var_export($testInput, true) .'='.var_export($res, true).($res === $answer ? ' passed':' failed').PHP_EOL;
}









