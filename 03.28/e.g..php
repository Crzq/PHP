<?php
/*
function &test(){
    static $b=0;
    $b=$b+1;
    echo $b."<br>";
    return $b;
}
$a=test();
$a=5;
$a=test();
$a=&test();
$a=5;
$a=test();


*/


/*function zs($num){

    for ($i = 2; $i <= $num; $i++) {
        // 创建一个标志，用来保存结果，默认$i是质数
        $flag = true;
        
        // 判断 $i是否是质数
        // 获取 2~$i 之间所有的数
        for ($j = 2; $j < $i; $j++) {
            // 判断 $i 是否能被整除
            if ($i % $j == 0) {
                // 如果进入判断，则证明 $i不是质数
                $flag = false;
                break;
            }
        }
        
        // 如果是质数，则打印 $i 的值
        if ($flag) {
            echo $i . "<br>";
        }
    }
}
echo zs(100);*/


/*
$arr = array();
for ($i=2; $i<=100; $i++){
    $str = false;
    for ($j=2; $i<=4 ? $j<$i : $j<=$i/2; $j++){
        
        if ($i % $j == 0){
            $str = false;
            break ;
        }else{
            
            $str = true;
            
        }
        
    }
    
    if($str){
        array_push($arr,$i);
    }
    
}
echo print_r($arr);
*/
/*
function primeCheck($number){
    
    if ($number == 1)
        
        return 0;
        
        for ($i = 2; $i <= sqrt($number); $i+=2){
            
            if ($number % $i == 0)
                
                return 0;
                
        }
        
        return 1;
        
}



$number = 31;

$flag = primeCheck($number);

if ($flag == 1)
    
    echo $number."是质数";
    
    else echo $number. "不是质数";
 */

//求最大公约数
function max_divisor($a, $b)
{
    $n = min($a, $b);
    for ($i = $n; $i > 1; $i--) {
        if (is_int($a / $i) && is_int($b / $i)) {
            return $i;
        }
    }
    return 1;
}

//求最小公倍数
function min_multiple($a, $b)
{
    if ($b == 0)   //一定要考虑除数不能为零
    {
        return $b;
    } else {
        $m = max($a, $b);
        $n = min($a, $b);
        for ($i = 2; ; $i++) {
            if (is_int($m * $i / $n)) {
                return $i;
            }
        }
    }
    return $a * $b;
}

//辗转相除法求最大公约数
function max_divisor2($a, $b)
{
    if ($b == 0) {
        return $a;
    } else {
        return max_divisor2($b, ($a % $b));
    }
}

//加减法求最大公约数
function max_divisor3($a, $b)
{
    if ($a == $b) {
        return $a;
    } elseif ($a > $b) {
        $a = $a - $b;
    } else {
        $b = $b - $a;
    }
    return max_divisor3($a, $b);
}

echo "12和18的最大公约数是：" . max_divisor(12, 18) . "<br>";
echo "12和18的最小公倍数是：" . min_multiple(12, 18);

