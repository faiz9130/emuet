<?php require_once('connection/connection.php');?>
	
<?php
	define('FILELIST_INTERN_CALL', '1');
	
	require_once('filelist/config.php');
	
	$_gFL['Config.BasePath'] = 'files/';
	$_gFL['Config.ImagePath'] = 'filelist/images/';
	
	require_once('filelist/language/english.php');
	
	require_once('filelist/filelist.php');
	
	?>
<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>E-MUET Corpus</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	
	<meta http-equiv="content-type" content="text/html; charset=<?php echo FileList_GetLngStr("Charset"); ?>" />
	<meta name="author" content="Gaijin.at (http://www.gaijin.at/)" />
	<meta name="copyright" content="Gaijin.at (http://www.gaijin.at/)" />
	<link rel="stylesheet" type="text/css" href="filelist/filelist.css" />
	<link rel="stylesheet" type="text/css" href="main.css" />
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
						<a href="concordance.php"><span>Concordance</span> </a>
					</li>
					<li id="link5">
						<a href="past_year.php">Past Year</a>
					</li>
					<!-- <li id="link3">
						<a href="question.php"><span>Question</span></a>
					</li> -->
					<li id="link6">
						<a href="about.html">About</a>
					</li>				</ul>
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
					<img src="images/studentsuccess.png" alt="" >
				</div>
				<div class="section">
					<h2>Past Year </h2>
					<div>
					<?php
if (!FileList_Show()) {
	echo '<p class="FileListErrorMessage">' . FileList_GetLngStr('ErrDirAccessFailed') . "</p>\n";
}
?>

						</div>
						<div class="sidebar">
							<div>
								
								<ul>
									
</body>
</html>
<?php mysqli_close($conn);?>