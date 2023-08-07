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


body{
    font-family: 'Helvetica';
}

.card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 148px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
    </style>
    
  <script src="/js/sweetalert.min.js"></script>
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
  
          <?php if($paymentstatus == "Paid"){
            ?>
            
            
            	<div class="pro-banner" id="pro-banner">
						<div class="card pro-banner-bg border-0 rounded-0">
							<div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
								<p class="mb-0 text-white font-weight-medium mb-2 mb-lg-0 mb-xl-0">Congratulations, you are now a fully registered member.</p>
								<div class="d-flex">
									<a href="viewprofile.php"  class="btn btn-danger mr-2">View Profile</a>
									<a href="opt.php?action=logout"  class="btn btn-outline-light mr-2 bg-white text-dark">Sign Out</a>
									<button id="bannerClose" class="btn border-0 p-0">
										<i class="mdi mdi-close text-white"></i>
									</button>
								</div>
						</div>
					</div>
				</div>
            
            <?php
            
        }else{}
        ?>
        
         
       <!-- partial -->
<div class="container-fluid page-body-wrapper">
			<div class="main-panel">
				<div class="content-wrapper">
				
					<div class="row">
						<div class="col-sm-6 mb-4 mb-xl-0">
							<div class="d-lg-flex align-items-center">
								<div>
									<h3 class="text-dark font-weight-bold mb-2">Hi, <?php echo $fname; ?> <?php echo $lname; ?> </h3>
									<h6 class="font-weight-normal mb-2">Today is <?php echo date("D-d-M-Y" ); ?> </h6>
								</div>
							
							</div>
						</div>
						<div class="col-sm-6">
							<div class="d-flex align-items-center justify-content-md-end">
								<div class="pr-1 mb-3 mb-xl-0">
										<a href="feedback.php"  class="btn btn-outline-inverse-info btn-icon-text">
											Feedback
											<i class="mdi mdi-message-outline btn-icon-append"></i>                          
										</a>
								</div>
								
								
							</div>
						</div>
					</div>
				
        
        
        <hr>
        
        <div class="container">
        
         <h4 style="font-weight:800; color:black;"> Personal Data </h4>
     <hr> 
          <div class=" row">
              
              <div class="col-md-6 mb-4">
                  
                  
        <?php
            
                        $pic = mysqli_query($dbc, "SELECT * FROM profileimages WHERE email='".$_SESSION['login']."' ");
     $row = mysqli_fetch_assoc($pic);
     
     
     $file = $row['file'];
         $imageid = $row['imageid'];           
             
?>

         
                                            <?php
                $countrows = mysqli_num_rows($pic);
                if($countrows == 1){
      
                  ?>

<div class="card">
         <img src="profileimages/<?php echo $file; ?>" class="img-fluid">
</div>
                  <?php
          
                }else {  ?>
                
              
              <img src="https://assets.stickpng.com/images/585e4bf3cb11b227491c339a.png" class="img-fluid img-thumbnail" width="900px">
            
              <?php
              }
         
            ?>
                  
              </div>
              
              
              
              
              
<div class="col-md-6 mb-4">

<!-- Card -->



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
    <p>  <i class="fa fa-phone"></i> <a href="tel:<?php echo $phoneno; ?>" style="color:black;"> <?php echo $phoneno; ?>
</a>    </p> <hr>

<p> <i class="fa fa-street-view"></i> State of Residence : <?php echo $state; ?> </p>
<hr>

<p> <i class="fa fa-calendar"></i> Date Created : <?php 
$timestamp = strtotime($date);
 
// Creating new date format from that timestamp
$new_date = date("d-m-Y", $timestamp);


echo $new_date;  ?> </p>



</div>

<!-- Card -->
 <br>
              
              
              
              
              
              
              
          </div>
          </div>
        
        
   
				</div>
		<!-- page-body-wrapper ends -->
    </div>
    
    
    </div>
   
   
 <script>
        
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
 </script>
   <!-- End custom js for this page-->
  </body>
</html>