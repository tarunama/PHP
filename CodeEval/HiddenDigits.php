<?php
$fh = fopen($argv[1], 'r');

while ($line = fgets($fh))
{
    $ary = str_split(trim($line));

    $result = '';
    foreach ($ary as $val) {
        if ($val === 'a') { $result .= 0; }
        elseif ($val === 'b') { $result .= 1; }
        elseif ($val === 'c') { $result .= 2; }
        elseif ($val === 'd') { $result .= 3; }
        elseif ($val === 'e') { $result .= 4; }
        elseif ($val === 'f') { $result .= 5; }
        elseif ($val === 'g') { $result .= 6; }
        elseif ($val === 'h') { $result .= 7; }
        elseif ($val === 'i') { $result .= 8; }
        elseif ($val === 'j') { $result .= 9; }
        elseif (preg_match('/[0-9]/', $val)) { $result .= $val; }
    }

    if (strlen($result)) {
        echo $result;
    } else {
        echo "NONE";
    }
    echo PHP_EOL;
}
