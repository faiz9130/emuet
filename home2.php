<?php require_once('connection/connection.php');
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
<?php
if (isset($_GET['Message'])) {
    print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
}?>
	<div id="background">
		<div id="page">
			<div id="sidebar">
				<a href="home.html" class="logo"><img src="images/muet.png" width="145" height="auto" alt=""></a>
				
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
				<br/>
				<br/>
				<div>
					<h3>social:</h3>
					<ul>
						<li class="facebook">
							<a href="www.google.com">facebook</a>
						</li>
						<li class="twitter">
							<a href="www.google.com">twitter</a>
						</li>
						<li class="googleplus">
							<a href="www.google.com">googleplus</a>
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
										<a href="home.html"><img src="images/download.png" alt=""></a>
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
										<a href="home.html"><img src="images/magnifyingglass.png" alt=""></a>
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
						<h1><span>Enjoy</span> English!</h1>
						<p>
							You can score MUET now by using this system. It will help you in answering MUET. You can find words and question. You can improve your English by answering the question. We are ready to help you.
						</p>
					</div>
					<form action="login_connection.php" method="POST">
						<h3>LOGIN</h3>
						<input type="text" name="Name" value="Name" id="Name">
						<input type="password" name="Password"  value="Password" id="Password">
						<input type="submit" value="Login">
						<input type="button" value="Sign up">
						<a href="register.php"><input type="button" value="Register Now!"></a>
						
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php mysqli_close($conn);?>
