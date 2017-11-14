<!DOCTYPE html>
<html>
	<head>
    <title>Form Merch</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/TicketTour/style1.css">
    </head>
</html>
<body>
	<div class="logo">
		<image src="<?php echo base_url(); ?>static/icon/logo1.png" alt="logo" style="width:120px; height:70px; margin:10px 10px 0 10px;">
	</div>
	
	<header class="head">
		<ul>
		<li><a href="http://localhost/ciweb/index.php/adv" >Home</a></li>
		<li><a href="http://localhost/ciweb/index.php/adv/news">News</a></li>
		<li><a href="http://localhost/ciweb/index.php/adv/tickettour">Tours & Ticket</a></li>
		<li><a href="http://localhost/ciweb/index.php/adv/merch">Merch</a></li>
		</ul>
	</header>
        
	<div class="bg">
        <div class="isi">
        <div class="judul">
            
            
            </div>
        <div class="gambar"><img src="merch1.jpg" alt="merch" width="100%"></div>
        <form action="">
            <div class="isian">
            <div class="tulisan">Name</div>
                <input type="text" name="name">
            <div class="tulisan">Phone Number</div>
                <input type="text" name="phone"><br>
            <div class="tulisan">Amount</div>
                <input type="number" name="quantity" min="1" max="50"><br>
            <div class="tulisan">Address</div>
                <input type="text" name="alamat">
            </div>
                <center><input type="submit" value="PESAN"></center>
        </form>
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