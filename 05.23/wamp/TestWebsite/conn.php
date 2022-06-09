<?php
$db = new mysqli("localhost", "root", "123456", "qb");


if ($db->connect_errno) {
    exit("数据库连接失败");
}
echo "数据库连接成功";