<?php
require_once __DIR__.'/routines.php';

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Домашнее задание к лекции 5.1 «Менеджер зависимостей Composer»</title>
</head>
<body>
	<h2>Поиск адреса</h2>
	<form action="search.php" method="GET">
		<input type="text" name="address" placeholder="Адрес">
		<input type="submit" name="submit" value="Поиск">
	</form>
</body>
</html>
