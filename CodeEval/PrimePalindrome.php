<?php
    
for ($i = 2; $i < 10; $i++) {
    if($i == 2){
        echo $i;
    }
    
    if($i % 2 == 0) {continue;}
    
    $flg = 0;
    
    for($j = 3; $j < $i; $j++){
        if($i % $j !== 0){
            $flg = 1;    
        }
    }
    
    if($flg){
        echo " " . $i;
    }
}
