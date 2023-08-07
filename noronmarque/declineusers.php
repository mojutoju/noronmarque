<?php include('db/connect.php');
session_start();



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Noron Marque - A team of individuals with diverse specialties and backgrounds, working with clients to leverage on resources, develop capacities and redefine change.</title>
  <!-- Font Awesome -->
     <link rel="icon" href="/img/9.png" type="image/png"/>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
     <link rel="icon" href="/img/9.png" type="image/png"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link href='https://fonts.googleapis.com/css?family=Barlow Semi Condensed' rel='stylesheet'>
  <!-- Bootstrap core CSS -->

  

    
    <style>
     
li.nav-item.active {
    color: blue;
}


    </style>
  </head>
  <body>
      
      <?php

if($_SESSION["login"] != null){
    $email = $_SESSION["login"];

}
else{
 echo " <script> window.location.href = 'login.php'; </script>";
}
   ?>

 
      <?php include('navbar.php'); ?>
          <div class="main-panel">
          <div class="content-wrapper">
         
            
             <h3 class="page-title">
                <span class="page-title-icon  text-white mr-2" style="background:blue;">
                  <i class="fa fa-user"></i>
                </span> Approve Users </h3>
            
            <hr>
            
            
                        
                        
                <?php
                if(isset($_GET['id'])){
                    
                    $customerid = $_GET['id'];
                    
                    
                    $update = mysqli_query($dbc, "UPDATE `users` SET `status` = 'declined' WHERE `id` = '$customerid' ");
                    if($update){
                        
                        
                        
                        ?>
                        
                  
                        
                        
                       
                       <center>
                       
                       
               <div class="card" style="padding:20px;">
                   
                   
                   <center>
                       
                       <h1> <img src="https://images.vexels.com/media/users/3/157931/isolated/preview/604a0cadf94914c7ee6c6e552e9b4487-curved-check-mark-circle-icon-by-vexels.png" class="img-fluid"> </h1>
                       
                       
                       <h3 style="font-weight:bold;"> Customer Account has been Disabled</h3>
                       
                       <a href="dashboard.php" class="btn btn-success btn-sm"> GO BACK TO DASHBOARD  </a>
                       
                   </center>
                   
                   
                   
                   
                   
               </div>        
                      </center> 
                       
                       
                       
                       
                       
                       
                        
                        
                        
                        <?php
                    }
                    
                    
                    
                    
                    
                    
                }
                
                ?>
                        
            
            
            
            
            
            
            
            
            
            
            
              
            </div>
            </div>
            
            
            
             <script>
        $(document).ready(function () {

    (function ($) {

        $('#filter').keyup(function () {

            var rex = new RegExp($(this).val(), 'i');
            $('.searchable tr').hide();
            $('.searchable tr').filter(function () {
                return rex.test($(this).text());
            }).show();

        })

    }(jQuery));

});
    </script>
          
    <!-- End custom js for this page -->
  </body>
</html>  