<?php
/*
question:https://www.codeeval.com/open_challenges/1/
*/

$fcontents = fopen($argv[1], 'r');

while (($input_lines = fgets($fcontents)) !== false) {

    list($fst_int, $sec_int, $int_num) = explode(' ', trim($input_lines));
    
    for ($i = 1; $i < $int_num + 1; $i++) {
        $f = $i % $fst_int;
        $b = $i % $sec_int;

        if (($f === 0) && ($b === 0)) {
            echo 'FB ';
            continue;
        } elseif ($f === 0) {
            echo 'F ';
            continue;
        } elseif ($b === 0) {
            echo 'B ';
            continue;
        } else {
            echo $i . ' ';   
        }
    }
    echo PHP_EOL;
}
fclose($fcontents);
