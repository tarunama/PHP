<?PHP
$content = fopen($argv[1], "r");

while (($line = fgets($content)) ==! false) {
    //$ary = array();
    $ary = preg_split("/[\s]/", $line);
    $str = $ary[0];
    
    $pattern = preg_split("/[\+\-]/", $ary[1]);
    
    foreach (str_split($str) as $val) {
        //右辺と左辺に分ける
        
        //+,-の判断
        if (strpos($ary[1], "+")) {
            
        } else {
            
        }
    }
    
    
    
    var_dump($number);
}

fclose($content);
/*
foreach ($ary[1] as $val) {
    if ($val === "+" || $val === "-") {

    }
}
foreach ($ary as $val) {
    $pattern = preg_split("[\+-]", $val);
}

*/
