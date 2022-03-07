<?php
$arr = [1,2,3,4,5];
$d = 4;

var_dump(rotLeft($arr, $d));

function rotLeft($a, $d) {
    if (gettype($a) !== 'array' || !count($a)) {
        return [];
    }
    if (gettype($d) !== 'integer' || $d <= 0 || !($d % count($a)) ) {
        return $a;
    }
    while ($d--) {
        $n = reset($a);
        unset($a[key($a)]);
        array_push($a, $n);
    }
    return $a;
}
?>
