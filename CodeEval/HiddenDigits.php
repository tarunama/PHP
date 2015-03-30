<?php
$fh = fopen($argv[1], 'r');

Class HiddenDigits
{
    private function alphaToDigit ($val)
    {
        if ($val === 'a') { return 0; }
        elseif ($val === 'b') { return 1; }
        elseif ($val === 'c') { return 2; }
        elseif ($val === 'd') { return 3; }
        elseif ($val === 'e') { return 4; }
        elseif ($val === 'f') { return 5; }
        elseif ($val === 'g') { return 6; }
        elseif ($val === 'h') { return 7; }
        elseif ($val === 'i') { return 8; }
        elseif ($val === 'j') { return 9; }
        elseif (preg_match('/[0-9]/', $val)) { return $val; }
    }

    public function hiddenDigits ($ary = array())
    {
        $result = '';
        foreach ($ary as $str) {
            $result .= $this->alphaToDigit($str);
        }
        return $result;
    }

    public function isEmpty ($str)
    {
        return (!empty($str)) ? $str : "NONE";
    }
}

$hd = new HiddenDigits();

while ( false === ($line = fgets($fh)) )
{
    $ary       = str_split(trim($line));
    $resultStr = $hd->hiddenDigits($ary);

    echo $hd->isEmpty($resultStr) . PHP_EOL;
}
