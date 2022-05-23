<?php
$db = new mysqli("127.0.0.1:8081", "root", "123456", "qb", "3308");


if ($db -> connect_errno) {
    exit("数据库连接失败");
}