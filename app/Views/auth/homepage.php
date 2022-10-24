
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="<?=base_url('css/bootstrap.css') ?>" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="<?=base_url('css/style.css') ?>" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
<!-- start menu -->
<link href= "<?=base_url('css/memenu.css') ?>"  rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
</head>
<body>
<!--header-->
				<div class="logo">
					<a href="index.php"><img src="<?php echo base_url('images/logo.png');?>" alt=""></a>	
				</div>
		  <div class=" h_menu4">
				<ul class="memenu skyblue">
					

					  <li class="active grid"><a class="color8" href="<?=site_url('auth/index');?>">Home</a></li>	
					  <li ><a href="<?=site_url('pages/login');?>"  >Login</a></li>
						<li><a  href="<?=site_url('pages/register');?>" >Register</a>
							<li><a  href="<?=site_url('auth/logout');?>" >logout</a>


							
						


				      	
						
						 
						</div>
				    <div class="clearfix"> </div>
		

</div>

	<div class="banner">
		<div class="container">
			  <script src="js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
			<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
			    <li>
					
						<div class="banner-text">
							<h3>Don't Just Dress UP look fashionable</h3>
						<p></p>
						<a href="single.html">Learn More</a>
						</div>
				
				</li>
				<li>
					
						<div class="banner-text">
							<h3>Look Fashionable</h3>
						<p></p>
						<a href="single.html">Learn More</a>

						</div>
					
				</li>
				<li>
						<div class="banner-text">
							<h3>Get your look today with a 50% discount</h3>
						<p></p>
								<a href="single.html">Learn More</a>

						</div>
					
				</li>
			</ul>
		</div>

	</div>
	</div>

<!--content-->
<div class="content">
	<div class="container">
	<div class="content-top">
		<h1>NEW STOCK</h1>
		   <?php
                  $db=\Config\Database::connect();
                  $query=$db->query('SELECT product_id,product_name,product_description,product_image,product_price,available_quantity,subcategory,created_at FROM tbl_product');
                  $results=$query->getResult();

                    foreach($results as $item){
                    
                      ?>
		<div class="grid-in">
			<div class="col-md-4 grid-top">
				<a href="page/invoice" class="b-link-stripe b-animate-go  thickbox"><img class="imagesize" src="<?php echo base_url('images/'.$item->product_image)?>" alt="">
							<div class="b-wrapper">
									<h3 class="b-animate b-from-left  b-delay03 ">
										<span><?php echo $item->subcategory; ?></span></h3>
								</div>
				</a>
			<p><a href="<?=site_url('pages/checkout');?>"><?php echo $item->product_name; ?></a></p>
			<p class="price"><span class="mr-2 price-dc"><?php echo $item->product_price; ?></span>
			</div>
		</div>



 <?php  }?>
	<!----->
	
	<div class="content-top-bottom">
		<h1>Featured Collections</h1>
		<div class="col-md-6 men">
			<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="<?php echo base_url('images/t1.jpg');?>" alt="">
				<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in   b-delay03 ">
										<span>ADIDAS</span>	
									</h3>
								</div>
			</a>
			
			
		</div>
			<div class="col-md-6 men">
			<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="<?php echo base_url('images/t2.jpg');?>" alt="">
				<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in   b-delay03 ">
										<span>YVES SAINT LAURENT</span>	
									</h3>
								</div>
			</a>
			
			</div>
		
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>
	<!---->
	<div class="content-bottom">
		<h2>Co-Branding partnership</h2>
		<ul>
			<li><a href="#"><img class="img-responsive" src="<?php echo base_url('images/lo.png');?>" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="<?php echo base_url('images/lo1.png');?>" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="<?php echo base_url('images/lo2.png');?>" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="<?php echo base_url('images/lo3.png');?>" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="<?php echo base_url('images/lo4.png');?>" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="<?php echo base_url('images/lo5.png');?>" alt=""></a></li>
		<div class="clearfix"> </div>
		</ul>
	</div>
</div>
<div class="footer">
				<div class="container">
			<div class="footer-top-at">
			
				<div class="col-md-4 amet-sed">
				<h4>NEED HELP?</h4>
				<ul class="nav-bottom">
						<li><a href="#">How to order</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="contact.html">Location</a></li>
						<li><a href="#">Shipping</a></li>
						<li><a href="#">Membership</a></li>	
					</ul>	
				</div>
				<div class="col-md-4 amet-sed ">
				<h4>CONTACT US</h4>
					<p>stayfashionable@gmail.com</p>
					<p>+25476970957</p>
					<ul class="social">
						<li><a href="#"><i> </i></a></li>						
						<li><a href="#"><i class="twitter"> </i></a></li>
						<li><a href="#"><i class="rss"> </i></a></li>
						<li><a href="#"><i class="gmail"> </i></a></li>
						
					</ul>
				</div>
				<div class="col-md-4 amet-sed">
					<h4>Subscribe To Our Newsletter</h4>
					<p>Sign Up to get all news,updates
and promo</p>
					<form>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input type="submit" value="Subscribe">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class">
		<p >© 2021 Stay Fashionable All Rights Reserved | Design by Derrick Nyaga </p>
		</div>
		</div>
</body>
</html>
			