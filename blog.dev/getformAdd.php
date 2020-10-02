<?php
require 'connection.php';
header("Content-Type: text/html; charset=utf-8");

$title = $_POST['title'] ? $_POST['title'] : 'not specified';
$content = $_POST['content'] ? $_POST['content'] : 'not specified';
$date = date('Y-m-d');

$requery = 'INSERT INTO blog (title, content, date) VALUES (:title, :content, now())';
    $stmt = $dbh->prepare($requery, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $stmt->execute(array (':title' => $title, ':content' => $content));

header("Location: http://profi34/blog.dev/"); /* Перенаправление браузера */

// $requery = 'UPDATE tokens SET recurrent_token = :recurrent_token, payment_date = :payment_date, debiting_date = :debiting_date WHERE order_id = :order_id';
// $stmt = $dbh->prepare($requery, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
// $stmt->execute(array (':order_id' => $orderId, ':recurrent_token' => $token, ':payment_date' => $payment_date, ':debiting_date' => $debiting_date));

// get email from db for send mail. search with orderID
// $requery = 'SELECT * FROM tokens WHERE order_id=:order_id';  
// $stmt = $dbh->prepare($requery, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
// $stmt->execute(array (':order_id' => $orderId));
// $row = $stmt->fetchAll();
// $toMail = $row[0]['email'];