<?php
$fh = fopen($argv[1], 'r');

while ( fscanf($fh, "%d,%d,%d", $n, $p1, $p2) )
{
    $bitAry = strrev( decbin($n) );

    if ($bitAry[$p1 - 1] === $bitAry[$p2 - 1]) {
        echo 'true';
    } else {
        echo 'false';
    }
    echo PHP_EOL;
}
