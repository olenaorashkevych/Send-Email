
<?php
// Встановлюємо заголовки CORS
header("Access-Control-Allow-Origin: *"); // Дозволяє доступ з будь-якого джерела
header("Access-Control-Allow-Methods: POST, GET, OPTIONS"); // Дозволяє лише певні HTTP методи
header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Дозволяє певні заголовки

// Своя змінна яка буде приймати дані з форми
$formData = $_POST;

$headers = 'From: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$message = 'Name: ' . $formData['name'];
$message = $message . ', Email: ' . $formData['email'];
$message = $message . ', Phone: ' . $formData['phone'];
$message = $message . ', Message: ' . $formData['message'];

$res = mail(
    'olenaorashkevych@gmail.com',
    'message from web',
    $message,
    $headers
);

print_r($res);
