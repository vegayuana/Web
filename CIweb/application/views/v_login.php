<!DOCTYPE html>
<html>
	<head>
		<title> Log In </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/styles.css">
	</head>
	<body>
		<div class="kiri">
		<center>
		<div class="box">
			<ul>
			  <li><a href="http://localhost/ciweb/index.php/adv/signup">Sign up</a></li>
			  <li><a class="active" href="#">Log in</a></li>
			</ul>
            <?php echo form_open('index.php/adv/login'); ?>
            <?php
             echo "<div class='error_msg' style='color:#b23333; padding-top:15px;'>";
              if (isset($error_message)) {
               echo $error_message;
              }
             echo validation_errors();
             echo "</div>";
            ?>
            
			<div class="isi">    
				<div class="tulisan">USERNAME</div>
				<center><input type="text" name="username"></center>
				<div class="tulisan">PASSWORD</div>
				<center><input type="password" name="password"></center>
				<input type="submit" value="Log in"></center>
                <?php echo form_close(); ?>
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