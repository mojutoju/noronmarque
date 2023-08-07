<?php include('db/connect.php');
session_start();



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
     <link href='https://fonts.googleapis.com/css?family=Helvetica' rel='stylesheet'>
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
 .main{
   max-width: 800px;
    border-radius: 6px;
   
    margin: 50px auto;
  
      }
      
      .main-container{
              position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
   
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    overflow: auto;
    min-height: 100vh;
    box-sizing: border-box;
      }
      
      a:hover{
          color:blue;
      }
      
      body{
          background: #131313;
          font-family :'Helvetica';
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
   
   
 
       
    
  <div class="main-container">

<div class="main">
    
    <div class="container">
        
         <center> 
    <a href="dashboard.php">
    <img src="/img/nmnew.png" class="img-fluid" width="300px" >  </a>  </center>
    
    
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
    
    <div class="card" style="padding:13px;">
        
        
        <h3 style="font-weight:800; text-align:center;"> ACCOUNT INVOICE </h3>
        <hr>
        
        <p> Name</p>
        <p> <?php echo $lname; ?> <?php echo $fname; ?> </p>
        
        <hr>
        
        <p> E-mail Address</p>
        <p> <a href="mailto:<?php echo $email; ?>" style="color:black;"> <?php echo $email; ?> </a> </p>
        
        <hr>
        
        <p> Phone Number</p>
        <p> <?php echo $phoneno; ?></p>
        
        <hr>
        
        <p> State</p>
        <p> <?php echo $state; ?> </p>
        
        <hr>
        
        <p> Amount Paid</p>
        <h2> N500 </h2>
        
        <hr>
        <a  onclick="printPage()" class="btn btn" style="background:blue; color:white;"> Download  </a> <br>
        <a href="dashboard.php" class="btn btn-primary" > Go back to dashboard  </a>
        
        
        
        
    </div>
        <?php $j++; }} ?>
        
        </div>
        </div>
        </div>
   
 <script>
function printPage() {
  window.print();
}
</script>
   
   <!-- End custom js for this page-->
  </body>
</html>