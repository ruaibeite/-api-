<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>确认支付提交验证码</title>
</head>
<body>
<h1>确认支付提交验证码</h1>
<?php

// 接收参数
$reqsn = isset($_GET['reqsn']) ? $_GET['reqsn'] : '';
$agreeid = isset($_GET['agreeid']) ? $_GET['agreeid'] : '';
$amount = isset($_GET['amount']) ? $_GET['amount'] : '';
$currency = isset($_GET['currency']) ? $_GET['currency'] : '';
$subject = isset($_GET['subject']) ? $_GET['subject'] : '';
$thpinfo = isset($_GET['thpinfo']) ? $_GET['thpinfo'] : '';
?>
<form action="agreeconfirm.php" method="post">
    <input type="hidden" name="reqsn" value="<?php echo htmlspecialchars($reqsn); ?>">
    <input type="hidden" name="agreeid" value="<?php echo htmlspecialchars($agreeid); ?>">
    <input type="hidden" name="amount" value="<?php echo htmlspecialchars($amount); ?>">
    <input type="hidden" name="currency" value="<?php echo htmlspecialchars($currency); ?>">
    <input type="hidden" name="subject" value="<?php echo htmlspecialchars($subject); ?>">
    <input type="hidden" name="thpinfo" value="<?php echo htmlspecialchars($thpinfo); ?>">

    <label for="captcha">验证码:</label>
    <input type="text" id="captcha" name="captcha" required><br><br>

    <input type="submit" value="提交">
</form>
</body>
</html>
