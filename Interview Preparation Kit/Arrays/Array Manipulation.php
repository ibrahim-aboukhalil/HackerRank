<?php
$n=10;
$queries=[[1,5,3],[4,8,7],[6,9,1]];

echo "The maximum value is ".arrayManipulation($n, $queries);

function arrayManipulation($n, $queries) {
    // Write your code here
    $arr = [];

    foreach ($queries as $query) {
        $start = $query[0] - 1;
        $end = $query[1];
        $value = $query[2];

        $arr[$start] = ($arr[$start] ?? 0) + $value;

        if ($end < $n) {
            $arr[$end] = ($arr[$end] ?? 0) - $value;
        }
    }

    ksort($arr);

    $answer = 0;
    $currentSum = 0;

    foreach ($arr as $change) {
        $currentSum += $change;
        $answer = max($answer, $currentSum);
    }

    return $answer;
}
?>
