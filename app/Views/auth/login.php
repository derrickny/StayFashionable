
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
				      <li></a>
				      
					</li>
				    <li class="grid"><a class="color2" href="#"></a>
					  	
			    </li> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>

	
<!--content-->
<div class="container">
		<div class="account">
		<h1>SIGN IN</h1>
		<div class="account-pass">
		<div class="col-md-8 account-top">
			<form action ="<?=base_url('auth/processlogin') ?>" method="post">
				
			<div> 	
				<label>Username</label>
				<input type="text" name="username">
				
				</div>
			<div> 
				<label>Password</label>
				<input type="password" name="password">
				<span class="text-danger"><? =isset($validate) ? display_error($validation,'password'): ''?></span>
			</div>				
				<input type="submit" value="Login"> 
			</form>
		</div>
		<div class="col-md-4 left-account ">
			<a href="single.html"><img class="img-responsive " src="<?php echo base_url('images/s1.jpg');?>" alt=""></a>
			<div class="five">
			<h2>35% </h2><span>discount</span>
			</div>
			<a href="<?=site_url('pages/register');?>" class="create">Create an account</a>
<div class="clearfix"> </div>
		</div>
	<div class="clearfix"> </div>
	</div>
	</div>

</div>

<!--//content-->
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
			