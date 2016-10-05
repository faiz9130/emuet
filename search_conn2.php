<?php require_once('connection/connection.php');

			$search= $_POST['name'];
					
					$sql = "SELECT * FROM word WHERE word ='$search'";
					$result = mysqli_query($conn,$sql)or die("Error: ".mysqli_error($conn));
					//$query_run = mysql_query($sql);
					//if (mysql_num_rows($query_run) >0){
						
					while($row = mysqli_fetch_array($result))
					{
					echo "<h3> Words and Meaning </h3>
					<p>
					Please remember the terms are only in MUET examination past year. and the definition is from Dictionary.com.
					</p>
					<table width='377' border='1' align='top'>
					<tr>
					<td width='75' align='center'>Word</td>
					
					<td width='80' align='center'>Meaning</td>
					
					<tr>";
					//looping equipment
					$word= $row['word'];
					$meaning= $row['meaning'];
					$example=$row['example'];
					
					echo "
			
					<td width='75' align='center'><input id='word' name='word' type='text' value='".$word."'/>  </td>
							
					<td width='75' align='center'><input id='meaning' name='meaning' type='text' value='".$meaning."' size='75'/> </td>
							
					</tr>
							
					</table>
					<p> e.g : ".$example."</p>";
					
					}//} else {
					 //echo "The word is not in the database";
					//}
mysqli_close($conn);
?>
