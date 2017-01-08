<?php
$servername = "localhost";
$username = "duriantu_emuet";
$password = "emuet";
$dbname = "duriantu_emuet";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die ("Connection failed: ".
	mysqli_connect_error());
}
?>
