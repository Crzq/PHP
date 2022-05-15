<?php
/*$num = 2;
for ($i = 2; $i < $num; ++$i) {
    if ($num % $i) {
        continue;
    } else {
        break;
    }
}
if ($num == $i) {
    echo "$num 是素数";
} else {
    echo "$num 不是素数";
}*/

$num = 4;
for ($i = 2; $i < $num; ++$i) {
    if ($num % $i == 0) { // 不是素数
        break;
    }
}
if ($i == $num) { // 说明从未break过，即 是素数
    echo "$num 是素数";
} else {
    echo "$num 不是素数";
}