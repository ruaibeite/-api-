<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>签约确认提交验证码</title>
</head>
<body>
<h1>签约确认提交验证码</h1>
<?php
if (isset($_GET['thpinfo'])) {
    $thpinfo = urldecode($_GET['thpinfo']);
    $meruserid = isset($_GET['meruserid']) ? urldecode($_GET['meruserid']) : '';
    $accttype = isset($_GET['accttype']) ? urldecode($_GET['accttype']) : '';
    $acctno = isset($_GET['acctno']) ? urldecode($_GET['acctno']) : '';
    $idtype = isset($_GET['idtype']) ? urldecode($_GET['idtype']) : '';
    $idno = isset($_GET['idno']) ? urldecode($_GET['idno']) : '';
    $acctname = isset($_GET['acctname']) ? urldecode($_GET['acctname']) : '';
    $mobile = isset($_GET['mobile']) ? urldecode($_GET['mobile']) : '';

    echo "请求返回信息: " . htmlspecialchars($thpinfo);
}
?>

<form action="agreeconfirm.php" method="post">
    <label for="captcha">验证码:</label>
    <input type="text" id="captcha" name="captcha" required><br><br>

    <input type="hidden" name="thpinfo" value="<?php echo htmlspecialchars($thpinfo); ?>">
    <input type="hidden" name="meruserid" value="<?php echo htmlspecialchars($meruserid); ?>">
    <input type="hidden" name="accttype" value="<?php echo htmlspecialchars($accttype); ?>">
    <input type="hidden" name="acctno" value="<?php echo htmlspecialchars($acctno); ?>">
    <input type="hidden" name="idtype" value="<?php echo htmlspecialchars($idtype); ?>">
    <input type="hidden" name="idno" value="<?php echo htmlspecialchars($idno); ?>">
    <input type="hidden" name="acctname" value="<?php echo htmlspecialchars($acctname); ?>">
    <input type="hidden" name="mobile" value="<?php echo htmlspecialchars($mobile); ?>">

    <input type="submit" value="提交">
</form>
</body>
</html>
