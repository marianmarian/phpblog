
<?php 

	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASS', '');
	define('DB', 'phpblog');

	$conn = new mysqli(HOST, USER, PASS, DB) or die("Conn cu serverul nu a reusit");