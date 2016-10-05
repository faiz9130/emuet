<?php require_once('connection/connection.php');?>

 <?php
 $search = $_GET["search"];
// $search = $_POST["search"];
 $sql = "SELECT * FROM word WHERE word LIKE '%$search%'";
//$find= mysqli_query("SELECT* FROM 'word' WHERE 'word' LIKE '%$search%'");
$result = mysqli_query($conn, $sql);
//$row = mysqli_num_rows($result);

//$search = mysqli_real_escape_string(trim($_POST['search1']));

while($row = mysqli_fetch_array($result))
{
	
	$word= $row['word'];
	
	echo "<B>".$word."<br /></B>";
	echo $row ['meaning'];

}
?>
<?php mysqli_close($conn);?>