<!DOCTYPE html>
<html>
<head>
	<title>Merchandise Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/Merch/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
	<body>
	
	<div class="logo">
		<image src="<?php echo base_url(); ?>static/icon/logo1.png" alt="logo" style="width:120px; height:70px; margin:10px 10px 0 10px;">
	</div>
	
	<header class="head">
		<ul>
		<li><a href="http://localhost/ciweb/index.php/adv" >Home</a></li>
		<li><a href="http://localhost/ciweb/index.php/adv/news" >News</a></li>
		<li><a href="http://localhost/ciweb/index.php/adv/tickettour">Tours & Ticket</a></li>
		<li><a href="#">Merch</a></li>
		</ul>
	</header>
	
<div class="bg">
	<div class= "bagian">
	<div class="container-fluid">
		<strong class="judul">Merchandise</strong>
	  <div class="row">
	  <?php foreach($response as $data){ ?>
		<div class="col-sm-4">
			<img src="<?php echo base_url(); ?>static/Merch/<?php echo $data['img']?>" alt="<?php echo $data['nama_barang']?>" width="100%">
			<p><strong><?php echo $data['nama_barang'] ?></strong></p>
			<p><?php echo $data['harga'] ?></p>
            
            <form method="post" action= "http://localhost/ciweb/index.php/adv/merchform">
			<button class="btn">Buy</button>
            </form>
		</div>
		<?php } ?>
	  </div>
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