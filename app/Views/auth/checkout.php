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
<script type="text/javascript" src="<?=base_url('js/memenu.js') ?>"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="<?=base_url('js/simpleCart.min.js') ?>"> </script>
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
        <div class="clearfix"> </div>
        

</div>

    
<div class="container">
    <div class="check">  

             <h1>My Shopping Bag </h1>
<?php
                  $db=\Config\Database::connect();
                  $query=$db->query('SELECT product_id,product_name,product_description,product_image,product_price,available_quantity,subcategory,created_at FROM tbl_product');
                  $results=$query->getResult();

                    foreach($results as $item){
                    
                      ?>
            <form action ="#" method="post">

             <div class="cart-header">
                 <div class="close1"> </div>
                 <div class="cart-sec simpleCart_shelfItem">
                        <div class="cart-item cyc">
                             <img src="<?php echo base_url('images\pro.jpg');?>" class="img-responsive" alt=""/>
                        </div>
                       <div class="cart-item-info">
                        <h3><a>Evening_wear</a><span>Subcategory:Men-Universal_Clothes</span></h3>
                        <ul class="qty"> 
                            <li><p >size:<input type="text" name="quantity"> </p></li>
                            <li><p >Qty :<input type="text" name="quantity"> </p></li>
                        </ul>
                        
                             <div class="delivery">
                             <p>Service Charges : Rs.100.00</p>
                             <span>Delivered in 2-3 bussiness days</span>
                             <div class="clearfix"></div>
                        </div>  
                       </div>
                       <div class="clearfix"></div>
                                            
                  </div>
             </div>
             <script>$(document).ready(function(c) {
                    $('.close2').on('click', function(c){
                            $('.cart-header2').fadeOut('slow', function(c){
                        $('.cart-header2').remove();
                    });
                    });   
                    });
             </script>
                  
         </div>
          <div class="col-md-3 cart-total">
             <a class="continue" href="auth/homepage.php">Continue to shop</a>
             <div class="price-details">
                 <h3>Price Details</h3>
                 <span>Total</span>
                 <span class="total1"name='product_price'><?php echo $item->product_price; ?></span>
                 <span>Discount</span>
                 <span class="total1">---</span>
                 <span>Delivery Charges</span>
                 <span class="total1">$130.00</span>
                 <div class="clearfix"></div>                
             </div> 
             <ul class="total_price">
               <li class="last_price"> <h4>TOTAL</h4></li>  
               <li class="last_price"><span>$1530.00</span></li>
               <div class="clearfix"> </div>
             </ul><button class="continue" onclick="myFunction()">Purchase Item</button>

<p id="item"></p>

<script>
function myFunction() {
  var txt;
  if (confirm("Thank You For Purchase")) {
    txt = " See you Next Time";
  } 
  document.getElementById("item").innerHTML = txt;
}
</script>
            
             
             <div class="clearfix"></div>
           
 
             <div class="total-item">
                 <h3>OPTIONS</h3>
                 <h4>COUPONS</h4>
                 <a class="cpns" href="#">Apply Coupons</a>
                 <p><a href="#">Log In</a> to use accounts - linked coupons</p>
             </div>
            </div>
        <?php break;} ?>
        </form>
            <div class="clearfix"> </div>
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