<?php require_once('connection/connection.php');?>

<?php

$uname = $_POST["Name"];
$password = $_POST["Password"];

$sql = "SELECT * from user where username = '$uname' AND password = '$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_num_rows($result);

$check=mysqli_fetch_array($result);

if (isset($check)) {
if ($uname=='admin') {
header ('Location: admin_home.php');
}
else {
echo "yes";
header ('Location: index.php');
} }
else {

echo "no";
$Message="Invalid username or password";
header("Location: home2.php?Message=" . urlencode($Message));

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