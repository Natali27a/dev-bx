<?php

function readFromConsole($input=null)
{
	if($input == null){
		echo 'Введите строку (для выхода напишите stop): ';
		$input = trim(fgets(STDIN));
	}
	$array = explode(" ", $input);
	array_pop($array);
	return findCountMax($array);
}

function findCountMax($arr)
{
	$max= max($arr);
	$count=0;
	foreach( $arr as $key => $value)
	{
		if( $value === $max) $count=$count+1;
	}
	return $count;
}

function testing(){
	$test1 = "1 7 9 stop";
	$answer1 = 1;

	$test2 = "1 2 3 4 5 stop";
	$answer2 = 1;

	$test3 = "1 3 3 3 2 1 stop";
	$answer3 = 3;

	$test4 = "5 6 43 43 4 stop";
	$answer4 = 2;

	$test5 = "2 2 2 2 2 2 2 2 2 2 stop";
	$answer5 = 10;

	test($test1, $answer1);
	test($test2, $answer2);
	test($test3, $answer3);
	test($test4, $answer4);
	test($test5, $answer5);
}

function test($testInput, $answer)
{
	$res = readFromConsole($testInput);
	echo 'Результат: for input '.var_export($testInput, true).($res === $answer ? ' passed':' failed').PHP_EOL;
}
