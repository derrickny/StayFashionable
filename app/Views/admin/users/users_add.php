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


        <title>Admin Section - Add User</title>
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
                            <li><a href="#" class="logout">Logout</a></li>
                    
                    


                       
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
                    <li><a href="<?=site_url('Pages/itemshow');?>">Manage items</a></li>
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

                     <form action ="<?=base_url('auth/adminadduser') ?>" method="post"> 
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
                             
                            <button type="submit" class="btn btn-big">Add User</button>
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