<?php
$clouds_example = [0,0,1,0,0,1,0];

echo "Minimum number of jumps= ".jumpingOnClouds($clouds_example);

function jumpingOnClouds($c) {
    // Write your code here
    $min_jumps = 0;
    if (gettype($c) !== 'array' || !count($c)) {
        return $min_jumps;
    }

    $length = count($c);

    for ($i = 2; $i <= $length; $i += 2) {
        if (!array_key_exists($i, $c) || $c[$i] !== 0) {
            $i--;
        }
        $min_jumps++;
    }
    return $min_jumps;
}
?>
