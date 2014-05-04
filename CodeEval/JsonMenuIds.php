<?php

$fh = fopen($argv[1], "r");

while ($line = fgets($fh)) {
    $ary = array();
    $ary[] = json_decode($line, true);
    /*
    for ($i = 0; $i < count($ary) - 1; $i++) {
        echo $ary[$i][];
    }
    */
    var_dump($ary);
}

fclose($fh);
