<!DOCTYPE html>
<html>
<?php
    if(isset($this->session->userdata['logged_in'])){
        $id = ($this->session->userdata['logged_in']['id']);
    }
     if(isset($this->session->userdata['logged_in'])){
        $username = ($this->session->userdata['logged_in']['username']);
     }  
?>
<head>
    <title>Form Merch</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/formstyle.css">
</head>
    
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
        <?php
        if (isset ($username)){
            echo "<p style='font-family :cho; font-size: 25px;text-align: center;color: #b23333; margin:0;'>Hello " . $username . " ! </p>";
        }?>
		</ul>
	</header>
        
	<div class="bg">
        <div class="isi">
        <div class="judul">
             <?php foreach($response->result() as $data){ ?>
                <p><?php echo $data->place ?></p>
                <p><?php echo $data->date ?></p>
            <?php } ?>
            
            </div>
        <form action="http://localhost/ciweb/index.php/adv/submitticket" method="post">
            <div class="tulisan">Amount</div>
                <input type="number" name="quantity" id="amount" min="1" max="50" onchange="Update();"><br>
                <input type="hidden" name="id" value="<?php echo $id ?>">
            <div class="tulisan">Phone Number</div>
                <input type="text" name="phone"><br>
            <div class="tulisan">Address</div>
                <input type="text" name="address"><br>
            <div class="tulisan">Price</div>
                <input type="text" name="price" id="price" value="<?php echo $data->price ?>" readonly ><br>
            <div class="tulisan">Total</div>
                <input type="text" name="total" id="total" readonly><br>
            <div class="tulisan">No Ticket</div>
                <input type="text" name="no_ticket" id="no_ticket" value="<?php echo $data->no_ticket ?>" readonly>
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
            
    <script type="text/javascript">
        function Update() {
                var amount = parseFloat(document.getElementById('amount').value);
                var price = parseFloat(document.getElementById('price').value);
                var total = amount * price;
                document.getElementById('total').value = total;
            }
  </script>        
</body>
</html>