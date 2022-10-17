<?php






	$host = 'localhost';
	$login = 'root';
	$pass = '';
	$namebd = 'my_test_bd';

	$link = mysqli_connect($host, $login, $pass, $namebd);

	$query = "CREATE TABLE profiles (
				id INT (10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				login VARCHAR (30) NOT NULL,
				password VARCHAR (30) NOT NULL
				)";

	$connect = mysqli_query($link, $query) or die(mysqli_error($link));