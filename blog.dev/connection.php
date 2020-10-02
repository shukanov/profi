<?php 
	$dsn = 'mysql:dbname=profi;host=localhost';
	$user = 'root';
	$password = '';

	try {
		$dbh = new PDO($dsn, $user, $password);
	} catch (PDOException $e) {
		echo 'Подключение не удалось: ' . $e->getMessage();
	}
?>