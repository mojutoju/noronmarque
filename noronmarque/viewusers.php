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
                </span> View User </h3>
            
            <hr>
            
             
       <?php 
       if(isset($_GET['id']) && isset($_GET['email'])){
           
           $userid = $_GET['id'];
           $emailid = $_GET['email'];
           
           $select = mysqli_query($dbc,"SELECT * FROM `users` WHERE email = '$emailid' AND id = '$userid'  ");
if(mysqli_num_rows($select) > 0){
    $j = 1;
 while($rows = mysqli_fetch_assoc($select)){

  $id = $rows['id'];
  $fname = $rows['fname'];
  $lname = $rows['lname'];
  $email= $rows['email'];
$cpassword = $rows['cpassword'];
$status = $rows['status'];
$phonenos = $rows['phoneno'];
     $state = $rows['state'];
$date = $rows['date'];
           
           
                 $pic = mysqli_query($dbc, "SELECT * FROM `profileimages` WHERE email= '$emailid' ");
     $row = mysqli_fetch_assoc($pic);
     
     
     $files = $row['file'];
         $imageid = $row['imageid'];        
           
           
           
   
       
       ?>
       
     
     
     
     
     <h5 style="font-weight:bold;"> <i class="fa fa-user-circle"></i> Personal Data | 
     
     <?php
     if($status == "pending"){
         
         
         ?>
         
      <button class="btn btn-warning btn-sm"> Pending</button>   
         
         
         
         <?php 
     }else if($status == "approved"){
         
     
     ?>
       <button class="btn btn-success btn-sm"> Approved</button>   
         
     
     <?php }else if($status == "declined"){ ?>
     
       <button class="btn btn-danger btn-sm"> Declined</button>   
         
     <?php } ?>
     
     </h5>
     <hr>
     <div class="row">
         
         
         
       <div class="col-md-4 mb-3">
           
                                        <?php
                $countrows = mysqli_num_rows($pic);
                if($countrows == 1){
      
                  ?>

<div class="card">
         <img src="/users/profileimages/<?php echo $files; ?>" class="img-fluid img-thumbnail">
</div>
                  <?php
          
                }else {  ?>
                
              
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/User_font_awesome.svg/600px-User_font_awesome.svg.png" class="img-fluid img-thumbnail">
            
              <?php
              }
         
            ?>
                  
           
           
       </div>  
         
         
         <div class="col-md-4 mb-3">
             
             
             
  <!-- Background color -->
  <div class="card-up indigo lighten-1"></div>


  
  <!-- Content -->

    <!-- Name -->
    <h6 class="card-title"> <i class="fa fa-user"></i> <?php echo $fname; ?> <?php echo $lname; ?> </h6>
    <hr>
    <!-- Quotation -->
    <p>  <i class="fa fa-envelope"></i> <a style="color: black;" href="mailto:<?php echo $email; ?>"> <?php echo $email; ?> </a>
    </p>
    <hr>
    <p>  <i class="fa fa-phone"></i> <a href="tel:<?php echo $phonenos; ?>" style="color:black;"> <?php echo $phonenos; ?>
</a> | <i class="fa fa-lock"></i> <?php echo $cpassword; ?>  </p> <hr>

<p> <i class="fa fa-street-view"></i> State of Residence : <?php echo $state; ?> </p>
<hr>

<p> <i class="fa fa-calendar"></i> Date Created : <?php 
$timestamp = strtotime($date);
 
// Creating new date format from that timestamp
$new_date = date("d-m-Y", $timestamp);


echo $new_date;  ?> </p>



</div>

              <?php  $j++; }}} ?>   
         </div>
         
 
            
            
            
            
            
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