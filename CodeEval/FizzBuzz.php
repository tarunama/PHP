<?php

Class FizzBuzz
{
    private $fst_int;
    private $scd_int;
    private $times;

    public function __construct() {
        $this->scd_int   = $scd_int;
        $this->fst_int = $fst_int;
        $this->times = $times;
    }

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

    public function fizzBuzz($fst_int, $scd_int, $times) {
        $result = '';
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
