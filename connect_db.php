<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'school';
$con = new mysqli($host, $user, $pass, $db);

if (!$con)
{
	die("connection failed:" . mysqli_connect_error());
}

?>
