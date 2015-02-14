<?php
$fh = fopen($argv[1], 'r');

while ($test = fgets($fh))
{
    list($n, $p1, $p2) = explode(',', $test);

    $bitAry = strrev( decbin((int)$n) );

    if ($bitAry[(int)$p1 - 1] === $bitAry[(int)$p2 - 1]) {
        echo 'true';
    } else {
        echo 'false';
    }
    echo PHP_EOL;
}
