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
                  <i class="mdi mdi-home"></i>
                </span> Dashboard </h3>
            
            <hr>
         
           <div class="row">
              <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card  card-img-holder text-white" style="background:blue;">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total Users <i class="fa fa-user mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> 0 </h2>
                
                  </div>
                </div>
              </div>
              
              
                <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card bg-warning  card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Pending Users <i class="fa fa-user mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> 0 </h2>
                
                  </div>
                </div>
              </div>
              
              
              
              
              
              
              
              
                <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card bg-success  card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Approved Users <i class="fa fa-user mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> 0 </h2>
                
                  </div>
                </div>
              </div>
              
              
                <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card bg-danger  card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Unapproved Users <i class="fa fa-user mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> 0 </h2>
                
                  </div>
                </div>
              </div>
              
              
                <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card  card-img-holder text-white" style="background:lightgreen;">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Paid Users <i class="fa fa-user mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> 0 </h2>
                
                  </div>
                </div>
              </div>
              
                <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card  card-img-holder text-white" style="background:red;">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Unpaid Users <i class="fa fa-user mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> 0 </h2>
                
                  </div>
                </div>
              </div>
              
              
               <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card  card-img-holder text-white" style="background:dodgerblue;">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total Profits from Users <i class="fa fa-money mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> &#x20A6;0.00 </h2>
                
                  </div>
                </div>
              </div>
              
                 
               <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card  card-img-holder text-white" style="background:blue;">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Services <i class="fa fa-handshake-o mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> 0 </h2>
                
                  </div>
                </div>
              </div>
              
                  
               <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card bg-success  card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Paid Services <i class="fa fa-handshake-o mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> 0 </h2>
                
                  </div>
                </div>
              </div>
              
              
              
               <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card  card-img-holder text-white" style="background:dodgerblue;">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total Profits from Services <i class="fa fa-money mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> &#x20A6;0.00 </h2>
                
                  </div>
                </div>
              </div>
              
              
                   <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card  card-img-holder text-white" style="background:blue;" >
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">E-books <i class="fa fa-folder mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> 0 </h2>
                
                  </div>
                </div>
              </div>
              
              
              <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card bg-success card-img-holder text-white" >
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"> Paid Clients <i class="fa fa-folder mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> 0 </h2>
                
                  </div>
                </div>
              </div>
              
              
              
                  
               <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card  card-img-holder text-white" style="background:dodgerblue;">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total Profits from Clients <i class="fa fa-money mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> &#x20A6;0.00 </h2>
                
                  </div>
                </div>
              </div>
              
              
              
              
              <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card  card-img-holder text-white" style="background: #131313;" >
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"> Total Invoice <i class="fa fa-sticky-note mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> 0 </h2>
                
                  </div>
                </div>
              </div>
              
                  <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card  card-img-holder text-white" style="background: blue;" >
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"> About Us <i class="fa fa-globe mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> 0 </h2>
                
                  </div>
                </div>
              </div>
              
              
                
              
                  <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card  card-img-holder text-white" style="background: blue;" >
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"> Podcast Channels <i class="fa fa-file-archive-o mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> 0 </h2>
                
                  </div>
                </div>
              </div>
              
              
                  
               <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card  card-img-holder text-white" style="background:dodgerblue;">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Podcasts <i class="	fa fa-file-audio-o mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> 0 </h2>
                
                  </div>
                </div>
              </div>
              
              
               
                  <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card  card-img-holder text-white" style="background: blue;" >
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"> Video Channels <i class="fa fa-file-movie-o mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> 0 </h2>
                
                  </div>
                </div>
              </div>
              
              
              
              
               <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card  card-img-holder text-white" style="background: dodgerblue;" >
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"> Videos <i class="fa fa-file-movie-o mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> 0 </h2>
                
                  </div>
                </div>
              </div>
              
              
              
                  <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card  card-img-holder text-white" style="background: indigo;" >
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"> Folders <i class="fa fa-folder mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> 0 </h2>
                
                  </div>
                </div>
              </div>
              
              
              
                  <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card  card-img-holder text-white" style="background: blue;" >
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"> Documents <i class="fa fa-sticky-note mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> 0 </h2>
                
                  </div>
                </div>
              </div>
              
              
                
                  <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card  card-img-holder text-white" style="background: indigo;" >
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"> Blogs <i class="fa fa-send mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> 0 </h2>
                
                  </div>
                </div>
              </div>
              
              
              
                  <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card  card-img-holder text-white" style="background: dodgerblue;" >
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"> Team <i class="fa fa-group mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> 0 </h2>
                
                  </div>
                </div>
              </div>
              
              
                  <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card  card-img-holder text-white" style="background: blue;" >
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"> Newsletters <i class="fa fa-vcard mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> 0 </h2>
                
                  </div>
                </div>
              </div>
              
              
              
               <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card bg-success card-img-holder text-white" >
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"> Notifications <i class="fa fa-bell mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> 0 </h2>
                
                  </div>
                </div>
              </div>
              
              
                
               <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card card-img-holder text-white" style="background: indigo;" >
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"> Events <i class="fa fa-map-marker mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> 0 </h2>
                
                  </div>
                </div>
              </div>
              
              
                
               <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card  card-img-holder text-white" style="background:blue;" >
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"> Reports <i class="fa fa-archive mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> 0 </h2>
                
                  </div>
                </div>
              </div>
              
              
                
               <div class="col-md-4 mb-3 stretch-card grid-margin">
                <div class="card  card-img-holder text-white" style="background:green;" >
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"> Reviews <i class="fa fa-star mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-2"> 0 </h2>
                
                  </div>
                </div>
              </div>
              
              
              
              </div>
         
         
         
         
         
         
          </div></div>
      
      
      
      
      

    <!-- End custom js for this page -->
  </body>
</html>