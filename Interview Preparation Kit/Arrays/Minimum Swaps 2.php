<?php
$arr = [1,3,5,2,4,6,7];
echo "Minimum Swaps= ".minimumSwaps($arr);

function minimumSwaps($arr) {
    $swaps = 0;

    if (gettype($arr) !== 'array' || !count($arr)) {
        return $swaps;
    }

    while ($currentValue = current($arr)) {
        $currentKey = key($arr) + 1;
        if ($currentKey !== $currentValue) {
            $swaps += swap_array_values($arr, key($arr), $currentValue - 1);
        }
        else {
            next($arr);
        }
    }
    return $swaps;
}

function swap_array_values(&$arr, $i, $j) {
    $temp = $arr[$j];
    $arr[$j] = $arr[$i];
    $arr[$i] = $temp;
    return 1;
}

?>
