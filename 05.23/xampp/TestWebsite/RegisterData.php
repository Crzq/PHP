<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>

<?php
include 'header.html';
?>
<meta charset="UTF-8">
<!--<h1>恭喜你注册成功！您的注册信息如下：</h1>
学号：<?= $_POST["stuNo"] ?><br/>
姓名：<?= $_POST["stuName"] ?><br/>
班级：<?= $_POST["className"] ?><br/>
性别：<?= $_POST["sex"] ?><br/>
手机：<?= $_POST["mobile"] ?><br/>
邮箱：<?= $_POST["email"] ?>
	-->
<?php
if (isset($_FILES["img"])) {
// var_dump($_FILES);
    $imgName = $_FILES["img"]["name"];
    $path = "UploadFiles/" . $imgName;
    move_uploaded_file($_FILES["img"]["tmp_name"], $path);
// 教室机解决方法：
    /* $path = mb_convert_encoding($path, "gbk", "utf-8");
    move_uploaded_file($_FILES["img"]["tmp_name"], $path);
    $path = "UploadFiles/" . $imgName; */
}
session_start();
// echo $path;
if (isset($_POST["stuNo"])
    && isset($_POST["stuName"])
    && isset($_POST["pwd"])
    && isset($_POST["confirmPwd"])
    && isset($_POST["className"])
    && isset($_POST["sex"])
    && isset($_POST["mobile"])
    && isset($_POST["email"])
    && isset($_SESSION["captcha"])) {
    echo "<h1>恭喜你注册成功！您的注册信息如下：</h1>";
    echo "学号：" . $_POST["stuNo"] . "<br/>";
    echo "姓名：" . $_POST["stuName"] . "<br/>";
    echo "班级：" . $_POST["className"] . "<br/>";
    echo "性别： " . $_POST["sex"] . "<br/>";
    echo "手机： " . $_POST["mobile"] . "<br/>";
    echo "邮箱：" . $_POST["email"] . "<br/>";
    // echo "图片：" .  $path;
} else {
    // echo $_SESSION["captcha"];
    echo "信息缺失，注册失败。";
}
?>

照片：<img src="<?= $path ?>" style="width: 100px;" alt="图片找不到了"><br/>

<?php
include 'footer.html';
?>

</body>
</html>
