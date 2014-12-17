<?php
$fh = fopen($argv[1], 'r');

while ($test = fgets($fh))
{
    list($nums, $separateNum) = explode(':', trim($test));
    $sepArr = explode(',', $separateNum);
    $numArr = explode(' ', trim($nums));
    
    foreach ($sepArr as $val) {
        list($from, $to) = explode('-', trim($val));
        $tmp = $numArr[$from];
        $numArr[$from] = $numArr[$to];
        $numArr[$to] = $tmp;
    }    
    
    $end = count($numArr);
    for ($i = 0; $i < $end; $i++) {
        echo $numArr[$i];
        
        if (!($i == $end - 1)){
            echo ' ';
        }else{
            echo PHP_EOL;
            break;
        }
    }
}
