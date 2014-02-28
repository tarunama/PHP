<?php

$ary = array(5,6,7,2,1,4,7,9);

$max = 0;
$min = 0;

for($i = 0; $i < count($ary); $i++){
	if ($max < $ary[$i]) {
		$max = $ary[$i];
	} else if($min > $ary[$i]) {
		$min = $ary[$i];
	}
}

echo $max.",".$min;
