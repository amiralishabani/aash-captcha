<?php
session_start();
$code = $_SESSION['aash_captcha'] ?? 'ERROR';

$im = imagecreatetruecolor(160, 60);
$bg = imagecolorallocate($im, 240, 240, 240);
$color = imagecolorallocate($im, 50, 50, 50);
imagefilledrectangle($im, 0, 0, 160, 60, $bg);
$font = __DIR__ . '/../resources/fonts/captcha.ttf';

for ($i = 0; $i < strlen($code); $i++) {
    $angle = rand(-15, 15);
    imagettftext($im, 24, $angle, 10 + $i * 30, 40, $color, $font, $code[$i]);
}

header("Content-type: image/png");
imagepng($im);
imagedestroy($im);