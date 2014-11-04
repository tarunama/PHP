<?php
$fh = fopen($argv[1], 'r');

while ($line = fgets($fh)) {
    $ary    = json_decode(trim($line), true);
    $sum    = 0;
    $limit  = count($ary['menu']['items']);
    
    for ($i = 0; $i < $limit; $i++) {
        if (!isset($ary['menu']['items'][$i])){ continue; }
        
        if (array_key_exists('label', $ary['menu']['items'][$i])) {
            $sum += $ary['menu']['items'][$i]['id'];
        }
    }
    echo $sum . PHP_EOL;
}
