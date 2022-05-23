<?php
$db = new mysqli("127.0.0.1", "root", "", "qb");


if ($db -> connect_errno) {
    exit("数据库连接失败");
}