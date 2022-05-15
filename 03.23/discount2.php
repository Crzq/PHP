<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="discount2.php">
    请输入商品原价：<input type="text" name="Original_price"
                   value="<?php if (isset($_POST["Original_price"])) echo $_POST["Original_price"] ?>"/>
    折扣：
    <select name="discount">
        <option value="九折" <?php if (isset($_POST["discount"])) if ($_POST["discount"] === "九折") echo "selected" ?>>九折
        </option>
        <option value="八折" <?php if (isset($_POST["discount"])) if ($_POST["discount"] === "八折") echo "selected" ?>>八折
        </option>
        <option value="七折" <?php if (isset($_POST["discount"])) if ($_POST["discount"] === "七折") echo "selected" ?>>七折
        </option>
        <option value="六折" <?php if (isset($_POST["discount"])) if ($_POST["discount"] === "六折") echo "selected" ?>>六折
        </option>
        <option value="五折" <?php if (isset($_POST["discount"])) if ($_POST["discount"] === "五折") echo "selected" ?>>五折
        </option>
        <!-- 知道为什么错了，加了value就一定要填，要么就不加 -->
    </select>
    <input type="submit" value="计算"/>
</form>
<?php
if (isset($_POST["Original_price"]) && isset($_POST["discount"])) {
    $Original_price = $_POST['Original_price'];
    $discount = $_POST['discount'];

    switch ($discount) {
        case "九折":
            $discount = 0.9;
            break;
        case "八折":
            $discount = 0.8;
            break;
        case "七折":
            $discount = 0.7;
            break;
        case "六折":
            $discount = 0.6;
            break;
        case "五折":
            $discount = 0.5;
            break;
        default:
            $discount = 1.0;
            break;
    }
    $Current_price = $Original_price * $discount;
    echo '商品促销后的价格是：' . $Current_price . '元';
}
?>
</body>
</html>
