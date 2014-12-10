<?php
$fh = fopen($argv[1], 'r');

function happyNumber($num) {
    $result = 0;
    $counter = 0;
    while($counter < 50) {
        $ary = array();
        $int_ary = str_split($num);
        foreach ($int_ary as $val) {
            // 5.6 から ** 2
            $ary[] = $val * $val;
        }

        $num = array_sum($ary);
        //var_dump($eleSum);
        if ($num === 1) {
            $result = 1;
            break;
        }
        $counter++;
        $int_ary = $num;
    }
    return $result;
}

while ($test = fgets($fh)) {
    $line = trim($test);
    
    echo happyNumber($line) . PHP_EOL;
}
