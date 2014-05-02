<?php
function prime($n) {
    $ary = array();
    for ($i = 2; $i < $n + 1; $i++) {
        $flg = 1;
        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) {
                $flg = 0;
                break;
            }
        }
        if ($flg) {
            $ary[] = $i;
        }
    }
    return $ary;
}
$prm_ary = prime(1000);
for ($i = 0; $i < count($pry_ary); $i++) {
    if (strlen($pry_ary[$i]) < 2) {continue;}
    
