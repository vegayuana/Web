<!DOCTYPE html>
<html>

	<head>
    <title>Form Merch</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/formstyle.css">
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
            <center>
             <?php foreach($response->result() as $data){ ?>
                <img src="<?php echo base_url(); ?>static/css/<?php echo $data->img ?>"  width="30%">
            </center>
                <p1><?php echo $data->nama_barang ?></p1>
                <p2><br><?php echo $data->harga ?></p2>
            <?php } ?>
            </div>
        <form action="http://localhost/ciweb/index.php/ADV/order_success" method="post">
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