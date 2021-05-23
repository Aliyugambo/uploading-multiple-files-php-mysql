<?php

$servename ="localhost";
$username="root";
$password = "";
$dbname = "lab4";

$conn = mysqli_connect($servename,$username,$password,$dbname);
if (!$conn) {
	echo "connection fieles";
	exit();
}

?>