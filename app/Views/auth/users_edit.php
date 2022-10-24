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
        
         <link href=" <?=base_url('css/style1.css') ?>"rel="stylesheet"/>

    <link href="<?=base_url('css/bootstrap.css') ?>" rel="stylesheet" type="text/css" media="all" />

<link href="<?=base_url('css/style.css') ?>" rel="stylesheet" type="text/css" media="all" />


        <!-- Admin Styling -->
    
        <link href=" <?=base_url('css/admin.css') ?>"rel="stylesheet"/>


                <title>Admin Dashboard</title>
    </head>

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
                           <li><a href="<?=site_url('auth/logout');?>" class="logout">Logout</a></li>>
                    
                    


                       
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
                    <a href="<?=site_url('Pages/addusers');?>" class="btn btn-big" >Add User</a>
                    <a href="<?=site_url('Pages/listusers');?>" class="btn btn-big">Manage Users</a>
                </div>


                <div class="content">

                    <h2 class="page-title" >Add User</h2>

                     
                <?= csrf_field(); ?>
                <?php
                  $db=\Config\Database::connect();
                  $query=$db->query('SELECT user_id,username,firstname,lastname,password,email,role FROM tbl_users');
                  $results=$query->getResult();

                    foreach($results as $user){
                        ?>
                  <form action ="<?=base_url('auth/user_edit/'.$user->user_id);?>" method="post"> 
                 <div class="col-md-6 register-top-grid">
                    <h3>Personal infomation</h3>
                     <div>
                        <label>First Name</label>
                        <input type="text" name="firstname"  value="<?php echo $user->firstname; ?>">                    

                     </div>
                     <div>
                        <label>Last Name</label>
                        <input type="text" name="lastname"  value="<?php echo $user->lastname; ?>"> 
                     </div>
                     <div>
                         <label>Email Address</label>
                         <input type="text"name="email"value="<?php echo $user->email; ?>"> 
                     </div>
                     <div><label>Gender</label>
                    <select name="gender" id="cars" class="form-control">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
            </div>
                     <div>
                        <label>Role</label>
                        <input name="role" id="cars" class="form-control" value="<?php echo $user->role; ?>">
                </input></div>
                     
                      <div class="col-md-6 register-top-grid">
          
            </div>
                     </div>
                     <div class="col-md-6 register-bottom-grid">
                            <h3>Login information</h3>
                             <div>
                                <div>   
                                <label>Username</label>
                            <input type="text" name="username"  value="<?php echo $user->username; ?>"> 
                            
                                </div>
                             </div>
                             <div>
                                <label>Password</label>
                                <input type="password"name="password"  value="<?php echo $user->password; ?>">
                             </div>
                             
                            <button type="submit" class="btn btn-big">Change User Details</button>
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