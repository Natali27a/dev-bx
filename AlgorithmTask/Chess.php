<?php
require 'Read_and_Tests.php';


$array = readFromConsole();
$Game = new ChessRook($array[0], $array[1], $array[2], $array[3]);
print($Game->comparePos()."\n");
testing();
