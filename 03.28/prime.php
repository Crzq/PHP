<?php
$num = 9;
$count = 1;
for ($i = 2; $i <= $num; $i++) {
    if ($num % $i == 0) {
        $count++;
    }
}
if ($count == 2) {
    echo "是素数";
} else {
    echo "不是素数";
}

