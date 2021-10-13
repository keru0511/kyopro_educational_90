<?php
fscanf(STDIN, "%d %d", $n, $l);
fscanf(STDIN, "%d", $k);
$a = explode(' ', trim(fgets(STDIN)));

function check($m, $n, $l, $k, $a)
{
    $cnt = 0;
    $pre = 0;
    for ((int)$i = 1; $i < $n; $i++) {
        if ($a[$i] - $pre >= $m && $l - $a[$i] >= $m) {
            $cnt ++;
            $pre = $a[$i];
        }
    }
    return $cnt >= $k;
}


$left = -1;
$right = $l + 1;
while ($right - $left > 1) {
    $mid = $left + ($right - $left) / 2;
    if (check($mid, $n, $l, $k, $a) === false) {
        $right = $mid;
    } else {
        $left = $mid;
    }
    var_dump('left=' . $left . '&right' . $right);
}
echo $left;
exit;