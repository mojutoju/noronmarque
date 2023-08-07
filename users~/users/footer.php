<?php include('db/connect.php');
session_start();



?>


<?php

if($_SESSION["login"] != null){
    $email = $_SESSION["login"];

}
else{
 echo " <script> window.location.href = 'login.php'; </script>";
}
   ?> 
<!DOCTYPE html>
<html lang="en">
  <head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Noron Marque - A team of individuals with diverse specialties and backgrounds, working with clients to leverage on resources, develop capacities and redefine change.</title>
  <link rel="icon" href="/img/99.png" type="image/png" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
     <link href='https://fonts.googleapis.com/css?family=Barlow Semi Condensed' rel='stylesheet'>
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .pro-banner .pro-banner-bg {
    background: linear-gradient(230deg,#297FC8, #297FC8);
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

 
<?php
$select = mysqli_query($dbc,"SELECT * FROM `users` WHERE email = '".$_SESSION['login']."'  ");
if(mysqli_num_rows($select) > 0){
    $j = 1;
 while($rows = mysqli_fetch_assoc($select)){

  $id = $rows['id'];
  $fname = $rows['fname'];
  $lname = $rows['lname'];
  $email= $rows['email'];
$cpassword = $rows['cpassword'];
$status = $rows['status'];
$phoneno = $rows['phoneno'];
     $state = $rows['state'];
$date = $rows['date'];
$paymentstatus = $rows['paymentstatus'];
    ?>
    
    
          

<!-- Footer -->
<footer class="page-footer font-small  pt-2" style="background-color:white; color:black; font-size:13px;">


<div class="container">
    
    <center>
 <ul class="list-unstyled">
     
     
     
     <div class="row">
         
         <div class="col-md-4 mb-2">
              <li>
            <a style="color:black;" href="sanctuary.php">Sanctuary</a>
          </li>
          
             
         </div>
         
         
          <div class="col-md-4 mb-2">
              <li>
            <a style="color:black;" target="_blank" href="/index.php">Home</a>
          </li>
          
             
         </div>
         
         
          
          <div class="col-md-4 mb-2">
              <li>
            <a style="color:black;" href="termsandconditions.php">Terms & Conditions</a>
          </li>
          
             
         </div>
         
         
     </div>
        
         
         
</ul>

</center>

</div>

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="background-color:#0F52BA; color:white;">© 2020 Copyright:
    <a style="color:white;" href="https://www.noron-marque.com">Noron Marque</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

    
    <?php $j++; }} ?>
		<!-- container-scroller -->
    <!-- base:js -->
    <script src="vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/progressbar.js/progressbar.min.js"></script>
		<script src="vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
		<script src="vendors/justgage/raphael-2.1.4.min.js"></script>
		<script src="vendors/justgage/justgage.js"></script>
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>