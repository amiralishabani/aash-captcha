<?php
namespace Amiralishabani\Captcha;

class Captcha {
    public static function generateCode(int $length = 5): string {
        $chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789';
        $code = '';
        for ($i = 0; $i < $length; $i++) {
            $code .= $chars[random_int(0, strlen($chars) - 1)];
        }
        $_SESSION['aash_captcha'] = strtoupper($code);
        return $code;
    }

    public static function validate(string $input): bool {
        return isset($_SESSION['aash_captcha']) && strtoupper($input) === $_SESSION['aash_captcha'];
    }
}