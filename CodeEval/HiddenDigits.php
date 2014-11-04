<?php
$fh = fopen($argv[1], 'r');

while ($line = fgets($fh)) {
    $str = preg_replace('/[\n\s\r]/', '', trim($line));
    $ary = str_split($str);
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

    if (strlen($result) === 0) {
        echo 'NONE';
    } else {
        echo $result;
    }
    echo PHP_EOL;
}
