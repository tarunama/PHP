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
        foreach ($ary as $val) {
            $result .= $this->alphaToDigit($val);
        }
        return $result;
    }

    public function judgeEmpty ($str)
    {
        return (strlen($str)) ? $str : "NONE";
    }
}

$hd = new HiddenDigits();

while ($line = fgets($fh))
{
    $ary       = str_split(trim($line));
    $resultStr = $hd->hiddenDigits($ary);
    echo $hd->judgeEmpty($resultStr) . PHP_EOL;
}
