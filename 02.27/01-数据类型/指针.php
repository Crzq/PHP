<?php
$arr1 = ['a', 'b', 'c'];
$arr2 = $arr1;
echo $arr1 === $arr2; // 1
$arr2[2] = 'd';
print_r($arr1);
print_r($arr2);
if ($arr1 === $arr2) {
    echo 'true';
} else {
    echo 'false';
}
