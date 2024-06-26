
<!DOCTYPE html>
<html>
<head>
	<title>Moly</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/purzai.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/aos.css">
    <link rel="icon" type="image/png" href="images/favicon.png">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/aos.js"></script>
</head>
<body>
	<!-- HEADER START -->
		<div class="header">
			<div class="container">
				<div class="menu_bar_spc">
					<div class="menu_bar" id="menuBar">
						<div id="bar"></div>
						<div id="bar"></div>
						<div id="bar"></div>
						<div id="bar"></div>
					</div>
				</div>
				<div class="logo_spc">
					<img src="images/moly.png" class="p_logo">
				</div>
				<div class="menu_spc">
					<p class="header_contact">
						<img src="images/mail.png" class="h_logo">
						<span class="h_detail">+971 4 2562322</span>
					</p>
					<p class="header_contact">
						<img src="images/whatsapp.png" class="h_logo">
						<span class="h_detail">+971 4 2562322</span>
					</p>

					<ul class="header_menu" id="headerMenu">
						<li><a href="index.php" class="crs">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="products.php">Products</a></li>
						<li><a href="accessories.php">Accessories</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li><a href="login.php">Admin</a></li>
					</ul>
				</div>
			</div>
		</div>
	<!-- HEADER STOP -->
			<?php
							$id=$_GET['id'];
												
													include("dbconnect.php");
													$sql="SELECT * FROM food_tb where id=$id";
													$result=$conn->query($sql);
													while($row=$result->fetch_assoc()){
														
														$a=$row['fname'];
 														$b=$row['bname'];
 														$c=$row['price'];
 													}
 														?>
 							

 							<form action="insert.php" method="post">
 							<table align="center">
 								<tr>
 									<td></td>
 								</tr>
 								<tr>
 									<td>Makanan:</td>
 									<td><input type="text" name="fname" value="<?php echo $a;?>"></td>
 								</tr>
 								<tr>
 									<td>Pembuatan:</td>
 									<td><input type="text" name="bname" value="<?php echo $b;?>"></td>
 								</tr>
 								<tr>
 									<td>Harga(RP):</td>
 									<td><input type="text" name="price" value="<?php echo $c;?>"></td>
 								</tr>
 								<tr>
 									<td>Nama Pembeli:</td>
 									<td><input type="text" name="name"></td>
 								</tr>
 								<tr>
 									<td>Nomor Telepon:</td>
 									<td><input type="text" name="mobile"></td>
 								</tr>
 								<tr>
 									<td>Pembayaran:</td>
 									<td><select name="pay">
 										<option value="cash on delivery">Bayar di tempat</option>
 										<option value="online pay">Pembayaran online</option>
 									</select></td>
 								</tr>
 								<tr>
 									<td></td>
 									<td colspan="2"><input type="submit" value="Confirm" name="submit"></td>
 								</tr>
 							</table>
 							</form>							
	<!-- ABOUT BANNER START -->
		 
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<img src="images/About_icon1.png" class="abt-icon">
						<h3 class="abt-sub-head">Quality Products</h3>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<img src="images/About_icon2.png" class="abt-icon">
						<h3 class="abt-sub-head">Guaranteed Cashback</h3>
						
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<img src="images/About_icon3.png" class="abt-icon">
						<h3 class="abt-sub-head">Customer Support</h3>
						
					</div>
				</div>
			</div>
		</div>
	<!-- ABOUT PANEL STOP -->

	<!-- FOOTER PANEL START -->
		<div class="footer_panel">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="footer-1">
							<p class="footer_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer-2">
							<h3 class="footer_head">Links</h3>
							<span class="link_start">
								<a href="index.html" class="footer_link">Home</a>
								<a href="about.html" class="footer_link">About Us</a>
								<a href="contact.html" class="footer_link">Contact Us</a>
								<a href="products.html" class="footer_link">Products</a>
							</span>
						</div>
					</div>
					<div class="col-lg-2 col-md-6">
						<div class="footer-3">
							<h3 class="footer_head">Follow</h3>
							<span class="link_start">
								<a href="https://www.instagram.com/ziieff/" class="footer_link">Instagram</a>
							</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer-4">
							<h3 class="footer_head">Informasi</h3>
							<span class="link_start">
								<li class="footer-contact">
									<img src="images/footer-location.png" class="footer-icon">
									Bogor Cisarua, Jalan Raya Puncak Indonesia
								</li>
								<li class="footer-contact">
									<img src="images/footer-call.png" class="footer-icon">
									+62 895611954516
								</li>
								<li class="footer-contact-2">
									<img src="images/footer-mail.png" class="footer-icon">
									info@ziieff.com
								</li>
							</span>
						</div>
					</div>
				</div>
	<!-- FOOTER PANEL STOP -->


	<script src="js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript">
		$('#banner').owlCarousel({
    		loop:1,
    		autoplay:1,
    		autoplayTimeout:5000,
    		margin:10,
    		nav:0,
    		dots:0,
    		animateOut: 'slideOutDown',
    		animateIn: 'slideInUp',
    		responsive:{
        	0:{
        		items:1
        		},
    		}
		});
		$('#trendindProducts').owlCarousel({
    		loop:1,
    		autoplay:1,
    		items:4,
    		autoplayTimeout:6000,
    		margin:10,
    		nav:0,
    		dots:0,
    		responsive:{
	        	0:{
	        		items:1.2
	        	},
	        	768:{
	    			items:2.4
	    		},
	    		992:{
	    			items:3
	    		},
	    		1200:{
	    			items:4
	    		},
    		}
		});
	</script>
	<script>
		AOS.init();
	</script>
	<script type="text/javascript" src="js/menu.js"></script>
</body>
</html>