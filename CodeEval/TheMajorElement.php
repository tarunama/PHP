<?php
$fh = fopen($argv[1], "r");

function majorElement($line)
{
    $countArr = array_count_values($line);
    $maxInArr = max($countArr);
    $result = array_keys($countArr, $maxInArr);
    if ($maxInArr >= (count($line) / 2) ) {
        return $result[0];
    } else {
        return 'None';
    }
}

while ($test = fgets($fh)) {
    $line = explode(",", trim($test));
    echo majorElement($line) . PHP_EOL;
}
