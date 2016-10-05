<?php require_once('connection/connection.php');
ERROR_REPORTING(E_ERROR);
?>
<?php

$word = $_POST["word"];
$meaning = $_POST["meaning"];
$example= $_POST["example"];
if ($word != NULL){ 
$sql = "INSERT into word (word, meaning, example) VALUES ('$word','$meaning', '$example') ";
				
$result = mysqli_query($conn, $sql);
$row = mysqli_num_rows($result);}

?>
<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html lang="en-US">
<head>

	<meta charset="UTF-8">
	<title>E-MUET CORPUS</title>
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="sidebar">
				<a href="home.html" class="logo"><img src="images/muet.png" width="145" height="auto" alt=""></a>
				<ul class="navigation">
					<li id="link1" class="selected">
						<a href="home.html">HOME</a>
					</li>
					<li id="link2">
						<a href="admin_word.php">Word</a>
					</li>
					<li id="link3">
						<a href="home2.php">Logout</a>
					</li>
					
					
				</ul>
				<div>
					<h3>location:</h3>
					<ul>
						<li>
							Universiti Teknikal
						</li>
						<li>
							Malaysia Melaka,
						</li>
						<li>
							Melaka
						</li>
					</ul>
				</div>
				<div>
					<h3>call:</h3>
					<ul>
						<li>
							013 266 7335
						</li>
						<li>
							011 2822 4070
						</li>
					</ul>
				</div>
				<div>
					<h3>social:</h3>
					<ul>
						<li class="facebook">
							<a href="http://freewebsitetemplates.com/go/facebook/">facebook</a>
						</li>
						<li class="twitter">
							<a href="http://freewebsitetemplates.com/go/twitter/">twitter</a>
						</li>
						<li class="googleplus">
							<a href="http://freewebsitetemplates.com/go/googleplus/">googleplus</a>
						</li>
					</ul>
				</div>
				<div class="copyright">
					<p>
						&copy; Copyright 2016. <span>All rights reserved.</span>
					</p>
				</div>
			</div>
			<div id="content">
				<span></span>
				<div class="header">
					<img src="images/studentsuccess.png" alt="" >
				</div>
				<div class="section">
				<?php ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
               ?>
			   <form name="form1" action="admin_word.php" method="POST">
				<h2>Add Word</h2>
				
				
				
				<table width="371" border="0" align="center">
				<td width="111">Word</td>
					<td width="7">:</td>
					<td width="289">
					<label for="textfield2"></label>
					<input type="text" name="word" id="word" size=40 />
				</td>
				</tr>
				<tr>
			<td>Meaning</td>
			<td>:</td>
			<td>
			  <label for="textfield3"></label>
			  <input type="text" name="meaning" id="meaning" size=40 />
			</td>
			</tr>
			<tr>
			<td>Example</td>
			<td>:</td>
			<td>
			  <label for="textfield4"></label>
			  <input type="text" name="example" id="example" size=50 />
			</td>
			<tr align="center">
    <td colspan="2">
      <input type="submit" name="button2" id="button2" value="Submit" />
    <tr>
		  </tr>
		  </table>
		  </form>
		  <?php ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
               ?>
		  <br />
	 <?php ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
               ?>
			   <form>
					<h2>Delete Word</h2>
				
				<form id="form1" action="javascript:searchProduct();" method="post">
					<label for="searchName" class="col-md-2">Search Word:</label>
					<input type="text" class="form-control" id="searcg"  placeholder="Search Here..." onkeyup="searchProduct(this.value)"><br>
					
					
				</form></form>
				<div id="txtHint"><b>Word will be listed here...</b></div>
				</div></div>
				<script type="text/javascript">
					function searchProduct(){						
						var item = document.getElementById("searcg").value;
						
		
						$.ajax(
						{
						   type: "POST",
						   url: "search2.php",
						   data: {name:item},
						   cache: false,			
						   success: function(data)
							{
								
									 if (item == "") {
									document.getElementById("txtHint").innerHTML = "Word will be listed here...";
									 }else
									document.getElementById("txtHint").innerHTML = data;
										
							}
						});
					}
					function deletet(isd){
						
						var cnthk = isd;
						$.ajax(
						{
						   type: "POST",
						   url: "deletes.php",
						   data: {name:cnthk},
						   cache: false,			
						   success: function(data)
							{
								alert(data.trim());
										
							}
						});
					
					}
					function updatet(isd){
						
						var cnthk = isd;
						var names = document.getElementById("a_"+isd).innerHTML;
						var tpess = document.getElementById("b_"+isd).innerHTML;
						var conti = document.getElementById("c_"+isd).innerHTML;
						$.ajax(
						{
						   type: "POST",
						   url: "update.php",
						   data: {idd:cnthk,name:names,tps:tpess,cnt:conti},
						   cache: false,			
						   success: function(data)
							{
								alert(data.trim());
										
							}
						});
					updatet	
					}
				</script>			
					<?php
					
					//$delete= @$_POST['delete'];
					//$sqlv= "DELETE idSearch, word, meaning WHERE word='$delete'";
							//if (mysqli_query($conn, $sqlv)) {
								//echo "<script>alert('Record deleted successfully'); window.location.assign('admin_word.php'); </script> ";
							//} else {
								//echo "<script>alert('Error deleting record') " . mysqli_error($conn);
								//}				?>
					</tr>
					
					 <?php ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
               ?>
		  
		  
		  
		  
		  
		  
<?php mysqli_close($conn);?>
