<?php

Class FizzBuzz
{
    public function judgeFizzBuzz($n, $f_int, $s_int) {
        if ($n % $f_int === 0 && $n % $s_int === 0) {
            return 'FB ';
        } elseif($n % $f_int === 0) {
            return 'F ';
        } elseif ($n % $s_int === 0) {
            return 'B ';
        } else {
            return $n . ' ';
        }
    }

    public function fizzBuzz($fst_int = null, $scd_int = null, $times = null) {
        for ($i = 1; $i <= $times; $i++) {
            $result .= $this->judgeFizzBuzz($i, $fst_int, $scd_int);
        }
        return $result;
    }
}

$fcontents = fopen($argv[1], 'r');

$fb = new FizzBuzz();

while ( ($input_lines = fgets($fcontents)) ) {
    list($fst_int, $scd_int, $times) = explode(' ', trim($input_lines));
    echo $fb->fizzBuzz($fst_int, $scd_int, $times) . PHP_EOL;
}
