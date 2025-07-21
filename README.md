# AASH Captcha

A lightweight, customizable and PHP-native CAPTCHA system without any external dependencies.  
Supports image and audio CAPTCHAs. Ideal for Laravel, Symfony, or pure PHP projects.

![AASH Captcha Screenshot](https://raw.githubusercontent.com/amiralishabani/aash-captcha/main/docs/demo.png)

---

## 🔧 Installation

Install the package via Composer:

```bash
composer require amiralishabani/aash-captcha
```

> Or manually add it to your `composer.json`:

```json
"require": {
  "amiralishabani/aash-captcha": "^1.0"
}
```

Then run:

```bash
composer update
```

---

## 🚀 Quick Start

### 1. Include the Captcha Generator

```php
require_once 'vendor/autoload.php';

use AashCaptcha\Captcha;

$captcha = new Captcha();
$captcha->generate();
```

### 2. Show the Captcha

In your HTML:

```html
<form method="POST" action="verify.php">
  <img src="captcha/image.php" alt="CAPTCHA" />
  <input type="text" name="captcha" placeholder="Enter the code">
  <button type="submit">Submit</button>
</form>
```

To generate audio CAPTCHA:

```html
<audio controls>
  <source src="captcha/audio.php" type="audio/mpeg">
</audio>
```

---

## ✅ Validation

In your form handler (`verify.php`):

```php
session_start();

if ($_POST['captcha'] === $_SESSION['aash_captcha']) {
    echo "✔ Correct!";
} else {
    echo "❌ Incorrect, try again.";
}
```

---

## 🎨 Customization

You can override the styles by editing the included `assets/style.css`.  
All CSS classes and IDs are prefixed with `aash_` to prevent conflicts.

```css
/* Example customization */
#aash_container {
    background-color: #f7f7f7;
    border-radius: 10px;
    padding: 20px;
}
```

> You may also customize font, colors, length of the captcha code, etc., in `config.php`.

---

## 📁 Folder Structure

```
aash-captcha/
├── src/
│   └── Captcha.php
├── public/
│   ├── image.php
│   ├── audio.php
│   └── assets/
│       ├── style.css
│       └── fonts/
├── config.php
├── composer.json
├── README.md
```

---

## 🔄 Auto-update in Packagist

You can setup GitHub Actions or Webhook to automatically update the package on Packagist after each push.

Read more here:  
👉 https://packagist.org/about#how-to-update-packages

---

## 📃 License

[MIT License](LICENSE)

---

## 🙌 Author

Made with ❤️ by [Amirali Shabani](https://github.com/amiralishabani)
