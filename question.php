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
						<a href="index.php">HOME</a>
					</li>
					<li id="link2">
						<a href="search.php">Search</a>
					</li>
					
					<li id="link4">
						<a href="concordance.php"><span>Concordance</span> Colloquial</a>
					</li>
					<li id="link5">
						<a href="past_year.php">Past Year</a>
					</li>
					<li id="link3">
						<a href="question.php"><span>Question</span></a>
					</li>
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
				<div class="header">
					<img src="images/quiz.jpg" height="400" width="800" alt="" >
				</div>
				<div class="body">
					<div class="section">
						
							<?php 
								$rid= rand(1,3);
								//echo $rid;
							?>
							
							<br />
							<br />
							
							<?php
							
								if($rid==1) {
								
								echo " <form action= 'process.php?id=1' method='post' id='quizForm' id='1'>
								
									<ol>
									<li> 
									<p><b> Eggs are used by the gallon by bakeries, hotels, fast food joints and companies that sell everything from cake mixes to mayonnaise to shampoo. This results tons of egg shells (1) ________ discarded. With the membrane attached, they may turn up as chicken feed or fertilisers. In fact , the discards will be buried in landfills. A technique developed by MacNeil, an American scientist, which separates the shell from the membrane has upgraded the industry.</b> </p>
									<br/>
									<div>
									<input type='radio' name='answerOne' id='answerOne' value='A' />
									<label for='answerOneA'> A)was</label>
									<div>
									
									<div>
									<input type='radio' name='answerOne' id='answerOne' value='B' />
									<label for='answerOneB'> B)were</label>
									</div>
									
									<div> 
									<input type='radio' name='onswerOne' id='answerOne' value='C' />
									<label for='answerOneC'> C) been</label>
									</div>
									
									<div> 
									<input type='radio' name='onswerOne' id='answerOne' value='D' />
									<label for='answerOneD'> D) being</label>
									</div>
									</li>
									
									<li>
									<p><b> KUALA LUMPUR, Thurs. – A team of researchers has developed a stratified fish rearing technique, which could breed about one million fish within 0.4ha pond. Developed by Technology Park Malaysia (TPM), the technique is a novel and innovate (1) _________ to overcome shortage faced by aquaculture industry. The technique is similar to the concept in building condominiums and flats to overcome land exploitation in urban areas.</b> </p>
									
									<div>
									<input type='radio' name='answerTwo' id='answerTwo' value='A' />
									<label for='answerTwoA'> A) pattern </label>
									</div>
									
									<div>
									<input type='radio' name='answerTwo' id='answerTwo' value='B' />
									<label for='answerTwoB'> B) fashion </label>
									</div>
									
									<div>
									<input type='radio' name='answerTwo' id='answerTwo' value='C' />
									<label for='answerTwoC'> C) solution </label>
									</div>
									
									<div>
									<input type='radio' name='answerTwo' id='answerTwo' value='D' />
									<label for='answerTwoD'> D) invention </label>
									</div>
									
									</li>
									
									<li>
									<p><b>LONDON: William Sheridan's drawing skills were stuck at nursery level. His stick figures were the sort you will expect a child to produce. But as he was recovering after a heart transplant operation, (1) ______ very astonishing happened. Suddenly he was blessed with an artistic talent that he just simply may not recognise</b> </p>
									
									<div>
									<input type='radio' name='answerThree' id='answerThree' value='A' />
									<label for='answerThreeA'> A) nothing </label>
									</div>
									
									<div>
									<input type='radio' name='answerThree' id='answerThree' value='B' />
									<label for='answerThreeB'> B) anything </label>
									</div>
									
									<div>
									<input type='radio' name='answerThree' id='answerThree' value='C' />
									<label for='answerThreeC'> C) something </label>
									</div>
									
									<div>
									<input type='radio' name='answerThree' id='answerThree' value='D' />
									<label for='answerThreeD'> D) everything </label>
									</div>
									</li>
									
									</ol>
									<input type='submit' value='Submit Quiz'/>
									
									</form>"; }
									
									if ($rid==2){
										
										echo "
										
										<form action='process.php?id=2' method='post' id='quizForm' id='2'>
										
										<ol>
										
											<li>
											<p><b> This new technique results in making pure calcium carbonate, which could be put in good use for the making of vitamin (1)            , toothpaste, and as a substitute for pulp. Therefore, valuable is the membrane which is a new source of collagen, a protein.</b></p>
											
											<div>
											<input type='radio' name='answerOne' id='answerOne' value='A' />
											<label for='answerOneA'> A) accompaniments </label>
											</div>
											
											<div>
											<input type='radio' name='answerOne' id='answerOne' value='B' />
											<label for='answerOneB'> B) supplements  </label>
											</div>
											
											<div>
											<input type='radio' name='answerOne' id='answerOne' value='C' />
											<label for='answerOneC'> C) complements </label>
											</div>
											
											<div>
											<input type='radio' name='answerOne' id='answerOne' value='D' />
											<label for='answerOneD'> D) elements </label>
											</div>
											
											</li>
											
											<li>
											<p><b>Feeling bogged down by routine? Getting bored with your lifestyle? Then join the new 24-hour revolution. Flexibility is the order (1) ______ the day. You can buy your groceries at midnight, book your holiday at 3 a.m., or discuss a business plan at 5.00 a.m. ?</b></p>
											
											<div>
											<input type='radio' name='answerTwo' id='answerTwo' value='A' />
											<label for='answerTwoA'> A) of </label>
											</div>
											
											<div>
											<input type='radio' name='answerTwo' id='answerTwo' value='B' />
											<label for='answerTwoB'> B) in</label>
											</div>
											
											<div>
											<input type='radio' name='answerTwo' id='answerTwo' value='C' />
											<label for='answerTwoC'> C) on </label>
											</div>
											
											<div>
											<input type='radio' name='answerTwo' id='answerTwo' value='D' />
											<label for='answerTwoD'> D) for </label>
											</div>
											
											</li>
											
											
											<li>
											<p><b> Ever wondered who invented those reﬂectors in the middle of the highway? He was an Englishman named Percy Shaw who (1) ______ the bright idea from cats’ eyes. One night in 1934, Shaw was driving home along the quiet, foggy road. It was late and she could hardly see anything</b></p>
											
											<div>
											<input type='radio' name='answerThree' id='answerThree' value='A' />
											<label for='answerThreeA'> A) discovered </label>
											</div>
											
											<div>
											<input type='radio' name='answerThree' id='answerThree' value='B' />
											<label for='answerThreeB'> B) exploited </label>
											</div>
											
											<div>
											<input type='radio' name='answerThree' id='answerThree' value='C' />
											<label for='answerThreeC'> C) inherited </label>
											</div>
											
											<div>
											<input type='radio' name='answerThree' id='answerThree' value='D' />
											<label for='answerThreeD'> D) obtained </label>
											</div>
											</li>
										
										</ol>
										<input type='submit' value='Submit Quiz' />
										
										</form>
										";
										}
										
										if($rid==3){
										
										echo"
										
										<form action='process.php?id=3' method='post' id='quizForm' id='3'>
										<ol>
										<li>
										<p><b> Today there is a sharp increase in the number of people who are working from their homes. These people are referred to as teleworkers. (1) ______ are people who work for companies using their personal computers in their respective homes. ?</b></p>
											
											<div>
											<input type='radio' name='answerOne' id='answerOne' value='A' />
											<label for='answerOneA'> A) They </label>
											</div>
											
											<div>
											<input type='radio' name='answerOne' id='answerOne' value='B' />
											<label for='answerOneB'> B) Their </label>
											</div>
											
											<div>
											<input type='radio' name='answerOne' id='answerOne' value='C' />
											<label for='answerOneC'> C) Those </label>
											</div>
											
											<div>
											<input type='radio' name='answerOne' id='answerOne' value='D' />
											<label for='answerOneD'> D) There </label>
											</div>
											</li>
											
											<li>
											<p><b>It is used in a wide variety of medical body (1) _______ such as heart valves and sponges. MacNeil researched the technique after years of trying just on everything. In the course of it, he pounded the shells, ground them, used acid and even sandpapered them to find out if separation was possible.</b></p>
											
											<div>
											<input type='radio' name='answerTwo' id='answerTwo' value='A' />
											<label for='answerTwoA'> A) instruments </label>
											</div>
											
											<div>
											<input type='radio' name='answerTwo' id='answerTwo' value='B' />
											<label for='answerTwoB'> B) necessities </label>
											</div>
											
											<div>
											<input type='radio' name='answerTwo' id='answerTwo' value='C' />
											<label for='answerTwoC'> C) sections </label>
											</div>
											
											<div>
											<input type='radio' name='answerTwo' id='answerTwo' value='D' />
											<label for='answerTwoD'> D) perfected </label>
											</div>
											
											</li>
											
											<li>
											<p><b> Suddenly he caught sight of twin points of yellow light reﬂected from the car’s headlights. He braked hard immediately (1) ______ came to a skidding halt. He quickly sneaked out of the car and discovered his vehicle hanging precariously over a sheer cliff.</b></p>
											
											<div>
											<input type='radio' name='answerThree' id='answerThree' value='A' />
											<label for='answerThreeA'> A) so </label>
											</div>
											
											<div>
											<input type='radio' name='answerThree' id='answerThree' value='B' />
											<label for='answerThreeB'> B) but </label>
											</div>
											
											<div>
											<input type='radio' name='answerThree' id='answerThree' value='C' />
											<label for='answerThreeC'> C) and </label>
											</div>
											
											<div>
											<input type='radio' name='answerThree' id='answerThree' value='D' />
											<label for='answerThreeD'> D) thus </label>
											</div>
											</li>
										
										</ol>
										<input type='submit' value='Submit Quiz' />
								
										</form>"	
									;
									}
									
									?>
								
									
									
								
									
						
				
			</div>
		</div>
	</div>
</body>
</html>
<?php mysqli_close($conn);?>