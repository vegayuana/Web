<!DOCTYPE html>

<html>
    <head>
		<title>Bandung Futsal Arena</title>
		<link rel="icon" href="<?php echo base_url(); ?>static/img/logo.png" type="image/gif">
        <link href="<?php echo base_url(); ?>static/css/style.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Grid from Materialize-->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/css/materialize.min.css" media="screen,projection"/>
    </head>
    
    <body>
        <div class="navbar">      
			<a href="http://localhost/CI_projek/src/index.php/BFA/home"><img src="<?php echo base_url(); ?>static/img/logo.png" class="logo"></a>
            <ul>
				<li><a href="http://localhost/CI_projek/src/index.php/BFA/contact"><h4>Contact Us</h4></a></li>
                <li><a href="http://localhost/CI_projek/src/index.php/BFA/about"><h4>About</h4></a></li>
                <li><a href="http://localhost/CI_projek/src/index.php/BFA/event"><h4>Event</h4></a></li>
                <li><a class="active" href="#"><h4>Category</h4></a></li>
                <li><a href="http://localhost/CI_projek/src/index.php/BFA/home"><h4>Home</h4></a></li>
            </ul>
        </div>
        <div class="container">
			<div class="row">
				<div class="col s12"><h4 class="h4title">CATEGORY</h4></div>
			</div>
			<div class="row">
				<?php foreach($response as $data){ ?>
					<div class="col s3">
						<div class="imgcontainer">
							<a href="detailCategory.html"><img class="imgcategory" src="<?php echo base_url(); ?>static/img/<?php echo $data['img'] ?>">
							<div class="categoryoverlay">
								<div class="categorytext"><?php echo $data['name'] ?></div>
							</div>
							</a>
						</div>
					</div>	
				<?php } ?>
			</div>
			
		</div>		
    </body>
</html>