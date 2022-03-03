<?php
function sockMerchant($n, $ar) {
    $pairs = 0;
    $pairs_count = array_count_values($ar);
    foreach ($pairs_count as $count) {
        $pairs += intval($count/2);
    }
    return $pairs;
}
?>
