<meta charset="UTF-8">
<?php
$db = new mysqli("localhost", "root", "123456", "qb");


if ($db->connect_errno) { // 这句话会暴露网站路径
    exit("数据库连接失败");
}
// echo "数据库连接成功";
