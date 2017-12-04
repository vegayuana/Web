<!DOCTYPE html>
<html>

<?php
    if(isset($this->session->userdata['logged_in'])){
        $username = ($this->session->userdata['logged_in']['username']);
    }
?>

<head>
	<title>Ticket and Tour Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/tntstylesslide.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/tntstyles.css">
</head>

<body>
	<div class="head">
		<ul>
		<li style ="float: left"><image src="<?php echo base_url(); ?>static/icon/logo1.png" alt="logo1.jpg" style="width:120px; height:70px; margin:10px;"></li>
        <?php
            if (isset ($username)){
                echo "<li style='float: right;'><p><a href='http://localhost/ciweb/index.php/adv/logout'>Log Out</a></p></li>";
                echo "<p style='font-family :cho; font-size: 25px;text-align: center;color: #b23333;'>Hello " . $username . " ! </p>";
            }
            else{
                echo "<li style='float: right;'><p><a href='http://localhost/ciweb/index.php/adv/login'>Log In</a></p></li>";
            }
        ?>
		</ul>
		
		<ul>
			<li><a href="http://localhost/ciweb/index.php/adv" >Home</a></li>
			<li><a href="http://localhost/ciweb/index.php/adv/news" >News</a></li>
			<li><a href="#">Tours & Ticket</a></li>
			<li><a href="http://localhost/ciweb/index.php/adv/merch">Merch</a></li>
		</ul>
	</div>
	
	<div class="all">
		<div class="bg">
		
		<div class="slideshow-container">
		  <div class="mySlides fade">
			<img src="<?php echo base_url(); ?>static/css/concert1.jpg" style="width:100%">
			<div class="text">March 13, 2016 - Portland, OR, Moda Center at the Rose Quarter</div>
		  </div>

		  <div class="mySlides fade">
			<img src="<?php echo base_url(); ?>static/css/concert2.png" style="width:100%">
			<div class="text">March 17, 2016 - San Jose, CA, SAP Center at San Jose</div>
		  </div>

		  <div class="mySlides fade">
			<img src="<?php echo base_url(); ?>static/css/concert3.jpg" style="width:100%">
			<div class="text">March 25, 2016 - Las Vegas, NV, MGM Grand Garden Arena</div>
		  </div>
		</div>
		<br>

		<div style="text-align:center; margin:0px;">
		  <span class="dot" onclick="currentSlide(0)"></span> 
		  <span class="dot" onclick="currentSlide(1)"></span> 
		  <span class="dot" onclick="currentSlide(2)"></span> 
		</div>
		
		<script>
		var slideIndex = 0;
		showSlides();
		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}
		function showSlides() {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			for (i = 0; i < slides.length; i++) {
			   slides[i].style.display = "none";  
			}
			slideIndex++;
			if (slideIndex > slides.length) {slideIndex = 1}    
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";  
			setTimeout(showSlides, 10000); // Change image every 5 seconds
		}
		</script>

		
		<h1>Rock On Tour</h1>
			<?php foreach($response as $data){ 
				echo "<p><a class='ticket' ;href =''> $data[date] - $data[place] </a></p>";
				}
			?>
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
