<?php require_once('connection/connection.php');
?>
<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>E-MUET CORPUS</title>
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
					
					
					<li id="link 7">
						<a href="home.html"> Logout</a>
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
				<div class="body">
					<div class="section">
						<div class="article">
							<h4></h4>
							<ul>
								<li>
									<h3>Question</h3>
									<div>
										<a href="events.html"><img src="images/download.png" alt=""></a>
										<p>
											This is the right place if you have question about MUET.
										</p>
									
								</li>
							</ul>
						</div>
						<div class="article">
							<h4></h4>
							<ul>
								<li>
									<h3>Searching</h3>
									<div>
										<a href="events.html"><img src="images/magnifyingglass.png" alt=""></a>
										<p>
											You can search the words you want to know.
										</p>
								
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer">
					<div>
						
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php mysqli_close($conn);?>
