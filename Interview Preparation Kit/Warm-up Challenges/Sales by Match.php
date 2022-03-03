<?php

$arr_example = [9, 10 , 20 , 20 ,10 ,10 ,30 ,50 ,10 ,20];
$length = count($arr_example);

echo "Pairs of socks with matching colors= ".sockMerchant($length, $arr_example);

function sockMerchant($n, $ar) {
    $pairs = 0;
    $pairs_count = array_count_values($ar);
    foreach ($pairs_count as $count) {
        $pairs += intval($count/2);
    }
    return $pairs;
}
?>
