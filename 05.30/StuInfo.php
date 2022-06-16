<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/StuInfo.css"/>
    <style>
        #pleaseLogin {
            margin-top: 40px;
            text-align: center;
            
        }
    </style>
</head>
<body>
<?php
include 'header.html';
?>
<h1 align="center">学生信息</h1>
<?php 
//引用数据库连接文件
require_once 'conn.php';

//设置字符集，避免中文乱码
$db->query("SET NAMES utf8");

//定义SQL语句，查询所有学生信息
$sql = "SELECT student.*,class.classname FROM student inner join class on student.classno=class.classno";

//执行SQL语句，返回结果，并用表格显示信息
if ($result = $db->query($sql)) {
    echo "<center>";
    echo "<form action='UpdDel.php' method='post'>";
    echo "<input type='submit' name='btnDel' value='删除' onclick='return confirm(\"确定要删除选中的学生信息吗？\");'/>";
    echo "<input type='submit' name='btnUpdate' value='编辑'/>";
    echo "<table class='tb'><tr><th></th><th>学号</th><th>姓名</th><th>班级</th><th>性别</th><th>手机</th><th>电子邮箱</th><th>相片</th></tr>";    
    // 获取数据
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td><input type='checkbox' name='sel[]' value='".$row["studentno"]."'/>".   
        "</td><td>".$row["studentno"].
        "</td><td>".$row["studentname"].
        "</td><td>".$row["classname"].
        "</td><td>".$row["sex"].
        "</td><td>".$row["mobile"].
        "</td><td>".$row["email"].
        "</td><td><img src='" . "UploadFiles/" . $row["photo"] . "' width='200px' />".
        "</td></tr>";
    }   
    echo "</table>";
    echo "</form>";
    echo "</center>";
    //释放结果集
    $result->close();
}
//关闭连接
$db->close();
?>

<!-- <div id="pleaseLogin">
    <a href="login.php?frompage=student">请先登录</a>
    
</div> -->

<?php
include 'footer.html';
?>

<script>
    document.getElementsByTagName('th')[0].className = 'checkbox';
    document.getElementsByTagName('td')[0].className = 'checkbox';
</script>
</body>
</html>

