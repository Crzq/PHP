<?php
/*for ($j = 2; $j <= 100; ++$j) {
    $count = 1;
    for ($i = 2; $i <= $j; ++$i) {
        if ($j % $i == 0) {
            $count++;
        }
    }

    if ($count == 2) {
        echo $j;
        echo "\n";
    } 
}*/

$count = 0;
$num = 5;
for ($i = 1; $i <= $num; ++$i) {
    if ($num % $i) {
        break; // 说明 $i 不是 $num 的因数
        // 因为 break 的作用是终止 for循环，故没有加上 5 本身的因数，故输出因数个数为 1
    } else {
        $count++; // $num 的因数 数量+1
    }
}
echo "因数个数：$count";
echo "<br/>";
// 这个过程下来，如果 $num 只有2个因数(1和本身)，则 $num为 素数
if ($count == 2) {
    echo "$num 是素数";
} else {
    echo "$num 不是素数";
}

