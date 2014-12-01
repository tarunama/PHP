<?php

$ary = array(1, 2, 3, 4, 5, 6);
//　ここクロージャー
$odd = function ($n) { return ($n % 2); };

$filtered_ary = array_filter($ary, $odd);

foreach ($filtered_ary as $val) {
        echo $val . PHP_EOL;
}
/*
1
3
5
*/
