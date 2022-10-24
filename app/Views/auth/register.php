
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="<?=base_url('css/bootstrap.css') ?>" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="<?=base_url('css/style.css') ?>" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
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
					  <li class="active grid"><a class="color8" href="<?=site_url('Pages/index');?>">Home</a></li>
					   <li ><a href="<?=site_url('Pages/login');?>"  >Login</a></li>
						<li><a  href="<?=site_url('Pages/register');?>" >Register</a>
				      
			</div>
				    <div class="clearfix"> </div>
		

</div>

	
<!--content-->
<div class=" container">
<div class=" register">
	<h1>Register</h1>
		  	  <form action ="<?=base_url('auth/processregister') ?>" method="post"> 
		  	  	<?= csrf_field(); ?>
				 <div class="col-md-6 register-top-grid">
					<h3>Personal infomation</h3>
					 <div>
						<label>First Name</label>
						<input type="text" name="firstname" >
						<span class="text-danger"><? =isset($validation) ?display_error($validation,'firstname'): ''?></span>

					 </div>
					 <div>
						<label>Last Name</label>
						<input type="text" name="lastname"> 
						<span class="text-danger"><? = isset($validation) ?display_error($validation,'lastname'): ''?></span>
					 </div>
					 <div>
						 <label>Email Address</label>
						 <input type="text"name="email"> 
						 <span class="text-danger"><? =isset($validation) ?display_error($validation,'email'): ''?></span>
					 </div>
					 <div class="form-group">
					 	<label>Gender</label>
                <select name="gender" id="cars" class="form-control">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </div>
               <div class="form-group">
              	<label>Role</label>
                <select name="role" id="cars" class="form-control">
                  <option value="1">User</option>
                  <option value="2">Admin</option>
                  <option value="3">API User</option>
                </select>
              </div>
					   <div class="col-md-6 register-top-grid">
          
            </div>
					 </div>
				     <div class="col-md-6 register-bottom-grid">
						    <h3>Login information</h3>
							 <div>
								<div> 	
			                 	<label>Username</label>
			               	<input type="text" name="username"> 
			               	<span class="text-danger"><? =isset($validation) ?display_error($validation,'username'): ''?></span>
			                    </div>
							 </div>
							 <div>
								<label>Password</label>
								<input type="password"name="password">
								<span class="text-danger"><? =isset($validation) ?display_error($validation,'password'): ''?></span>
							 </div>
							 
							 <input type="submit" value="submit">


                



							
					 </div>
					 <div class="clearfix"> </div>
				</form>
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
					<h4>Subscribe To our Newsletter</h4>
					<p>Sign Up to get all news,updates and promo</p>
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
			