<?php require_once('connection/connection.php');
?>
<?php

$name = $_POST["name"];
$address = $_POST["address"];
$email = $_POST["email"];
$phoneno= $_POST["phoneno"];
$username=$_POST["username"];
$password=$_POST["password"];


$sql = "INSERT INTO user VALUES ('', '".$name."','".$address."', '".$email."', '".$phoneno."', '".$username."', '".$password."')";
//echo $sql;
$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));

if ($row > 0) {

echo "yes";
header ('Location: search.php');
}
else {

echo "no";
header('Location: home.html');
}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
<?php mysqli_close($conn);?>