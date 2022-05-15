<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<label>第一个数：<input type="text" name="a"></label><br/>
<label>第二个数：<input type="text" name="b"></label><br/>
<button type="submit">提交</button>
<br/>

<?php
// 函数：计算 $n 以内的 质数

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
    
    
    $i = 0;
    while ($arr[$i] <= $_GET["a"]) {
        if ($_GET["a"] % $arr[$i] == 0) {
            $_GET["a"] = $_GET["a"] / $arr[$i];
            echo "$arr[$i] ";
        } else {
            ++$i;
        }
    }

}

Prime($_GET["a"]);
echo "<br/>";
//Prime($_GET["b"]);

?>

</body>
</html>


