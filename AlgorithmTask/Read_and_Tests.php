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
	public function __construct($Rpos1,$Cpos1)
	{
		$this -> startRow = $Rpos1;
		$this -> startCol = $Cpos1;
	}

	public function Go($Rpos2,$Cpos2){
		$this -> finishRow = $Rpos2;
		$this -> finishCol = $Cpos2;

		if($this -> startRow<=0 || $this -> startRow>8) return "Error position";
		if($this -> startCol<=0 || $this -> startCol>8) return "Error position";
		if($this -> finishRow<=0 || $this -> finishRow>8) return "Error position";
		if($this -> finishCol<=0 || $this -> finishCol>8) return "Error position";

		if(
			(	(($this -> startRow)===($this -> finishRow))or
			 	(($this -> startCol)===($this -> finishCol))	) and
			(!(	(($this -> startRow)===($this -> finishRow)) and
				(($this -> startCol)===($this -> finishCol))	))
		)
		{
			return "Yes";
		}
		return "No";
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

	$test5 = "2 2 2 2";
	$answer5 = "No";

	$test6 = "-1 0 -1 1";
	$answer6 = "Error position";

	$test7 = "2 2 2 9";
	$answer7 = "Error position";

	$test8 = "1 2 -1 2";
	$answer8 = "Error position";


	test($test1, $answer1);
	test($test2, $answer2);
	test($test3, $answer3);
	test($test4, $answer4);
	test($test5, $answer5);
	test($test6, $answer6);
	test($test7, $answer7);
	test($test8, $answer8);

}

function test($testInput, $answer)
{
	$array = readFromConsole($testInput);
	$res = new ChessRook($array[0], $array[1]);
	echo 'Результат: for input '.var_export($testInput, true)." - ".$answer.($res->Go( $array[2], $array[3]) === $answer ? '  passed':'  failed').PHP_EOL;
}


