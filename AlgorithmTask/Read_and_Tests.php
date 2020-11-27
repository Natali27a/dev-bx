<?php
function readFromConsole($input=null)
{
	if($input == null)
	{
		echo 'Введите позиции через пробел: ';
		$input = trim(fgets(STDIN));
	}
	return explode(" ", $input);
}

class ChessRook
{
	public function __construct($Rpos1,$Cpos1,$Rpos2,$Cpos2)
	{
		$this -> startRow = $Rpos1;
		$this -> startCol = $Cpos1;
		$this -> finishRow = $Rpos2;
		$this -> finishCol = $Cpos2;
	}

	public function comparePos(){
		if((($this -> startRow)==($this -> finishRow))||(($this -> startCol)==($this -> finishCol)))return "Yes";
		else return "No";
	}
}


function testing(){
	$test1 = "1 2 1 7";
	$answer1 = "Yes";

	$test2 = "1 2 3 4 ";
	$answer2 = "No";

	$test3 = "1 3 8 3";
	$answer3 = "Yes";

	$test4 = "5 5 2 2";
	$answer4 = "No";


	test($test1, $answer1);
	test($test2, $answer2);
	test($test3, $answer3);
	test($test4, $answer4);

}

function test($testInput, $answer)
{
	$array = readFromConsole($testInput);
	$res = new ChessRook($array[0], $array[1], $array[2], $array[3]);
	echo 'Результат: for input '.var_export($testInput, true).($res->comparePos() === $answer ? ' passed':' failed').PHP_EOL;
}


