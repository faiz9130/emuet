<?php require_once('connection/connection.php');?>

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
			<!-- 	<a href="home.html" class="logo"><img src="images/muet.png" width="145" height="auto" alt=""></a> -->
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
				<div class="article">
					<h2>What is CONCORDANCE?</h2>
					<p>
						Concordance is an alphabetical index of the principal of words of a book. It is a book that indexes the principal words in a literary work, often with the immediate context and an account of the meaning. For an example .............
					</p>
					<h4>Search Concordance</h4>
						<p>
						<form name="" action="concordance.php" method="POST">
						<input type="text" name="find" value="" id="find" >
						<input type= "submit" name="submit" value="Find"  />
						</form>
						</p>
						<p>
						<?php
						$query= @$_POST['find'];
						if (!empty($query)) {

						require("doc2txt.class.php");

							$docObj = new Doc2Txt("test2004.docx");
							$docObj2 = new Doc2txt("test2002.docx");
							$docObj3 = new Doc2Txt("test2003.docx");
							$docObj4 = new Doc2Txt("test2005.docx");
							$docObj5 = new Doc2Txt("test2006.docx");
							$docObj6 = new Doc2Txt("test2007.docx");
							$docObj7 = new Doc2Txt("test2010.docx");



							//$docObj = new Doc2Txt("test.doc");

							$txt[0]= $docObj2->convertToText();
							$txt[1]= $docObj3->convertToText();
							$txt[2] = $docObj->convertToText();
							$txt[3]= $docObj4->convertToText();
							$txt[4]= $docObj5->convertToText();
							$txt[5]= $docObj6->convertToText();
							$txt[6]= $docObj7->convertToText();

							$year[0]="2002";
							$year[1]= "2003";
							$year[2]= "2004";
							$year[3]= "2005";
							$year[4]= "2006";
							$year[5]= "2007";
							$year[6]= "2010";
							?>

						<table width="500" border="1" align="top">
						<tr>
						<td width="200" align="center">Left Context</td>

						<td width="70" align="center">Word</td>

						<td width="200" align="center">Right Context</td>

						<td width="50" align="center">Year</td>

						<?php
						for ($i=0; $i<2; $i++)
						{
							//echo $txt[$i];
							// echo "hi".substr_count($txt[$i],$query);
							$expl = explode($query, $txt[$i]);

							$berapaKali = count($expl);

							if (array_key_exists('1',$expl )) {

								for ($j=0; $j < $berapaKali; $j++) {
									// items on the left side of middle string
									$expl_left = explode(" ", $expl[$j]);

									$left_cnt = count($expl_left);

									$new_left = $expl_left[$left_cnt-6]. " " .$expl_left[$left_cnt-5]. " " .$expl_left[$left_cnt-4]. " " .$expl_left[$left_cnt-3] . " " . $expl_left[$left_cnt-2];

									// items on the right side of middle string
									$expl_right = explode(" ", $expl[$j+1]);

									$new_right = $expl_right[1] . " " . $expl_right[2]. " " . $expl_right[3]. " " . $expl_right[4]. " " . $expl_right[5];

									$new = "... " . $new_left . " " . $query . " " . $new_right . " ...";
									$leftt = "... " . $new_left;
									$rightt = $new_right . " ...";

									if(!empty($query) && array_key_exists('1',$expl )) {
									?>

									<tr>
								 <td width="" align="center"><p><?php echo $leftt; ?></p></td>

								 <td width="" align="center"><p><?php echo $query; ?></p></td>

								 <td width="" align="center"><p><?php echo $rightt;?></p></td>

								 <td width="" align="center"><p><?php echo $year[$i];?></p></td>


								 </tr>

										<?php }

								}

							// // items on the left side of middle string
							// $expl_left = explode(" ", $expl[0]);
							//
							// $left_cnt = count($expl_left);
							//
							// $new_left = $expl_left[$left_cnt-6]. " " .$expl_left[$left_cnt-5]. " " .$expl_left[$left_cnt-4]. " " .$expl_left[$left_cnt-3] . " " . $expl_left[$left_cnt-2];
							//
							// // items on the right side of middle string
							// $expl_right = explode(" ", $expl[1]);
							//
							// $new_right = $expl_right[1] . " " . $expl_right[2]. " " . $expl_right[3]. " " . $expl_right[4]. " " . $expl_right[5];

							// new string formated
							// $new = "... " . $new_left . " " . $query . " " . $new_right . " ...";
							// $leftt = "... " . $new_left;
							// $rightt = $new_right . " ...";

						}

							//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

						?>
						<?php
						{

						//print $new;
						}

						?>



						<?php
						//  if(!empty($query) && array_key_exists('1',$expl )) {
						 ?>

						 <!-- <tr>
						<td width="" align="center"><input id="word" name="word" type="text" value='<?php echo $leftt; ?>' size="30"/>  </td>

						<td width="" align="center"><input id="meaning" name="meaning" type="text" value='<?php echo $query; ?>' size="10"/> </td>

						<td width="" align="center"><input id="word" name="word" type="text" value='<?php echo $rightt; ?>' size="30"/>  </td>

						<td width="" align="center"><input id="meaning" name="meaning" type="text" value='<?php echo $year[$i]; ?>' size="5"/> </td>


						</tr> -->

							 <?php //}
							 }
							}
							?>

						</table>



				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php mysqli_close($conn);?>
