<?php
$fcontents = fopen($argv[1], 'r');

function judgeFizzBuzz($n, $fizz, $buzz)
{
    if ($fizz($n) && $buzz($n)) {
        return 'FB ';
    } elseif ($fizz($n)) {
        return 'F ';
    } elseif ($buzz($n)) {
        return 'B ';
    } else {
        return $n . ' ';
    }
}

function FizzBuzz($fst_int, $sec_int, $times)
{
    # conditions
    $fizz = function($n) use ($fst_int) { return ($n % $fst_int === 0); };
    $buzz = function($n) use ($sec_int) { return ($n % $sec_int === 0); };

    # poor
    $result = '';
    for ($i = 1; $i <= $times; $i++) {
        $result .= judgeFizzBuzz($i, $fizz, $buzz);
    }
    return $result;
}

while ( ($input_lines = fgets($fcontents)) ) {
    list($fst_int, $sec_int, $times) = explode(' ', trim($input_lines));
    echo FizzBuzz($fst_int, $sec_int, $times) . PHP_EOL;
}
