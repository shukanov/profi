<?php
header("Content-Type: text/html; charset=utf-8");

$firstName = $_POST['firstName'] ? $_POST['firstName'] : 'not specified';
$lastName = $_POST['lastName'] ? $_POST['lastName'] : 'not specified';
$message = $_POST['message'] ? $_POST['message'] : 'not specified';

echo "First Name: $firstName";
echo "<br>Last Name: $lastName";
echo "<br>Message: $message";
