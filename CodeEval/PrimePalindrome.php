<?php

function prime($n)
{
    $ary = array();

    for ($num = 2; $num <= $n; $num++) {
        $flg = true;
        for ($j = 2; $j < $i; $j++) {
            if ($i % $j === 0) {
                $flg = false;
                break;
            }
        }
        if ($flg) { $ary[] = $i; }
    }
    return $ary;
}

$prm_ary = prime(1000);

for ($i = count($prm_ary) - 1; 0 < $i; $i--) {
    $compare_ary = array();
    if (strlen($prm_ary[$i]) < 2) { continue; }

    foreach (str_split($prm_ary[$i]) as $val) {
        $compare_ary[] = $val;
    }

    if ($compare_ary[0] === $compare_ary[2]) {
        echo $prm_ary[$i];
        break;
    }
}
