<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <style>
        #pleaseLogin {
            margin-top: 40px;
            text-align: center;
            
        }
    </style>
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['stuNo'])) {
    header('Location:Login.php?fromPage=StuResults');
}
include 'header.html';
?>

<h1>成绩查询</h1>
<form action="<?=$_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        学号：<input type="text" name="stuNo"/>
        <input type="submit" name="btnSubmit" value="查询"/>
</form>
<?php
if(isset($_POST["btnSubmit"])){
    //用户输入的学号
    $stuNo=$_POST["stuNo"];  
    //文本框保持显示学号
 
    //引用数据库连接文件
    require_once 'conn.php';
    //设置字符集，避免中文乱码
    $db->query("SET NAMES utf8");
    //定义SQL语句，按学号查询信息
 $sql="SELECT * FROM result WHERE studentno='$stuNo'";
 // $sql = "SELECT result.studentno,result.mark,course.coursename,student.studentname FROM result INNER JOIN student ON result.studentno=student.studentno INNER JOIN course ON result.courseno=course.courseno WHERE student.studentno='$stuNo'"; 
    //执行查询
 $result = $db->query($sql);
 //查询到记录，返回查询结果并用表格显示    
 if ($result->num_rows>=1){
    echo "<table class='tb'><tr><th>姓名</th><th>课程名称</th><th>成绩</th></tr>";
     // 获取数据
     while ($row = $result->fetch_assoc()) {
         echo "<tr><td>".$row["studentno"].
         "</td><td>".$row["courseno"].
         "</td><td>".$row["mark"].
         "</td></tr>";
     }
     echo "</table>";
 }
 //没有查询到记录
 else{
     echo "<div style='color:red;margin-top:50px;'>没有该生的成绩记录！</div>";
 } 
 //释放结果集
 $result->close();
 //关闭连接
 $db->close();
}
?>

<!-- <div id="pleaseLogin">
    <a href="login.php?frompage=results">请先登录</a>
    
</div> -->

<?php
include 'footer.html';
?>
</body>
</html>

