<?php require_once('connection/connection.php');
session_start();
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
	<form id="form1" name="form1" method="post" action="reg_conn.php">
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
						<a href="events.html"><span>Question</span></a>
					</li>
					<li id="link4">
						<a href="concordance.html"><span>Concordance</span> Colloquial</a>
					</li>
					<li id="link5">
						<a href="blog.html">Blog</a>
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
				
				<div class="header">
					<img src="images/studentsuccess.png" alt="">
				</div>
				<div class="body">
					<div class="section">
					<h3> REGISTER </h3>
						<br />
    <td width="810"><table width="478" border="0">
      <tr>
        <td align="center"><table width="478" border="1" align="center">
          <tr>
            <td width="92">Name</td>
            <td width="4">:</td>
            <td width="360">
              <label for="textfield2"></label>
              <input type="text" name="name" id="name" size = '60'/>
            </td>
          </tr>
          <tr>
            <td>Address</td>
            <td>:</td>
            <td>
              <label for="textfield3"></label>
              <input type="text" name="address" id="address" size = '60' />
            </td>
          </tr>
          
          <tr>
            <td>Email</td>
            <td>:</td>
            <td>
              <label for="textfield5"></label>
              <input type="text" name="email" id="email" size = '60' />
            </td>
          </tr>
          <tr>
            <td>Phone no</td>
            <td>:</td>
            <td>
              <label for="phoneno"></label>
              <input type="text" name="phoneno" id="phoneno" size = '60' />
            </td>
          </tr>
		  <tr>
            <td>Username</td>
            <td>:</td>
            <td>
              <label for="textfield5"></label>
              <input type="text" name="username" id="username" size = '60' />
            </td>
          </tr>
		  <tr>
            <td>Password</td>
            <td>:</td>
            <td>
              <label for="textfield5"></label>
              <input type="text" name="password" id="password" size = '60' />
            </td>
          </tr>
          
          
         
<td>
<input name="Register" type="submit"  value="Register"/>
</td>
<td>
<input name="Logout" type="button" onClick="location.href='home.html';" value="Logout"/>
</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
   
  </tr>
</table>
</form>
</body>
</html>
