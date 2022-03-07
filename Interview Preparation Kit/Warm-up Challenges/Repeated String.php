<?php
$s = 'kpomixqhsoacvttsvzqwzmaupfxhtljmpbhvaagmkqjrnehqqrctucxadibeem';
$n = 65321878956123;

echo repeatedString($s, $n);

function repeatedString($s, $n) {

    if (!gettype($n) === 'integer' || !gettype($s) === 'string' || !$s || $n <= 0) {
        return 0;
    }
    if (!strcasecmp($s, 'a')) {
        return $n;
    }

    $length = strlen($s);

    $frequency = substr_count($s, 'a');
    $frequency *= floor($n / $length);
    $frequency += substr_count(substr($s, 0, $n % $length), 'a');

    return $frequency;
}
?>
