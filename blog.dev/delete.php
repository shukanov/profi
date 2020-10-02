<?php
require 'connection.php';
header("Content-Type: text/html; charset=utf-8");

$deleteId = $_GET['deleteId'];

$requery = 'DELETE FROM blog WHERE id = :deleteId';
    $stmt = $dbh->prepare($requery, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $stmt->execute(array (':deleteId' => $deleteId));

header("Location: http://profi34/blog.dev/"); /* Перенаправление браузера */
