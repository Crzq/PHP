<?php

function Prime($n)
{
    $arr = array();
    for ($i = 1; $i <= $n; ++$i) {
        for ($j = 2; $j < $i; ++$j) {
            if ($i % $j == 0) {
                break;
            }
        }
        if ($j == $i) {
            $arr[count($arr)] = $j;
        }
    }
    // $n = $arr; // 变量转数组
    // 打印数组
    /*for ($j = 0; $j < count($arr); ++$j) {
        echo "$arr[$j] ";
    }*/
    /* for ($j = 0; $j < count($n); ++$j) {
        echo "$n[$j] ";
    } */

    // $newArr = array();
    while ($arr[$i] <= $n) {
        if ($n % $arr[$i] == 0) {
            $n = $n / $arr[$i];
            echo "$arr[$i] ";
        } else {
            ++$i;
        }
    }

}

Prime(99);
echo "<br/>";
Prime(50);


