<?php

function readFromConsole($input=null)
{
	if($input == null)
	{
		echo 'Введите элементы через пробел: ';
		$input = trim(fgets(STDIN));
	}
	return explode(" ", $input);
}

$array = readFromConsole();
if($array[2]=='+') echo $array[0]+$array[1];
if($array[2]=='-') echo $array[0]-$array[1];
if($array[2]=='*') echo $array[0]*$array[1];
if($array[2]=='/') echo $array[0]/$array[1];