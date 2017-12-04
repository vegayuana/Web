<!DOCTYPE html>
<html>
<head>
    
    <?php
        if(isset($this->session->userdata['logged_in'])){
            $username = ($this->session->userdata['logged_in']['username']);
        }
    ?>
	<title>Merchandise Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/merchstyles.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
	<body>
	
	<div class="logo">
		<image src="<?php echo base_url(); ?>static/icon/logo1.png" alt="logo" style="width:120px; height:70px; margin:10px 10px 0 10px;">
	   
        <?php
            if (isset ($username)){
                echo "<li style='float: right'><p><a href='http://localhost/ciweb/index.php/adv/logout'>Log Out</a></p></li>";
                echo "<p style='font-family :cho; font-size: 25px;text-align: center;color: #b23333;'>Hello " . $username . " ! </p>";
            }
            else{
                echo "<li style='float: right'><p><a href='http://localhost/ciweb/index.php/adv/login'>Log In</a></p></li>";
            }
        ?>
            
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
			<img src="<?php echo base_url(); ?>static/css/<?php echo $data['img']?>" alt="<?php echo $data['nama_barang']?>" width="100%">
			<p><strong><?php echo $data['nama_barang'] ?></strong></p>
			<p><?php echo $data['harga'] ?></p>
            
            <form method="post" action= "<?php echo 'http://localhost/ciweb/index.php/adv/merchform' . '/' . $data['id_barang']; ?>" > 
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