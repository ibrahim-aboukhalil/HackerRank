<?php

function findMaxSum($mat)
{
    $max_sum = PHP_INT_MIN;
    for ($i = 0; $i <= 3; $i++)
    {
        for ($j = 0; $j <= 3; $j++)
        {
            $sum = ($mat[$i][$j] + $mat[$i][$j + 1] +
                    $mat[$i][$j + 2]) +
                   ($mat[$i + 1][$j + 1]) +
                   ($mat[$i + 2][$j] +
                    $mat[$i + 2][$j + 1] +
                    $mat[$i + 2][$j + 2]);
            $max_sum = max($max_sum, $sum);
        }
    }
    return $max_sum;
}

$mat = array(array(1, 1, 1, 0, 0, 0),
              array(0, 1, 0, 0, 0, 0),
              array(1, 1, 1, 0, 0, 0),
              array(0, 0, 2, 4, 4, 0),
              array(0, 0, 0, 2, 0, 0),
              array(0, 0, 1, 2, 4, 0));

$res = findMaxSum($mat);
if ($res == -1)
    echo "Not possible", "
";
else
    echo "Maximum sum of hour glass = ",
         $res, "
";
?>
