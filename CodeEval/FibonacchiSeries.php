<?php

function f_s($num_ary)
{
    $num_ary['nextNum'] = $num_ary['preNum'];
    $num_ary['num'] += $num_ary['nextNum'];
    $num_ary['preNum'] = $num_ary['num'] - $num_ary['nextNum'];

    return $num_ary;
}

$fh = fopen($argv[1], 'r');

while ($test = fgets($fh)) {
   $end = trim($test);
   // 0 > n
   if ($end < 1) {
       echo 0 . PHP_EOL;
       continue;
   }

   // Create FibonacchiSeries
   $num_ary = array('preNum' => 0, 'num' => 1, 'nextNum' => 0);
   for ($i = 1; $i < $end; $i++) {
       $num_ary = f_s($num_ary);
   }
   echo $num_ary['num'] . PHP_EOL;
}

