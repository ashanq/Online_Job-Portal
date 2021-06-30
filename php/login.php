<?php

$host="localhost";
$user="root";
$password="";
$db="demo";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset(["username"])){
	$uname=$_POST["username"];
	$password=$_POST["password"];
	
	$sql="select * from loginfrom where user='".$uname."'AND pass='"$password"' limit 2";
	
	$result=mysql_query($sql);
	
	if(mysql_num_rows($result)==2){
		echo "You have login Successfully";
		exit();
	}
	else{
		echo "You have Enter Incorrect Password";
		exit();
	}
}


?>







<!DocType html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Log In</title>
		<link rel="stylesheet" type="text/css" href="style/login.css"> </link>		
	</head>
	<body>
	<div id="main">
			<nav>
				<img src="image/logo.png" width="200" height="100">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Find a Job</a></li>
					<li><a href="#">Post a Job</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">About Us</a></li>
					<button class="myaccount" type="button">My Account</button>
					<button class="sginup" type="button">Sgin Up</button>
					<button class="login" type="button">Log In</button>	
				</ul>
			</nav>	
		<div class="login-box">
			<h1>Log In</h1>
			<form method = "PSOT" action = "#">
			<div class="textbox">
				<input type="text" placeholder="Username" name="username" value="">
			</div>
			<div class="textbox">
				<input type="password" placeholder="password" name="password" value="">
			</div>	
		<input class="btn" type="button" name="" value="Sign In">
		</form>
		<span><a href="#">I Forget my Username?</a><br>I Forget Password?</a></span>
			</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
<div class="footer">
			<div class="inner-footer">
				<div class="footer-item">
				<h2>Compony Logo</h2>
				<p>This site is providi about job and any users can use it and it is a free we aspect provide good sirvice!</p>
				<img src="image/logo.png" width="200" height="250">
			</div>
			<div class="footer-item">
				<h2>Navigation</h2>
				<div class="border"></div>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Find a Job</a></li>
					<li><a href="#">Post a Job</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Address</a></li>
					<li><a href="#">Compony</a></li>
					<li><a href="#">Location</a></li>
					<li><a href="#">Payment</a></li>
				</ul>
			</div>
			<div class="footer-item">
				<h2>Get Help</h2>
				<div class="border"></div>
				<ul>
					<li><a href="#">Order</a></li>
					<li><a href="#">Dilivary</a></li>
					<li><a href="#">Refund</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Address</a></li>
					<li><a href="#">Compony</a></li>
					<li><a href="#">Location</a></li>
					<li><a href="#">Payment</a></li>
				</ul>
			</div>
			<div class="footer-item">
				<h2>Quick links</h2>
				<div class="border"></div>
				<ul>
					<li><a href="#">Order</a></li>
					<li><a href="#">Dilivary</a></li>
					<li><a href="#">Refund</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Address</a></li>
					<li><a href="#">Compony</a></li>
					<li><a href="#">Location</a></li>
					<li><a href="#">Payment</a></li>
				</ul>
			</div>
			<!--------------<div class="footer-item">
				<h2>Main Details Us</h2>
				<div class="border"></div>
				<ul>
					<li><a href="#">Order</a></li>
					<li><a href="#">Dilivary</a></li>
					<li><a href="#">Refund</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Address</a></li>
					<li><a href="#">Compony</a></li>
					<li><a href="#">Location</a></li>
					<li><a href="#">Payment</a></li>
				</ul>
			</div>--------------------------------------->
		</body>
</html>
		