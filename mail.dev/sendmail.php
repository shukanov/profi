<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$from = 'shukanov21@ya.ru';
$subject = 'Test';
$message = " name: $name\r\nemail: $email\r\nphone: $phone";
$headers = 'From: ' . $from;

if (mail($email, $subject, $message, $headers)) {
    echo "\nПисьмо отправлено\n";
} else {
    echo "\nПисьмо не отправлено \n"; 
}
