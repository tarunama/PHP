<?php
/*
question:https://www.codeeval.com/open_challenges/1/
*/
$fcontents = fopen($argv[1], "r");
while(($input_lines = fgets($fcontents)) ==! false) {
    $ary = array();
    $ary = preg_split("[\s]",$input_lines);
    
    for ($i = 1; $i < $ary[2] + 1; $i++) {
        $f = $i % $ary[0];
        $b = $i % $ary[1];

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
