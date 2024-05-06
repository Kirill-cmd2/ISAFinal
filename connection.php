<?php

$server="localhost";
$user="myuser";
$pass="123123123";
$db="db_weather";

$con=mysqli_connect($server, $user, $pass, $db);

echo"connected";
?>