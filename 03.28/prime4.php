<?php
// 输出1-100的素数
/*for ($i = 1; $i <= 100; ++$i) {
    for ($j = 2; $j < $i; ++$j) {
        if ($i % $j ==0) {
            break;
        }
    }
    if ($i == $j) {
        echo "$i ";
    }
}
echo "<br/>";*/


for ($i = 1; $i <= 100; ++$i) {
    $count = 0;
    for ($j = 1; $j <= $i; ++$j) {
        if ($i % $j == 0) {
            $count++;
        }
    }
    if ($count == 2) {
        echo "$i ";
    }
}