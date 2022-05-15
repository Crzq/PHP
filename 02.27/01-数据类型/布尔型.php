<?php
header("Content-type/html;charset=utf-8");
$a = true;
$b = false;
$username = 'Mike';
// 使用字符串进行逻辑控制
if ($username == 'Mike') {
    echo 'Hello, Mike!<br>';
}
// 使用布尔值进行逻辑控制
if ($a == true) {
    echo 'a 为真<br>';
}
// 单独使用布尔值进行逻辑控制
if ($b) {   // if ($b == 0)
    echo 'b 为真<br>';
}

// 在某些特殊情况下，不仅true和false可以表示boolean值，其他类型的数据也可以。如，用 0 表示 false,用 非0 表示 true
