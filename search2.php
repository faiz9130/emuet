<?php require_once('connection/connection.php');

		$search = $_POST["name"];

		$sql="SELECT * FROM word WHERE word LIKE '%$search%'";

		$result = mysqli_query($conn, $sql);
		$row2 = mysqli_num_rows($result);
				
		if ($row2 > 0) 
		{
		echo "<table width='377' border='1' align='top' >
				<tr>
				<th>Word</th>
				<th colspan='2'>Meaning</th>
				</tr>";
		while($row = mysqli_fetch_array($result)) {
			echo "<tr>";
			
			echo "<td><div  id='b_".$row['idSearch']."'>" . $row['word'] . "</div></td>";
			echo "<td><div  id='c_".$row['idSearch']."'>" . $row['meaning'] . "</div></td>";
			echo "<td><input type='submit' onclick='deletet(".$row['idSearch'].")' name='submit' value='Delete' class='btn btn-info'>";
			echo "</tr>";
		}
		echo "</table>";
					
		}
		else 
		{	
			{
				echo "No Result Found";
			}
					
		}

mysqli_close($conn);
?>
