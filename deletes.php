<?php require_once('connection/connection.php');

$deleid = $_POST["name"];

$sql = "DELETE FROM word WHERE idSearch=$deleid";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>