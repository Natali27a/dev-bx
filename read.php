<?php

function readFromConsole($arg)
{
	echo $arg;
	$input = trim(fgets(STDIN));
	$res = explode(" ",$input);
	$output = 0;
	for ($i=0; $i<count($res); $i++)
	{
		$res[$i] = (int)$res[$i];
		$output += $res[$i];
	}
	return $output;

}
