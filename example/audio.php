<?php
session_start();
$code = $_SESSION['aash_captcha'] ?? '';
$dir = realpath(__DIR__ . '/../resources/audio');

$tmpFile = tempnam(sys_get_temp_dir(), 'aash_captcha_');
$cmd = 'sox ';

foreach (str_split($code) as $char) {
    $file = $dir . '/' . strtoupper($char) . '.wav';
    if (file_exists($file)) {
        $cmd .= escapeshellarg($file) . ' ';
    }
}

$cmd .= escapeshellarg($tmpFile) . '.wav';
exec($cmd);

header('Content-Type: audio/wav');
readfile($tmpFile . '.wav');
@unlink($tmpFile . '.wav');