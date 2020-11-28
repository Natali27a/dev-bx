<?php
require 'Read_and_Tests.php';


$array = readFromConsole();
$Game = new ChessRook($array[0], $array[1]);
print($Game->Go($array[2], $array[3])."\n");
testing();
