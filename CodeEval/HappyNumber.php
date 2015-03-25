<?php
$fh = fopen($argv[1], 'r');

Class HappyNumber
{
    private $result = 0;
    private $counter = 0;

    public function getResult ($result)
    {
        return $this->result;
    }

    public function getSplitVar ($var)
    {
        return str_split($var);
    }

    private power = function ($str) {
        $splitArr = $this->getSplitVar($str);
        $len      = count($splitArr);
        $result   = 0;
        for ($i = 0; $i < $len; $i++) {
            $result += $ary[$i] * $ary [$i];
        }
        return $result;
    }

    
}

function happyNumber($num) {
    // $result = 0;
    // $counter = 0;
    // $int_ary = str_split($num);
    // $power = function ($n) {
    //     $ary = str_split($n);
    //     $len = count($ary);
    //     $result = 0;
    //     for ($i = 0; $i < $len; $i++) {
    //         $result += $ary[$i] * $ary[$i];
    //     }
    //     return $result;
    // };

    while($counter < 30) {
        $nums = array_map($power, $int_ary);
        if ( 1 === array_sum($nums) ) {
            $result = 1;
            break;
        }
        $counter++;
        $int_ary = $nums;
    }
    return $result;
}

while ($test = fgets($fh)) {
    $line = trim($test);

    echo happyNumber($line) . PHP_EOL;
}
