<?php

$fh = fopen($argv[1], "r");

while ($line = fgets($fh)) {
    $ary    = array();
    $ary[]  = json_decode($line, true);
    $sum    = 0;
    
    for ($i = 0; $i < count($ary[0]["menu"]["items"]); $i++) {
        //値がNULLかどうかチェック
        if (!isset($ary[0]["menu"]["items"][$i])){ continue; }
        if (array_key_exists("label", $ary[0]["menu"]["items"][$i])) {
            $sum = $sum + $ary[0]["menu"]["items"][$i]["id"];
        }
    }
    
    echo $sum . "\n";
}

fclose($fh););
