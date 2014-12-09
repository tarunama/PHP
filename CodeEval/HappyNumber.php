<?php
$fh = fopen($argv[1], 'r');

while ($test = fgets($fh)) {
    $line = trim($test);
    if ($line < 0) { continue; }
    
    $counter = 0;
    $result = 0;
    while($counter < 10) {
        $ary = array();
        $int_ary = str_split($line);
        foreach ($int_ary as $val) {
            $ary[] = $val * $val;
        }
        $line = array_sum($ary);
        if ($line === 1) {
            $result = 1;
            break;
        }
        $counter++;
        $int_ary = $line;
    }
    echo $result . PHP_EOL;
}
