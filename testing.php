<?php
require 'FileFunctions.php';

function testing(){
	$test1 = 'empty';
	$answer1 = "[
    dirs => [],
    files => [],
];";

	$test2 = 'Php';
	$answer2 = '[
    dirs => [],
    files => 
    [
        lesson.php => 
        [
            is_readable => true,
            is_writable => true,
            size => 155,
        ],
        LICENSE => 
        [
            is_readable => true,
            is_writable => true,
            size => 1087,
        ],
        read.php => 
        [
            is_readable => true,
            is_writable => true,
            size => 580,
        ],
        test.php => 
        [
            is_readable => true,
            is_writable => true,
            size => 675,
        ],
    ],
];';

	$test3 = "Site";
	$answer3 = "[
    dirs => [],
    files => 
    [
        123.png => 
        [
            is_readable => true,
            is_writable => true,
            size => 1047,
        ],
        2.png => 
        [
            is_readable => true,
            is_writable => true,
            size => 1058,
        ],
        3.png => 
        [
            is_readable => true,
            is_writable => true,
            size => 700,
        ],
        4.png => 
        [
            is_readable => true,
            is_writable => true,
            size => 1262,
        ],
        background.png => 
        [
            is_readable => true,
            is_writable => true,
            size => 514946,
        ],
        Homework.html => 
        [
            is_readable => true,
            is_writable => true,
            size => 3189,
        ],
        style.css => 
        [
            is_readable => true,
            is_writable => true,
            size => 2299,
        ],
    ],
];";

	$test4 = "test1";
	$answer4 = "[
    dirs => [],
    files => [],
];";

	test($test1, $answer1);
	test($test2, $answer2);
	test($test3, $answer3);
	test($test4, $answer4);
}

function test($testInput, $answer)
{
	$res = getDirectoryStatus($testInput);
	echo 'Результат: for input '.var_export($testInput, true) .($res === $answer ? ' passed':' failed').PHP_EOL;
}

testing();