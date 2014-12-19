<?php
$fh = fopen($argv[1], 'r');

function swapElements ($separteArr, $numArr)
{
    foreach ($sepArr as $val) {
        list($from, $to) = explode('-', trim($val));
        $tmp = $numArr[$from];
        $numArr[$from] = $numArr[$to];
        $numArr[$to] = $tmp;
    }
    return $numArr;
}

while ($test = fgets($fh))
{
    list($nums, $separateNum) = explode(':', trim($test));
    $sepArr = explode(',', $separateNum);
    $numArr = explode(' ', trim($nums));
    
    $swappedArr = swapElements($sepArr, $numArr);
    
    // 出力
    $end = count($numArr);
    for ($i = 0; $i < $end; $i++) {
        echo $numArr[$i];
        
        // 最後の要素にアクセスする時
        if (!($i == $end - 1)){
            echo ' ';
        }else{
            echo PHP_EOL;
            break;
        }
    }
}
