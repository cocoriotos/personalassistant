<!--  Developed by julián González Bucheli USE Firefox and JGBIpAddress/index.php, wuith W109HF0762/index.php dont appears the -->
<html lang="us"> <!-- Page language-->
	<head>	
		  <meta charset="iso-8559-1"/>
		  <meta name="Description" content="Utilization Tool"/> 
		  <meta name="keywords" content="Partner Tracker Tool"/>
		  <title>Utilization Tool - Julian Gonzalez Bucheli</title>
		  <!--<title>Drivers Quotation Tool - Julian Gonzalez Bucheli</title>  <!-- page tab title-->
		  <link rel="stylesheet" href="style_sheet.css"/> <!-- styles framework, template and Fonts-->
		  
		  <?php 
           //include "header.php";
		?>
	</head>
	<header>
		<HR id="HR"/>	<!-- Header title  --> <!-- -->
			<center><h1><font  color="#E1EAF7">Utilization Tool </font></h1></center>
			<!--<center><h1><font  color="#E1EAF7">Drivers Quotation Tool</font></h1></center>-->
		<HR/>
	</header>	
	  <body>
		<form id="login" action="access_successfinal.php" method="POST" autocomplete="off"> <!-- Form to login into application with authentication in database and valid username -->
			    <center><font color=lightblue id="form_title"><strong>Authentication Form</strong></font></center><br>	
			    <!--<center><font color=lightblue id="form_title"><strong>Authentication Form</strong></font></center><br>-->
                <center><img id="img_login" center SRC="accessicon.png"></img></center></br> <!-- Login Icon  -->
				<div class="inputdata1">
					<center><font id= "form_title" color="white"><strong>Username</strong></font></center><br>
					<!--<center><font id= "form_title" color="white"><strong>Username</strong></font></center><br>-->
					<center><input id="username1" type="text" name="username"  placeholder="Surname, Name" required ></center><br> <!-- Login   -->
					<!--<center><input id="username1" type="text" name="username"  placeholder="lastname, name" required ></center><br> <!-- Login   -->
				<br>
				</div >
				<div class="inputdata1">
					<center><font id= "form_title" color="white"><strong>Password</strong></font></center><br>
					<!--<center><font id= "form_title" color="white"><strong>Password</strong></font></center><br>-->
					<center><input id="username1" type="password" name="password" placeholder="Type Password" required ></center><br> <!-- Login   -->
					<!--<center><input id="username1" type="password" name="password" placeholder="Type your Password" required ></center><br> <!-- Login   -->
				<br>
				</div >
				<center><input id="loginbutton" type="submit" value="Login"></center>
				<!--<center><input id="loginbutton" type="submit" value="Sign In"></center>-->
		</form>
		<form id="login" action="requestaccessfinal.php" method="POST" autocomplete="off"> <!-- Form to request access-->
			<center>
				<h6 id="access" align="center"><address><strong>No Access?, Please fill your request</strong> </address></h6><br>
				<!--<h6 id="access" align="center"><address><strong>No access?, Please request it here</strong> </address></h6><br>-->
				<input id="requestaccess" type="submit" value="Request Acess "><br>
				<!--<input id="requestaccess" type="submit" value="Request Access"><br>-->
			</center>
		</form>
		<form id="login1" action="/default.php" method="POST" autocomplete="off"> 
			    <center><input id="loginbutton" type="submit" value="Cancel"></center>
			    <!--<center><input id="loginbutton" type="submit" value="Exit Page"></center>-->
				<br>
				<br>
				<br>	
		</form>	
		<?php //include "header.php";?>
		<footer id="contact">
				<hgroup>
					<h6 align="center"><address><strong>Web Admin:</strong> Julian Gonzalez Bucheli</address></h6>
					<h6 align="center"><address><strong>Email:</strong>cocoriotos@hotmail.com</address></h6>
					<h6 align="center"><address><strong>Phone:</strong>(+57) 305 429 31 85 </address></h6>
					<h6 align="center"><address><strong>Pereira - Colombia </strong></address></h6>
					<h6 time align="center" datetime="2021/4/1" pubdate>Published on Date: 01/04/2021 - WEB Page available: Monday to Friday  8 a.m. to 5 p.m.</time></h6> <!-- Publication format layout-->
				</hgroup>
		</footer>
	</body>
</html>