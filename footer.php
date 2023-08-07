

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Noron Marque - A team of individuals with diverse specialties and backgrounds, working with clients to leverage on resources, develop capacities and redefine change.</title>
  <link rel="icon" href="img/99.png" type="image/png" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
     <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <!-- Bootstrap core CSS -->
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->

  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css">
  
  
  body{
      font-family: 'Poppins';
  }
  
  
  .navbar-nav .nav-link {
    margin-right: 14px;
    margin-left: 14px;
}


.navbar-nav .nav-item  .nav-link :hover{
    
border-bottom:3px solid white;
}

.navbar{
    -webkit-box-shadow: -4px 11px 22px -3px rgba(0,0,0,0.28);
-moz-box-shadow: -4px 11px 22px -3px rgba(0,0,0,0.28);
box-shadow: -4px 11px 22px -3px rgba(0,0,0,0.28);
}




.navbar li a:hover {

border-bottom : 2px solid dodgerblue;
}
      
  </style>
  <script src="js/sweetalert.min.js"></script>
</head>

<body>


               

<!-- Footer -->
<footer class="page-footer font-small  pt-2" style="background-color:white; color:black; font-size:13px;">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">
     
<br>
    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 mt-md-0 mt-3">




        <!-- Content -->
        <h5 class="text-uppercase" style=" color:#0A6EB4;" >
            
            
           Boot Camp </h5>
       
       
                     
      
<?php

$users = mysqli_query($dbc,"SELECT * FROM `programmes` WHERE 1  ");
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
    
          <ul class="list-unstyled">
          <li>
            <a style="color:black;" href="viewprogram.php?program_id=<?php echo $id; ?>"><?php echo $classname; ?></a>
          </li>


 <?php $u++; }} ?>

          
        </ul>

       <br>
       <br>
       
          <!-- Content -->
        <h5 class="text-uppercase" style=" color:#0A6EB4;" >
            
            
           Resources </h5>
       
         <ul class="list-unstyled">
          <li>
            <a style="color:black;" href="ebooks.php">E-books</a>
          </li>
          <li>
            <a style="color:black;" href="podcasts.php"> Podcasts</a>
          </li>
 <li>
            <a style="color:black;" href="worksheets.php"> Worksheets</a>
          </li>
 

          <li>
            <a style="color:black;" href="videos.php"> Videos</a>
          </li>
          
          
           
          
        </ul>
       
       

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-2 mt-md-0 mt-3">

        <!-- Links -->
        <h5 class="text-uppercase" style="color:#0A6EB4;">Quick Links</h5>

        <ul class="list-unstyled">
          <li>
            <a style="color:black;" href="aboutus.php">Brand Promise</a>
          </li>
          <li>
            <a style="color:black;" href="services.php">Services</a>
          </li>

 

          <li>
            <a style="color:black;" href="contactus.php">Contact Us</a>
          </li>
          
          
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mt-md-0 mt-3">

        <!-- Links -->
        <h5 class="text-uppercase" style="color:#0A6EB4;"> Portal </h5>

        <ul class="list-unstyled">
          <li>
            <a style="color:black;" href="staff/login.php"> Staff Login</a>
          </li>
          <li>
            <a style="color:black;" href="users/login.php"> User Login </a>
          </li>
        
         <li>
            <a style="color:black;" href="reserveaseat.php"> Reserve a Seat </a>
          </li>
           <li>
            <a style="color:black;" href="sanctuary.php"> Sanctuary </a>
          </li>
        </ul>

<br>

<h5 class="text-uppercase" style="color: #0A6EB4;"> Legal</h5>

<ul class="list-unstyled">
      <li>
            <a style="color:black;" href="termsofservice.php"> Terms of service </a>
          </li>
          <li>
            <a style="color:black;" href="privacypolicy.php"> Privacy Policy </a>
          </li>
            <li>
            <a style="color:black;" href="diversitystatement.php"> Diversity Statement </a>
          </li>
        
</ul>

      </div>
      <!-- Grid column -->
      
      
        <div class="col-md-3 mt-md-0 mt-3">
            
            <p style="color:black; font-size:24px;">  
             
            <a style="color:#0A6EB4;" href="#"><i class="fab fa-facebook"></i> </a>
            &nbsp;
               <a style="color:#0A6EB4;"  href="#"><i class="fab fa-twitter"></i> </a>
                        &nbsp;
               <a style="color:#0A6EB4;"  href="#"><i class="fab fa-instagram"></i> </a>
                        &nbsp;
               <a style="color:#0A6EB4;"  href="#"><i class="fab fa-youtube"></i> </a>
                           &nbsp;
               <a style="color:#0A6EB4;"  href="#"><i class="fab fa-linkedin"></i> </a>
            
            
            </p>
       
       <form name="subscribe" method="POST" action="subscribe.php" >
           <h4 style="font-size:14px; color:#0A6EB4;"> Get our emails </h4>
        
            <div class="input-sm">
           <input type="email" class="form-control" name="email" placeholder="E-mail Address" style="border-radius:20px; font-size:12px;" required> </div>
           
           <br>
           <input type="submit" class="btn btn btn" name="subscribe" value="Join  " style="border-radius:15px; font-weight:800; font-size:15px; background-color:blue; color:white;">
           <br><br>
       </form>
       
            </div>

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->
  
  

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="background-color:#0F52BA; color:white;">© 2020 Copyright:
    <a style="color:white;" href="https://www.noron-marque.com">Noron Marque</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->





  <script type="text/javascript">

    // Animations initialization
    new WOW().init();
      
  
  </script>
</body>

</html>