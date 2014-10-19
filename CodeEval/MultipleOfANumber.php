<?php
$fh = fopen($argv[1], 'r');

while ($test = fgets($fh)) {
    
    list($x, $n_org) = explode(',', trim($test));

    $n_result = $intAry[1] * 2;
    
    while( $x > $n_result ){
        $n_result += $n_org;
    }
    
    echo $n_result . PHP_EOL;
}

fclose($fh);