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
                    <a href="<?=site_url('Pages/addcategory');?>" class="btn btn-big">Add Category</a>
                    <a href="<?=site_url('Pages/categoryshow');?>" class="btn btn-big">Manage Category</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Manage category</h2>

                    <table>
                         <tr>
                      <th style="width: 10%">
                          Id
                      </th> <th style="width: 10%">
                          Name
                      </th>
        
                  </tr>
              </thead>
              <tbody>
                  
                  <?php
                  $db=\Config\Database::connect();
                  $query=$db->query('SELECT category_id,category_name FROM tbl_categories');
                  $results=$query->getResult();


                  foreach( $results as $list){?>
                  <tr>
                    <td>
                          <a>
                              <?php echo $list->category_id; ?>
                          </a>
                      </td>
                      <td>
                          <a>
                              <?php echo $list->category_name; ?>
                          </a>
                      </td>
                       <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="<?php echo base_url('/pages/editCategory/')?>" class="btn btn-primary">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="/auth/category_delete/<?php echo $list->category_id; ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>

                  <?php  }?>
              </tbody>
                    </table>

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->



        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Custom Script -->
        <script src="../../js/scripts.js"></script>

    </body>

</html>