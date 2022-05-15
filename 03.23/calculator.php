<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php
if (isset($_GET["sub"])) {
    $num1 = true;
    $num2 = true;
    $numa = true;
    $numb = true;
    $message = "";
    // 判断数字1是否为空
    if ($_GET["num1"] === "") {
        $num1 = false;
        $message .= "第一个数字不能为空";
    }
    // 判断数字1是否为数字
    if (!is_numeric($_GET["num1"])) {
        $numa = false;
        $message .= "第一个数不是数字";
    }
    // 判断数字2是否为数字
    if (!is_numeric($_GET["num2"])) {
        $numb = false;
        $message .= "第二个数不是数字";
    }
    // 判断数字2是否为空
    if ($_GET["num2"] === "") {
        $num2 = false;
        $message .= "第二个不能为空";
    }
    if ($num1 && $num2 && $numa && $numb) {
        $sum = 0;
        // 多路分支
        switch ($_GET["ysf"]) {
            case "+":
                $sum = $_GET["num1"] + $_GET["num2"];
                break;
            case "-":
                $sum = $_GET["num1"] - $_GET["num2"];
                break;
            case "x":
                $sum = $_GET["num1"] * $_GET["num2"];
                break;
            case "/":
                $sum = $_GET["num1"] / $_GET["num2"];
                break;
            case "%":
                $sum = $_GET["num1"] % $_GET["num2"];
                break;
        }
    }
}

?>
<table align="center">
    <caption>
        <h1>计算器</h1>
    </caption>
    <form action="calculator.php" method="get">
        <tr>
            <td>
                <input type="text" size="5" name="num1" value="<?php if (isset($_GET["num1"])) {echo $_GET["num1"];} ?>">
            </td>
            <td>
                <select name="ysf">
                    <option value="+">+</option>
                    <option value="-" <?php if (isset($_GET["ysf"])) if ($_GET["ysf"] === "-") echo "selected" ?>>-</option>
                    <option value="x" <?php if (isset($_GET["ysf"])) if ($_GET["ysf"] === "x") echo "selected" ?>>x</option>
                    <option value="/" <?php if (isset($_GET["ysf"])) if ($_GET["ysf"] === "/") echo "selected" ?>>/</option>
                    <option value="%" <?php if (isset($_GET["ysf"])) if ($_GET["ysf"] === "%") echo "selected" ?>>%</option>
                </select>
            </td>
            <td>
                <input type="text" size="5" name="num2" value="<?php if (isset($_GET["num2"])) echo $_GET["num2"]; ?>">
            </td>
            <td>
                <input id="btn" type="submit" value="计算" name="sub">
            </td>
        </tr>
        <?php
        if (isset($_GET["sub"])) {
            echo "<tr><td colspan='4'>";
            if ($num1 && $num2 && $numa && $numb) {
                echo "<p>结果是：" . $_GET["num1"] . " " . $_GET["ysf"] . " " . $_GET["num2"] . " = " . $sum . "</p>";
            } else {
                echo $message;
            }
            echo "</td></tr>";
        }
        ?>
    </form>
</table>

<script>
    const tds = document.getElementsByTagName('td');
    tds[1].style.width = "60px";
    tds[3].style.border = "0";
</script>
</body>
</html>