<?php
/*
descrioption
https://www.codeeval.com/open_challenges/8/
*/

$fh = fopen($argv[1], 'r');

while ($test = fgets($fh)) {
    $ary = explode(' ', trim($test));
    $ary = array_reverse($ary);
    
    foreach ($ary as $val) {
        echo $val . ' ';
    }
    echo PHP_EOL;
}
