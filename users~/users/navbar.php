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
    
    
    <div class="container-scroller">
        
        
       
			
				
				
				
		<!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
            <ul class="navbar-nav navbar-nav-left">
              <li class="nav-item ml-0 mr-5 d-lg-flex d-none">
                <a href="#" class="nav-link horizontal-nav-left-menu"><i class="mdi mdi-format-list-bulleted"></i></a>
              </li>
           
          
              <li class="nav-item nav-search d-none d-lg-block ml-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="search">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="search">
                </div>
              </li>	
            </ul>
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="dashboard.php"><img src="/img/logo.svg" alt="logo"/></a>
                <a class="navbar-brand brand-logo-mini" href="dashboard.php"><img src="/img/nm.png" alt="logo"/></a>
            </div>
            <ul class="navbar-nav navbar-nav-right">
               
                <li class="nav-item dropdown d-lg-flex d-none">
                  <a class="dropdown-toggle show-dropdown-arrow btn btn-inverse-primary btn-sm" id="nreportDropdown" href="#" data-toggle="dropdown">
                  Reports
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="nreportDropdown">
                      <p class="mb-0 font-weight-medium float-left dropdown-header">Reports</p>
                      <a class="dropdown-item">
                        <i class="mdi mdi-file-pdf text-primary"></i>
                        Pdf
                      </a>
                      <a class="dropdown-item">
                        <i class="mdi mdi-file-excel text-primary"></i>
                        Exel
                      </a>
                  </div>
                </li>
                <li class="nav-item dropdown d-lg-flex d-none">
                  <button type="button" class="btn btn-inverse-primary btn-sm">Settings</button>
                </li>
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <span class="nav-profile-name"><?php echo $lname; ?></span>
                    <span class="online-status"></span>
                    
                               
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
                    
                    <img src="profileimages/<?php echo $file; ?>" alt="profile"/>
                    
                    <?php }else{ ?>
                    
                    <img src="https://img2.pngio.com/user-profile-avatar-login-account-svg-png-icon-free-download-account-png-980_982.png" alt="profile"/>
                    
                    
                    <?php } ?>
                    
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                      <a class="dropdown-item">
                        <i class="mdi mdi-settings text-primary"></i>
                        Settings
                      </a>
                      <a href="opt.php?action=logout" class="dropdown-item">
                        <i class="mdi mdi-logout text-primary"></i>
                        Logout
                      </a>
                  </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </div>
      </nav>
      <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-bag-personal menu-icon"></i>
                    <span class="menu-title">Requests</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu">
                      <ul>
                          
                          <li class="nav-item"><a class="nav-link" href="viewcart.php"> View Cart </a></li>
                          
                          <li class="nav-item"><a class="nav-link" href="paidrequests.php">Paid Requests</a></li>
                          <li class="nav-item"><a class="nav-link" href="pendingrequests.php">Pending Requests</a></li>
                                 <li class="nav-item"><a class="nav-link" href="approvedrequests.php">Approved Requests</a></li>
                      </ul>
                  </div>
              </li>
             
            
            
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-folder menu-icon"></i>
                    <span class="menu-title">Resources</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu">
                      <ul class="submenu-item">
                          <li class="nav-item"><a class="nav-link" href="resources.php">All Resources</a></li>
                              <li class="nav-item"><a class="nav-link" href="availableresources.php">Available Resources</a></li>
                          <li class="nav-item"><a class="nav-link" href="ebooks.php">E-books</a></li>
                          <li class="nav-item"><a class="nav-link" href="podcasts.php">  Podcasts</a></li>
                          <li class="nav-item"><a class="nav-link" href="videos.php">Videos</a></li>
                          <li class="nav-item"><a class="nav-link" href="documents.php">Documents</a></li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item">
                  <a href="filemanager.php" class="nav-link">
                    <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                    <span class="menu-title">File Manager</span></a>
              </li>
            </ul>
        </div>
      </nav>
    </div>

    
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