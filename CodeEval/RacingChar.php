<?php
$fh = fopen($argv[1], 'r');

$preKey = false;
while ($line = trim(fgets($fh)))
{
    $cpKey = strpos($line, "C");

    if ($cpKey === false) {
        $key = strpos($line, "_");
    }
    else {
        $key = $cpKey;
    }

    if ($key === $preKey || $preKey === false) {
        $way = "|";
    }
    elseif ($key < $preKey) {
        $way = "/";
    }
    elseif ($key > $preKey) {
        $way = "\\";
    }

    $line[$key] = $way;
    echo $line . PHP_EOL;
    $preKey = $key;
}
