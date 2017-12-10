<!DOCTYPE html>
<html>
    <?php
        if(isset($this->session->userdata['logged_in'])){
            $username = ($this->session->userdata['logged_in']['username']);
        }
    ?>
<head>
	<title> News </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/newsstyles.css">
    
</head>
<body>
	<div class="logo">
		<image src="<?php echo base_url(); ?>static/icon/logo1.png" alt="logo" style="width:120px; height:70px; margin:10px 10px 0 10px;">
	   
        <?php
            if (isset ($username)){
                 echo "<li style='float: right; display: block; list-style-type: none; background-color:#b23333; color: #edf0da ;border-radius:5px; text-align: center; font-family: eth; font-size:20px; text-decoration:none; margin:20px 60px 10px 0px;padding: 10px 10px 0px 10px;'><p><a href='http://localhost/ciweb/index.php/adv/logout'>Log Out</a></p></li>";
            }
            else{
                echo "<li style='float: right; display: block; list-style-type: none; background-color:#b23333; color: #edf0da ;border-radius:5px; text-align: center; font-family: eth; font-size:20px; text-decoration:none; margin:20px 60px 10px 0px;padding: 10px 10px 0px 10px;'><p><a href='http://localhost/ciweb/index.php/adv/login'>Log In</a></p></li>";
            }
        ?>    
    </div>
		
    <header class="head">
		<ul>
            <li><a href="http://localhost/ciweb/index.php/adv" >Home</a></li>
            <li><a href="#" >News</a></li>
            <li><a href="http://localhost/ciweb/index.php/adv/tickettour">Tours & Ticket</a></li>
            <li><a href="http://localhost/ciweb/index.php/adv/merch">Merch</a></li>
             <?php
            if (isset ($username)){
                echo "<p style='font-family :cho; font-size: 25px;text-align: center;color: #b23333; margin:0;'>Hello " . $username . " ! </p>";
            }?>
		</ul>
    </header>
	
		<div id="content">
			<div class= "bagian">
		<div class="judul">NEWS</div>
	  <div class="isi">
	     <?php foreach($response as $data){ ?>
                    <p><strong style="font-family:candara; font-size:16px; "><?php echo $data['isi_pre'] ?></strong></p>	
                    <?php } ?>
          
          <p id="demo" style="display:none;"><strong style="font-family:candara; font-size:16px;"><?php echo $data['isi'] ?> . . . </strong></p>
          
          <center><button type="button" id="tombol" onclick="document.getElementById('demo').style.display='block'" style="font-family: candara; font-size:18px; color:#f0dfad; background-color:#b23333;">Read More</button></center>
	  </div>
	</div>
	</div>

	<footer class="foot">
		<p>Connect With Us</p>
		<a href="https://www.gmail.com"><image src="<?php echo base_url(); ?>static/icon/mail.png" alt="mail" style="width:45px; height:45px;"></a>
		<a href="https://www.fb.com"><image src="<?php echo base_url(); ?>static/icon/fb.png" alt="fb" style="width:45px; height:45px;" ></a>
		<a href="https://www.twitter.com/dualipa"><image src="<?php echo base_url(); ?>static/icon/twitter.png" alt="twitter" style="width:45px; height:45px;"></a>
		<a href="https://www.youtube.com/watch?v=fEOyePhElr4"><image src="<?php echo base_url(); ?>static/icon/yt.png" alt="youtube" style="width:45px; height:45px;"></a>
		<a href="https://www.instagram.com/dualipa"><image src="<?php echo base_url(); ?>static/icon/ig.png" alt="ig" style="width:45px; height:45px;">
	</footer>
</body>
</html>