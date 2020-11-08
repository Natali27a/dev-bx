<?php

require 'test.php';

testing();
while (true){
	$res = readFromConsole();
	if($res === 'stop')break;
	echo var_export($res, true).PHP_EOL;
}