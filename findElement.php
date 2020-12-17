<?php

function readFromConsole($element)
{
	echo 'Введите элементы через пробел: ';
	$input = trim(fgets(STDIN));
	$arr = explode(" ", $input);
	foreach( $arr as $key => $value)
	{
		if( $value === $element) {
			echo "true";
			return;
		}
	}
	echo "false";
}

echo 'Введите искомый элемент: ';
$res = trim(fgets(STDIN));
readFromConsole($res);