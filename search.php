<?php require_once('connection/connection.php');?>
	

<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>E-MUET Corpus</title>
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="sidebar">
				<!-- <a href="home.html" class="logo"><img src="images/muet.png" width="145" height="auto" alt=""></a> -->
				<ul class="navigation">
					<li id="link1" class="selected">
						<a href="index.php">HOME</a>
					</li>
					<li id="link2">
						<a href="search.php">Search</a>
					</li>
					
					<li id="link4">
						<a href="concordance.php"><span>Concordance</span></a>
					</li>
					<li id="link5">
						<a href="past_year.php">Past Year</a>
					</li>
				<!-- 	<li id="link3">
						<a href="question.php"><span>Question</span></a>
					</li> -->
					<li id="link6">
						<a href="about.html">About</a>
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
						&copy; Copyright 2012. <span>All rights reserved.</span>
					</p>
				</div>
			</div>
			<div id="content">
				<span></span>
				<div class="header">
					<img src="images/search.png" alt="">
				</div>
				<div class="section">
					<h2>Search</h2>
					<p>
						<form action="javascript:searchWord();" method="post" >
						<input type="text" name="search" value="" id="SearchUni" />
						<input type= "submit" value="search"  />
						
					</p>
					<div id="txtHint"><b>Word and definition will be listed here...</b></div>
					<?php					
					
					/* $search= @$_POST['search'];
					
					$sql = "SELECT * FROM word WHERE word ='$search'";
					$result = mysqli_query($conn,$sql)or die("Error: ".mysqli_error($conn));
					error_reporting(E_ALL^E_NOTICE);
					$query_run = mysql_query($sql);
					if (mysql_num_rows($query_run) >0){
						
					while($row = mysqli_fetch_array($result))
					{
					//looping equipment
					$word= $row['word'];
					$meaning= $row['meaning'];
					$example=$row['example'];
					
					}} else {
					 print '<script type="text/javascript">alert("The word is not in the database");</script>';
					} */
					?>
					
					</form>
						
					</p>
					<script type="text/javascript">
					function searchWord(){	
						
						var item = document.getElementById("SearchUni").value;
						
						$.ajax(
						{
						   type: "POST",
						   url: "search_conn2.php",
						   data: {name:item},
						   cache: false,			
						   success: function(data)
							{
									 if (item == "") {
									document.getElementById("txtHint").innerHTML = "Word will be listed here...";}
									 if (data == "") {
									document.getElementById("txtHint").innerHTML = "There is no such word in the database";
									
									 }else
									document.getElementById("txtHint").innerHTML = data;
										
							}
							
						});
					}
					</script>
				
					<div>
						
						<ul>
							<li>
			

						
					</div>
					<p>
						
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php mysqli_close($conn);?>