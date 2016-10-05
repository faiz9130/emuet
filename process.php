<?php require_once('connection/connection.php');
ERROR_REPORTING(E_ERROR);
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
<style>
	.highlightQiz
	{
	background-color:#7FFF00;
	}
	.highlightQiz2
	{
	background-color:#FF0000;
	}
	
</style>
	<div id="background">
		<div id="page">
			<div id="sidebar">
				<a href="home.html" class="logo"><img src="images/muet.png" width="145" height="auto" alt=""></a>
				<ul class="navigation">
					<li id="link1" class="selected">
						<a href="home.html">HOME</a>
					</li>
					<li id="link2">
						<a href="search.html">Search</a>
					</li>
					<li id="link3">
						<a href="question.php"><span>Question</span></a>
					</li>
					<li id="link4">
						<a href="concordance.php"><span>Concordance</span> Colloquial</a>
					</li>
					<li id="link5">
						<a href="past_year.php">Past Year</a>
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
	
	$fid=$_GET['id'];
?>
<?php 

	$answer1= $_POST['answerOne'];
	$answer2= $_POST['answerTwo'];
	$answer3=$_POST['answerThree'];
	
	$score=0;
	if ($fid=="1") {
	if($answer1 == "B"){$score++;}
	if($answer2 == "C"){$score++;}
	if($answer3 == "C"){$score++;}
	}
	if ($fid=="2") {
	if($answer1 == "B"){$score++;}
	if($answer2 == "A"){$score++;}
	if($answer3 == "A"){$score++;}
	}
	if ($fid=="3") {
	if($answer1 == "A"){$score++;}
	if($answer2 == "B"){$score++;}
	if($answer3 == "C"){$score++;}
	}
	
	echo "<center><font face='Berlin Sans FB' size='8'>Your score is <br> $score/3</font></center>";
	$rid=$fid;

							if($rid==1) {
								
								?>
								
									<ol>
									<li> 
									<p> Eggs are used by the gallon by bakeries, hotels, fast food joints and companies that sell everything from cake mixes to mayonnaise to shampoo. This results tons of egg shells (1) ________ discarded. With the membrane attached, they may turn up as chicken feed or fertilisers. In fact , the discards will be buried in landfills. A technique developed by MacNeil, an American scientist, which separates the shell from the membrane has upgraded the industry. </p>
									<br/>
									<div>
									
									<label id="q1A" for='answerOneA'> A)was</label>
									<div>
									
									<div>
									
									<label id="q1B" for='answerOneB'> B)were</label>
									</div>
									
									<div> 
									
									<label id="q1C" for='answerOneC'> C) been</label>
									</div>
									
									<div> 
									
									<label id="q1D" for='answerOneD'> D) being</label>
									</div>
									</li>
									
									<li>
									<p> KUALA LUMPUR, Thurs. – A team of researchers has developed a stratified fish rearing technique, which could breed about one million fish within 0.4ha pond. Developed by Technology Park Malaysia (TPM), the technique is a novel and innovate (1) _________ to overcome shortage faced by aquaculture industry. The technique is similar to the concept in building condominiums and flats to overcome land exploitation in urban areas. </p>
									
									<div>
									
									<label id="q2A" for='answerTwoA'> A) pattern </label>
									</div>
									
									<div>
									
									<label id="q2B" for='answerTwoB'> B) fashion </label>
									</div>
									
									<div>
									
									<label id="q2C" for='answerTwoC'> C) solution </label>
									</div>
									
									<div>
									
									<label id="q2D" for='answerTwoD'> D) invention </label>
									</div>
									
									</li>
									
									<li>
									<p>LONDON: William Sheridan's drawing skills were stuck at nursery level. His stick figures were the sort you will expect a child to produce. But as he was recovering after a heart transplant operation, (1) ______ very astonishing happened. Suddenly he was blessed with an artistic talent that he just simply may not recognise </p>
									
									<div>
									
									<label id="q3A" for='answerThreeA'> A) nothing </label>
									</div>
									
									<div>
									
									<label id="q3B" for='answerThreeB'> B) anything </label>
									</div>
									
									<div>
									
									<label id="q3C" for='answerThreeC'> C) something </label>
									</div>
									
									<div>
									
									<label id="q3D" for='answerThreeD'> D) everything </label>
									</div>
									</li>
									
									</ol>
									
									
									</form> <?php }
									
							if ($rid==2){
										
										?>
										
										<form action='process.php?id=2' method='post' id='quizForm' id='2'>
										
										<ol>
										
											<li>
											<p> This new technique results in making pure calcium carbonate, which could be put in good use for the making of vitamin (1)            , toothpaste, and as a substitute for pulp. Therefore, valuable is the membrane which is a new source of collagen, a protein.</p>
											
											<div>
											
											<label id="q1A" for='answerOneA'> A) accompaniments </label>
											</div>
											
											<div>
											
											<label id="q1B" for='answerOneB'> B) supplements  </label>
											</div>
											
											<div>
											
											<label id="q1C" for='answerOneC'> C) complements </label>
											</div>
											
											<div>
											
											<label id="q1D" for='answerOneD'> D) elements </label>
											</div>
											
											</li>
											
											<li>
											<p>Feeling bogged down by routine? Getting bored with your lifestyle? Then join the new 24-hour revolution. Flexibility is the order (1) ______ the day. You can buy your groceries at midnight, book your holiday at 3 a.m., or discuss a business plan at 5.00 a.m. ?</p>
											
											<div>
											
											<label id="q2A" for='answerTwoA'> A) of </label>
											</div>
											
											<div>
											
											<label id="q2B" for='answerTwoB'> B) in</label>
											</div>
											
											<div>
											
											<label id="q2C" for='answerTwoC'> C) on </label>
											</div>
											
											<div>
											
											<label id="q2D" for='answerTwoD'> D) for </label>
											</div>
											
											</li>
											
											
											<li>
											<p> Ever wondered who invented those reﬂectors in the middle of the highway? He was an Englishman named Percy Shaw who (1) ______ the bright idea from cats’ eyes. One night in 1934, Shaw was driving home along the quiet, foggy road. It was late and she could hardly see anything</p>
											
											<div>
											
											<label id="q3A" for='answerThreeA'> A) discovered </label>
											</div>
											
											<div>
										
											<label id="q3B"for='answerThreeB'> B) exploited </label>
											</div>
											
											<div>
											
											<label id="q3C" for='answerThreeC'> C) inherited </label>
											</div>
											
											<div>
											
											<label id="q3D" for='answerThreeD'> D) obtained </label>
											</div>
											</li>
										
										</ol> <?php
										}
										
							if($rid==3){
										
										?>
										
										<form action='process.php?id=3' method='post' id='quizForm' id='3'>
										<ol>
										<li>
										<p> Today there is a sharp increase in the number of people who are working from their homes. These people are referred to as teleworkers. (1) ______ are people who work for companies using their personal computers in their respective homes. ?</p>
											
											<div>
											
											<label id="q1A" value='a' for='answerOneA'> A) They </label>
											</div>
											
											<div>
											
											<label id="q1B" value='b' for='answerOneB'> B) Their </label>
											</div>
											
											<div>
											
											<label id="q1C" value='c' for='answerOneC'> C) Those </label>
											</div>
											
											<div>
											
											<label id="q1D" value='d' for='answerOneD'> D) There </label>
											</div>
											</li>
											
											<li>
											<p>It is used in a wide variety of medical body (1) _______ such as heart valves and sponges. MacNeil researched the technique after years of trying just on everything. In the course of it, he pounded the shells, ground them, used acid and even sandpapered them to find out if separation was possible.</p>
											
											<div>
											
											<label id="q2A" value='a' for='answerTwoA'> A) instruments </label>
											</div>
											
											<div>
											
											<label id="q2B" value='b' for='answerTwoB'> B) necessities </label>
											</div>
											
											<div>
											
											<label id="q2C" value='c' for='answerTwoC'> C) sections </label>
											</div>
											
											<div>
											
											<label id="q2D" value='d' for='answerTwoD'> D) perfected </label>
											</div>
											
											</li>
											<li>
											<p> Suddenly he caught sight of twin points of yellow light reﬂected from the car’s headlights. He braked hard immediately (1) ______ came to a skidding halt. He quickly sneaked out of the car and discovered his vehicle hanging precariously over a sheer cliff. </p>
											
											<div>
											
											<label id="q3A" value='a' for='answerThreeA'> A) so </label>
											</div>
											
											<div>
											
											<label id="q3B" value='b' for='answerThreeB'> B) but </label>
											</div>
											
											<div>
											
											<label id="q3C" value='c' for='answerThreeC'> C) and </label>
											</div>
											
											<div>
										
											<label id="q3D" value='d' for='answerThreeD'> D) thus </label>
											</div>
											</li>
											</ol> <?php }											
	?>
	
	<script type="text/javascript">
        function codeAddress() {
		
			var id = "<?php echo $_GET['id'];?>";
            var answer1 = "<?php echo $_POST['answerOne']; ?>";
			var answer2 = "<?php echo $_POST['answerTwo']; ?>";
			var answer3 = "<?php echo $_POST['answerThree']; ?>";
			
			if (id=="1") {
			if(answer1 == "B"){
			inputText = document.getElementById('q1B')
				var innerHTML = inputText.innerHTML
				innerHTML="<span class='highlightQiz'>" + innerHTML + "</span>" + "<a><img src='images/right.png'  width='20' height='20' border='0'/></a>";
				inputText.innerHTML = innerHTML 
			}
			if(answer1 != "B"){
				inputText2 = document.getElementById('q1B')
				var innerHTMLS = inputText2.innerHTMLS
				document.getElementById("q1B").innerHTML="<span class='highlightQiz'>" + inputText2.innerHTML + "</span>"+ "<a><img src='images/right.png'  width='20' height='20' border='0'/></a>"; 
				 
				inputText = document.getElementById('q1'+answer1)
				var innerHTML = inputText.innerHTML
				innerHTML="<span class='highlightQiz2'>" + innerHTML + "</span>"+ "<a><img src='images/DeleteRed.png'  width='20' height='20' border='0'/></a>"; 
				inputText.innerHTML = innerHTML  
			}
			if(answer2 == "C"){
			inputText = document.getElementById('q2C')
				var innerHTML = inputText.innerHTML
				innerHTML="<span class='highlightQiz'>" + innerHTML + "</span>"+ "<a><img src='images/right.png'  width='20' height='20' border='0'/></a>"; 
				inputText.innerHTML = innerHTML 
			}
			if(answer2 != "C"){
			
				inputText2 = document.getElementById('q2C')
				var innerHTMLS = inputText2.innerHTMLS
				document.getElementById("q2C").innerHTML="<span class='highlightQiz'>" + inputText2.innerHTML + "</span>"+ "<a><img src='images/right.png'  width='20' height='20' border='0'/></a>"; 
				 
				inputText = document.getElementById('q2'+answer2)
				var innerHTML = inputText.innerHTML
				innerHTML="<span class='highlightQiz2'>" + innerHTML + "</span>"+ "<a><img src='images/DeleteRed.png'  width='20' height='20' border='0'/></a>"; 
				inputText.innerHTML = innerHTML 
			}
			if(answer3 == "C"){
			inputText = document.getElementById('q3C')
				var innerHTML = inputText.innerHTML
				innerHTML="<span class='highlightQiz'>" + innerHTML + "</span>"+ "<a><img src='images/right.png'  width='20' height='20' border='0'/></a>"; 
				inputText.innerHTML = innerHTML 
			
			}
			if(answer3 != "C"){
				inputText2 = document.getElementById('q3C')
				var innerHTMLS = inputText2.innerHTMLS
				document.getElementById("q3C").innerHTML="<span class='highlightQiz'>" + inputText2.innerHTML + "</span>"+ "<a><img src='images/right.png'  width='20' height='20' border='0'/></a>"; 
				 
				inputText = document.getElementById('q3'+answer3)
				var innerHTML = inputText.innerHTML
				innerHTML="<span class='highlightQiz2'>" + innerHTML + "</span>"+ "<a><img src='images/DeleteRed.png'  width='20' height='20' border='0'/></a>"; 
				inputText.innerHTML = innerHTML 
			
			}
			}
			if (id=="2") {
			if(answer1 == "B"){
			inputText = document.getElementById('q1B')
				var innerHTML = inputText.innerHTML
				innerHTML="<span class='highlightQiz'>" + innerHTML + "</span>" + "<a><img src='images/right.png'  width='20' height='20' border='0'/></a>";
				inputText.innerHTML = innerHTML 
			}
			if(answer1 != "B"){
				inputText2 = document.getElementById('q1B')
				var innerHTMLS = inputText2.innerHTMLS
				document.getElementById("q1B").innerHTML="<span class='highlightQiz'>" + inputText2.innerHTML + "</span>"+ "<a><img src='images/right.png'  width='20' height='20' border='0'/></a>"; 
				 
				inputText = document.getElementById('q1'+answer1)
				var innerHTML = inputText.innerHTML
				innerHTML="<span class='highlightQiz2'>" + innerHTML + "</span>"+ "<a><img src='images/DeleteRed.png'  width='20' height='20' border='0'/></a>"; 
				inputText.innerHTML = innerHTML  
			}
			if(answer2 == "A"){
			inputText = document.getElementById('q2A')
				var innerHTML = inputText.innerHTML
				innerHTML="<span class='highlightQiz'>" + innerHTML + "</span>"+ "<a><img src='images/right.png'  width='20' height='20' border='0'/></a>"; 
				inputText.innerHTML = innerHTML 
			}
			if(answer2 != "A"){
			
				inputText2 = document.getElementById('q2A')
				var innerHTMLS = inputText2.innerHTMLS
				document.getElementById("q2A").innerHTML="<span class='highlightQiz'>" + inputText2.innerHTML + "</span>"+ "<a><img src='images/right.png'  width='20' height='20' border='0'/></a>"; 
				 
				inputText = document.getElementById('q2'+answer2)
				var innerHTML = inputText.innerHTML
				innerHTML="<span class='highlightQiz2'>" + innerHTML + "</span>"+ "<a><img src='images/DeleteRed.png'  width='20' height='20' border='0'/></a>"; 
				inputText.innerHTML = innerHTML 
			}
			if(answer3 == "A"){
			inputText = document.getElementById('q3A')
				var innerHTML = inputText.innerHTML
				innerHTML="<span class='highlightQiz'>" + innerHTML + "</span>"+ "<a><img src='images/right.png'  width='20' height='20' border='0'/></a>"; 
				inputText.innerHTML = innerHTML 
			
			}
			if(answer3 != "A"){
				inputText2 = document.getElementById('q3A')
				var innerHTMLS = inputText2.innerHTMLS
				document.getElementById("q3A").innerHTML="<span class='highlightQiz'>" + inputText2.innerHTML + "</span>"+ "<a><img src='images/right.png'  width='20' height='20' border='0'/></a>"; 
				 
				inputText = document.getElementById('q3'+answer3)
				var innerHTML = inputText.innerHTML
				innerHTML="<span class='highlightQiz2'>" + innerHTML + "</span>"+ "<a><img src='images/DeleteRed.png'  width='20' height='20' border='0'/></a>"; 
				inputText.innerHTML = innerHTML 
			
			}
			}
			if (id=="3") {
			if(answer1 == "A"){
			inputText = document.getElementById('q1A')
				var innerHTML = inputText.innerHTML
				innerHTML="<span class='highlightQiz'>" + innerHTML + "</span>"+ "<a><img src='images/right.png'  width='20' height='20' border='0'/></a>"; 
				inputText.innerHTML = innerHTML 
			}
			if(answer1 != "A"){
				inputText2 = document.getElementById('q1A')
				var innerHTMLS = inputText2.innerHTMLS
				document.getElementById("q1A").innerHTML="<span class='highlightQiz'>" + inputText2.innerHTML + "</span>"+ "<a><img src='images/right.png'  width='20' height='20' border='0'/></a>"; 
				 
				inputText = document.getElementById('q1'+answer1)
				var innerHTML = inputText.innerHTML
				innerHTML="<span class='highlightQiz2'>" + innerHTML + "</span>" + "<a><img src='images/DeleteRed.png'  width='20' height='20' border='0'/></a>";
				inputText.innerHTML = innerHTML  
			}
			if(answer2 == "B"){
				inputText = document.getElementById('q2B')
				var innerHTML = inputText.innerHTML
				innerHTML="<span class='highlightQiz'>" + innerHTML + "</span>"+ "<a><img src='images/right.png'  width='20' height='20' border='0'/></a>"; 
				inputText.innerHTML = innerHTML 
			}
			if(answer2 != "B"){
			
				inputText2 = document.getElementById('q2B')
				var innerHTMLS = inputText2.innerHTMLS
				document.getElementById("q2B").innerHTML="<span class='highlightQiz'>" + inputText2.innerHTML + "</span>"+ "<a><img src='images/right.png'  width='20' height='20' border='0'/></a>"; 
				 
				inputText = document.getElementById('q2'+answer2)
				var innerHTML = inputText.innerHTML
				innerHTML="<span class='highlightQiz2'>" + innerHTML + "</span>"+ "<a><img src='images/DeleteRed.png'  width='20' height='20' border='0'/></a>"; 
				inputText.innerHTML = innerHTML 
			}
			if(answer3 == "C"){
				inputText = document.getElementById('q3C')
				var innerHTML = inputText.innerHTML
				innerHTML="<span class='highlightQiz'>" + innerHTML + "</span>"+ "<a><img src='images/right.png'  width='20' height='20' border='0'/></a>"; 
				inputText.innerHTML = innerHTML 
			
			}
			if(answer3 != "C"){
				inputText2 = document.getElementById('q3C')
				var innerHTMLS = inputText2.innerHTMLS
				document.getElementById("q3C").innerHTML="<span class='highlightQiz'>" + inputText2.innerHTML + "</span>"+ "<a><img src='images/right.png'  width='20' height='20' border='0'/></a>"; 
				 
				inputText = document.getElementById('q3'+answer3)
				var innerHTML = inputText.innerHTML
				innerHTML="<span class='highlightQiz2'>" + innerHTML + "</span>" + "<a><img src='images/DeleteRed.png'  width='20' height='20' border='0'/></a>";
				inputText.innerHTML = innerHTML 
			
			}
			}
			
			
			
			
        }
        window.onload = codeAddress;
        </script>
	
</html>
<?php mysqli_close($conn);?>