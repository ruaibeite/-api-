<?php
include 'phpqrcode/qrlib.php';
session_start(); // 确保会话已启动

// 检查 session 中是否存在 UserStatus 和 entity_id
$f_entity_id = isset($_SESSION['UserStatus']["entity_id"]) ? $_SESSION['UserStatus']["entity_id"] : '';



?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>签约申请</title>
</head>
<body>
<h1>签约申请</h1>
<form action="agreeapply.php" method="post">
    <label for="meruserid">商户id:</label>
    <input type="hidden" name="meruserid" value="<?php echo htmlspecialchars($f_entity_id); ?>">

    <label for="accttype">卡类型(00:借记卡02:准贷记卡/贷记卡):</label>
    <input type="text" id="accttype" name="accttype"><br><br>
    <label for="acctno">银行卡号:</label>
    <input type="text" id="acctno" name="acctno" required><br><br>

    <label for="idtype">证件类型(0:身份证 2:护照 5:港澳通行证 6:台湾通行证):</label>
    <input type="text" id="idtype" name="idtype" required><br><br>

    <label for="idno">证件号:</label>
    <input type="text" id="idno" name="idno"><br><br>
    <label for="acctname">户名:</label>
    <input type="text" id="acctname" name="acctname" required><br><br>

    <label for="mobile">手机号码:</label>
    <input type="text" id="mobile" name="mobile"><br><br>


    <input type="submit" value="提交">
</form>
</body>
</html>
