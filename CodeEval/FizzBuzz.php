<?php
/*
question:https://www.codeeval.com/open_challenges/1/
*/

$fcontents = fopen($argv[1], 'r');

while (($input_lines = fgets($fcontents)) !== false) {
    //$ary = preg_split('[\s]', trim($input_lines));
    //$ary = explode(' ', trim($input_lines));
    list($fst_int, $sec_int, $int_length) = explode(' ', trim($input_lines));
    
    for ($i = 1; $i < $int_length + 1; $i++) {
        $f = $i % $fst_int;
        $b = $i % $sec_int;

        if ($f == 0) {
            echo "F ";
            $i++;
        } elseif ($b == 0) {
            echo "B ";
            $i++;
        } elseif ($f == 0 && $b == 0) {
            echo "FB ";
            $i++;
        }
        echo $i . " ";
    }
    echo "\n";
}
