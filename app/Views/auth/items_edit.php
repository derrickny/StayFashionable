<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Font Awesome -->
        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Candal|Lora"
            rel="stylesheet">

        <!-- Custom Styling -->
        <!-- Custom Styling -->
        
         <link href=" <?=base_url('css/style1.css') ?>"rel="stylesheet"/>

    <link href="<?=base_url('css/bootstrap.css') ?>" rel="stylesheet" type="text/css" media="all" />

<link href="<?=base_url('css/style.css') ?>" rel="stylesheet" type="text/css" media="all" />


        <!-- Admin Styling -->
    
        <link href=" <?=base_url('css/admin.css') ?>"rel="stylesheet"/>

                <title>Admin Dashboard</title>
    </head>

    <body>
        <body>
        <header>
           <div class="logo">
                    <a href="index.php"><img src="<?php echo base_url('images/logo.png');?>" alt=""></a>    
                </div>
          <div class=" h_menu4">
                <ul class="memenu skyblue">
                    

                      <li class="active grid"><a class="color8" href="<?=site_url('Pages/index');?>">Home</a></li>  
                      <li ><a href="<?=site_url('Pages/login');?>"  >Login</a></li>
                        <li><a  href="<?=site_url('Pages/register');?>" >Register</a>
                             <li><a href="<?=site_url('auth/logout');?>" class="logout">Logout</a></li>
                    </div>
                    <div class="clearfix"> </div>
                </div>

        </header>

        <br></br>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

            <!-- Left Sidebar -->
            <div class="left-sidebar">
                <ul>
                  <li><a href="<?=site_url('Pages/item');?>">Manage items</a></li>
                    <li><a href="<?=site_url('Pages/listusers');?>">Manage Users</a></li>
                    <li><a href="<?=site_url('Pages/categoryshow');?>">Manage category</a></li>
                     <li><a href="<?=site_url('Pages/subcategoryshow');?>">Manage SubCategory</a></li>
                     <li><a href="<?=site_url('Pages/tokens');?>">Manage Tokens</a></li>
                       <li><a href="<?=site_url('Pages/api');?>">Manage API User</a></li>
                </ul>
            </div>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                     <a href="<?=site_url('Pages/item');?>" class="btn btn-big">Add Item</a>
                    <a href="<?=site_url('Pages/itemshow');?>"class="btn btn-big">Manage Items</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Add item</h2>
                     <?php
                  $db=\Config\Database::connect();
                  $query=$db->query('SELECT product_id,product_name,product_description,product_image,product_price,available_quantity,subcategory,created_at FROM tbl_product');
                  $results=$query->getResult();

                    foreach($results as $item){
                    
                      ?>

                   <form action ="<?=base_url('auth/editItem/'.$item->product_id) ?>" method="post"> 
                        <div>
                            <label>Name</label>
                            <input type="text" name="name" class="text-input" value=" <?php echo $item->product_name; ?>">
                            <span class="text-danger"><? =isset($validation) ?display_error($validation,'name'): ''?></span>
                        </div>
                        <div>
                            <label>Description</label>
                            <textarea name="description" value="<?php echo $item->product_description;?>" ></textarea>
                            
                        </div>
                        <div>
                            <label>Image</label>
                            <input type="file" name="image" class="text-input"value="<?php echo $item->product_image; ?>">
                            
                        </div>
                        <div>
                            <label>Price</label>
                            <input type="text"name="price" value="<?php echo $item->product_price;?>"></input>
                            
                        </div>
                         <div>
                            <label>Quantity</label>
                            <input type="text" name="quantity" value="<?php echo $item->available_quantity; ?>"></input>
                            
                        </div>
                        
                        <div>
                            <label> subcategory</label>
                            <input type="text" name="subcategory" value="<?php echo $item->subcategory; ?>" ></input>
                            
                             </div>
                              <div>
                            <label>added at </label>
                            <input type="datetime-local" name="createdat" value="<?php echo $item->created_at; ?>"></input>
                            
                             </div>
                        <div>
                            <button type="submit" class="btn btn-big">Change Item Details</button>
                        </div>
                        <?php break;}?>
                    </form>

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->



        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Ckeditor -->
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
        <!-- Custom Script -->
        <script src="../../js/scripts.js"></script>

    </body>

</html>