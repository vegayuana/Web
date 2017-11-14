<!DOCTYPE html>
<html>
	<head>
		<title> Sign Up </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?php echo base_url(); ?>static/signup/styles.css">
	</head>
	<body>
		<div class="kiri">
		<center>
		<div class="box">
			<ul>
			  <li><a class="active" href="#">Sign up</a></li>
			  <li><a href="http://localhost/ciweb/index.php/adv/login">Log in</a></li>
			</ul>
			<div class="isi">
			<form method='post' action='http://localhost/ciweb/index.php/adv/insert_to_users'>
				<div class="tulisan">USERNAME</div>
				<center><input type="text" name="user"></center>
				<div class="tulisan">PASSWORD</div>
				<center><input type="password" name="password"></center>
				<div class="tulisan">E-MAIL</div>
				<center><input type="text" name="email">
				<input type="submit" value="SIGN UP"></center>
			</form>
			</div>	
		</div>
		</center>
		</div>
		<div class="foot">
			<p>Connect With Us</p>
			<a href="https://www.gmail.com"><image src="<?php echo base_url(); ?>static/icon/mail.png" alt="mail" style="width:70px; height:70px;"></a>
			<a href="https://www.fb.com"><image src="<?php echo base_url(); ?>static/icon/fb.png" alt="fb" style="width:70px; height:70px;" ></a>
			<a href="https://www.twitter.com/dualipa"><image src="<?php echo base_url(); ?>static/icon/twitter.png" alt="twitter" style="width:70px; height:70px;"></a>
			<a href="https://www.youtube.com/watch?v=fEOyePhElr4"><image src="<?php echo base_url(); ?>static/icon/yt.png" alt="youtube" style="width:70px; height:70px;"></a>
			<a href="https://www.instagram.com/dualipa"><image src="<?php echo base_url(); ?>static/icon/ig.png" alt="ig" style="width:70px; height:70;">
		</div>
	</body>
</html>