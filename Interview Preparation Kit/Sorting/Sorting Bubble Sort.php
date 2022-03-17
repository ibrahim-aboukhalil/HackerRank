<?php
$a = [6,4,1];
$n = sizeof($a);
$temp = NULL;
$numSwaps = 0;
for ($i=0;$i<$n;$i++) {
    for ($j=0;$j<$n-$i-1;$j++) {
        if ($a[$j] > $a[$j + 1]) {
          $numSwaps++;
          $temp = $a[$j];
          $a[$j] = $a[$j+1];
          $a[$j+1] = $temp;
        }
    }
}
echo "Array is sorted in ".$numSwaps." swaps.\n";
echo "First Element: ".$a[0]."\n";
echo "Last Element: ".$a[$n-1]."\n";
?>
