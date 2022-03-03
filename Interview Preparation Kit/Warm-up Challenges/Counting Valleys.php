<?php
function countingValleys($steps, $path) {
    $level=0;
    $path_array=str_split($path,1);
    $old_step=0;
    $vally_count=0;
    foreach ($path_array as $value) {
        if ($value=="U") $level++;
        else $level--;
        if (intval($old_step)<0 && intval($level)>=0) $vally_count++;
        $old_step = $level;
    }
    return $vally_count;
}
?>
