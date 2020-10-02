<?php
require 'connection.php';
header("Content-Type: text/html; charset=utf-8");

$updateId = $_POST['updateId'];
$title = $_POST['title'] ? $_POST['title'] : 'not specified';
$content = $_POST['content'] ? $_POST['content'] : 'not specified';
$date = date('Y-m-d');

$requery = 'UPDATE blog SET title = :title, content = :content, date = now() WHERE id = :updateId';
    $stmt = $dbh->prepare($requery, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $stmt->execute(array (':updateId' => $updateId, ':title' => $title, ':content' => $content));

header("Location: http://profi34/blog.dev/"); /* Перенаправление браузера */
