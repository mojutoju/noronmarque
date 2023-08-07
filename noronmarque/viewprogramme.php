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
    <script src="js/sweetalert.min.js"> </script>
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
         
         <div class="container">
               
             <h3 class="page-title">
                <span class="page-title-icon  text-white mr-2" style="background:blue;">
                  <i class="fa fa-mortar-board"></i>
                </span> View Programme(s) </h3>
            
            <hr>
            
            
            <div class="row">
            
            <?php
            if(isset($_GET['program_id'])){
                $id = $_GET['program_id'];
                
                
                
$users = mysqli_query($dbc,"SELECT * FROM `programmes` WHERE program_id = '$id'  ");
if(mysqli_num_rows($users) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($users)){

  $file = $rows['file'];
  $setdate = $rows['setdate'];
  $amount = $rows['amount'];
  $description = $rows['description'];
  $classname = $rows['classname'];
  $id = $rows['program_id'];
  $briefintro = $rows['briefintro'];


                
                ?>
                
                
             <div class="col-md-6 mb-2">
                    <img src="programmes/<?php echo $file; ?>" class="img-fluid img-thumbnail">
             </div>   
                
                
                <div class="col-md-6 mb-2">
                    
                    
                   <h5> Class Name</h5> 
                    <p> <?php echo $classname; ?> </p>
                    
                    <hr>
                    
                    <h5> Set Date</h5>
                    <p> <?php echo $setdate; ?> </p>
                    
                    <hr>
                    
                    <h5> Amount </h5>
                    <p> N<?php echo number_format($amount); ?> </p>
                    
                    <hr>
                    
                    <h5> Facilitator(s) </h5>
                    
                    <?php
                    
$assigned = mysqli_query ($dbc, "SELECT * FROM `assignfacilitators` WHERE `classname` = '$classname'  ");
if(mysqli_num_rows($assigned) > 0 ){

$a = 1;
while($rows = mysqli_fetch_assoc($assigned)){
    
$facilitator = $rows['facilitator'];
                    
                    ?>
                    
                    <ul>
                     <li> <?php echo $facilitator; ?> </li>  
                    
                    </ul>
                      <?php $a++; }} ?> 
                     
                
                   
                </div>
                
                
                
                
            
            
            
            
            
            
            
            
            
            
            
            
            
            </div>
            
            <h4>Brief Introduction </h4>
            
            <hr>
            
            <p> <?php echo nl2br($briefintro); ?> </p>
            
            <br>
            
            <h4> Description </h4>
            
            <hr>
            
            <?php echo htmlspecialchars_decode($description); ?>
                
            <?php    
           
           
        
           $u++; }}
            }
            
            ?>
           
            
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






 
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}




    </script>
          
    <!-- End custom js for this page -->
  </body>
</html>  