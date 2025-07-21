<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Amiralishabani\Captcha\Captcha;
session_start();
$code = Captcha::generateCode();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Captcha Demo</title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
    <div class="aash_wrapper">
        <form method="post">
            <div class="aash_captcha_container">
                <img src="image.php" alt="captcha" id="aash_captcha_img">
                <button type="button" onclick="aashRefreshCaptcha()">↻</button>
                <button type="button" onclick="aashPlayAudio()">🔊</button>
            </div>
            <input type="text" name="captcha" class="aash_input">
            <button type="submit" class="aash_submit_btn">بررسی</button>
        </form>
    </div>
    <script src="../public/captcha.js"></script>
</body>
</html>