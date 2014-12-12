<?php

$fcontents = fopen($argv[1], 'r');

function FizzBuzz($fst_int, $sec_int, $int_num)
{
    $fizz = function($n) use ($fst_int) { return ($n % $fst_int === 0); };
    $buzz = function($n) use ($sec_int) { return ($n % $sec_int === 0); };

    for ($i = 1; $i < $int_num + 1; $i++) {
        if ($fizz($i) && $buzz($i)) {
            echo 'FB ';
            continue;
        } elseif ($fizz($i)) {
            echo 'F ';
            continue;
        } elseif ($buzz($i)) {
            echo 'B ';
            continue;
        } else {
            echo $i . ' ';   
        }
    }
    echo PHP_EOL;
}

while ( ($input_lines = fgets($fcontents)) ) {
    list($fst_int, $sec_int, $int_num) = explode(' ', trim($input_lines));

    FizzBuzz($fst_int, $sec_int, $int_num);
}
