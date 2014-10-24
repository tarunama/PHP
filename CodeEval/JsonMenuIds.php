<?php

$fh = fopen($argv[1], 'r');

while ($line = fgets($fh)) {
    $ary    = array();
    $ary[]  = json_decode(trim($line), true);
    $sum    = 0;
    $limit  = count($ary[0]['menu']['items']);
    
    for ($i = 0; $i < $limit; $i++) {
        //値がNULLかどうかチェック
        if (!isset($ary[0]['menu']['items'][$i])){ continue; }
        
        if (array_key_exists('label', $ary[0]['menu']['items'][$i])) {
            $sum += $ary[0]['menu']['items'][$i]['id'];
        }
    }
    echo $sum . PHP_EOL;
}
