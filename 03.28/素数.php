<html lang="zh">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>判断素数</title>
</head>
<body>

<!--自定义一个函数：1.判断一个数是否为素数  2.输出1-100以内的所有素数-->

<h2>判断一个数是否为素数</h2>
<form method="post" action="素数.php">
    <label>
        数字：<input type="text" name="num" value="<?php if (isset($_POST["num"])) echo $_POST["num"]; ?>">
    </label>
    <input type="submit" value="判断"><br/>
    <label>
        结果：<input type="text"
                  value="<?php
                  $count = 1;
                  if (isset($_POST["num"])) {
                      for ($i = 2; $i <= $_POST["num"]; $i++) {
                          if (($_POST["num"] % $i) == 0) {
                              $count++;
                          }
                      }
                      if ($count == 2) {
                          echo $_POST["num"] . '是素数';
                      } else {
                          echo $_POST["num"] . '不是素数';
                      }

                  }
                  ?>">
    </label>
</form>
<h2>1-100的素数:</h2>
<?php
for ($i = 2; $i <= 100; $i++) {
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            break;
        }
    }
    if ($i == $j) {
        echo $i;
        echo "\n";
    }
}
?>


</body>
</html>
