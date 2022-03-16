<?php

$q = [2,1,5,3,4];

minimumBribes($q);

function minimumBribes($q) {
    $ans = 0;

    if (gettype($q) !== 'array' || !count($q)) {
        return "Too chaotic";
    }

    end($q);
    prev($q);

    while ($currentValue = current($q)) {
        $currentKey = key($q) + 1;
        $positionDiff = $currentValue - $currentKey;
        if ($positionDiff > 2) {
            echo "Too chaotic" . PHP_EOL;
            return;
        }
        elseif ($positionDiff > 0) {
            shift_array_values($q, key($q), key($q) + $positionDiff);
            $ans += $positionDiff;
        }
        else {
            prev($q);
        }
    }
    echo $ans . PHP_EOL;
    return;
}

function shift_array_values(&$arr, $i, $j) {
    $temp = $arr[$i];
    for ($s = $i; $s < $j; $s++) {
        $arr[$s] = $arr[$s + 1];
    }
    $arr[$j] = $temp;
}

?>
