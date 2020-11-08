<?php

function readFromConsole($input=null)
{
	if($input == null){
		echo 'Введите строку (для выхода напишите stop): ';
		$input = trim(fgets(STDIN));
	}
	if(is_numeric($input)){
		$exppos = strpos($input,'e');
		if(strpos($input,'.') !== false || ($exppos !== 0 && $exppos !== $input.ob_get_length() - 1 && substr_count($input, 'e') === 1 )) return (double)$input;
		return (int)$input;
	}
	if($input == 'true') return true;
	if($input == 'false') return false;
	if(strpos($input,'!') === 0) return null;
	return $input;
}
