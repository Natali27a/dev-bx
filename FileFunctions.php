<?php

function getDirectoryStatus($path){
	$res = ['dirs' => [], 'files' => []];
	$currentDir = openDir($path);
	while ($element = readdir($currentDir))
	{
		if(in_array($element, [".", ".."]))
		{
			continue;
		}
		$elementPath = $path."//".$element;
		if (is_dir($elementPath))
		{
			$res["dirs"][$element] = [];
			$res["dirs"][$element]["is_readable"] = is_readable($elementPath) ? "true" : "false";
			$res["dirs"][$element]["is_writable"] = is_writable($elementPath) ? "true" : "false";
		}
		elseif (is_file($elementPath))
		{
			$res["files"][$element] = [];
			$res["files"][$element]["is_readable"] = is_readable($elementPath) ? "true" : "false";
			$res["files"][$element]["is_writable"] = is_writable($elementPath) ? "true" : "false";
			$res["files"][$element]["size"] = filesize($elementPath);
		}
	}
	closedir($currentDir);
	return printArray($res);
}

function printArray($array, $level = 1){
	$stringAnswer = "";
	if(!empty($array)){
		$stringAnswer .= str_repeat(" ", ($level - 1) * 4);
	}
	$stringAnswer .= "[";
	if(!empty($array)){
		$stringAnswer .= "\n";
	}
	foreach ($array as $key => $val)
	{

		$stringAnswer .=str_repeat(" ", $level*4);
		$stringAnswer .= $key." => ";
		if(is_array($val)){
			if(!empty($val))
			{
				$stringAnswer .= "\n";

				$stringAnswer .= printArray($val, $level + 1);
				$stringAnswer .= str_repeat(" ", $level * 4);
				$stringAnswer .= "],\n";
			}
			else{
				$stringAnswer .= "[],\n";
			}
		}
		else{
			$stringAnswer .= $val.",\n";
		}
	}

	if($level == 1){
		$stringAnswer .= "];";
	}
	else if(!empty($array)){
		$stringAnswer .= "";
	}

	return $stringAnswer;

}