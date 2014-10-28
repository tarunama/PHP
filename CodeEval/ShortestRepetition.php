<?php
$fh = fopen($argv[1], 'r');

function splitary(array $ary)
{
    $strary = array();

    for ($i = 0, $limit = strlen($ary[0]); $i < $limit; $i++) {
        $c = $ary[0][$i];
        array_push($strary, $c);
    }
    return $strary;
}

while ($line = fgets($fh)) {
    $ary = explode(' ', trim($line));
    
    $sptary = splitary($ary);
    echo count(array_unique($sptary)) . PHP_EOL;
}
