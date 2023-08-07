<?php include('db/connect.php');
session_start();



?>



<?php

if($_SESSION["login"] != null){
    $username = $_SESSION["login"];

}
else{

}
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
 
     <link rel="icon" href="img/9.png" type="image/png"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link href='https://fonts.googleapis.com/css?family=Barlow Semi Condensed' rel='stylesheet'>
  <!-- Bootstrap core CSS -->

  

    
    <style>
         .sidebar .nav .nav-item.active > .nav-link i {
    color: blue;b
}

body {
    background: #f2edf3;

}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown .dropdown-item:hover {
background: blue;
color:white;
}

.text-primary, .list-wrapper .completed .remove {
    color: lightgreen !important;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-toggle:after {
    color: blue;
    font-size: 1rem;
}

.sidebar .nav .nav-item.active > .nav-link .menu-title {
    color: blue;
    font-family: "ubuntu-medium", sans-serif;
}

.sidebar .nav.sub-menu .nav-item .nav-link.active {
    color: blue;
    background: transparent;
}


    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="dashboard.php"><img src="img/111.png" class="img-fluid"  alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="dashboard.php"><img src="img/9.png" class="img-fluid" alt="logo" width="200px" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search features of admin...">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="https://cdn3.iconfinder.com/data/icons/wpzoom-developer-icon-set/500/88-512.png" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Noron Marque Admin</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="changepassword.php">
                  <i class="fa fa-lock mr-2 text-success"></i> Change Password </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="opt.php?action=logout">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
          
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="opt.php?action=logout">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
          
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="https://cdn3.iconfinder.com/data/icons/wpzoom-developer-icon-set/500/88-512.png" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Noron Marque</span>
                  <span class="text-secondary text-small">System Administrator</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Users</span>
                <i class="menu-arrow"></i>
                <i class="fa fa-user"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="approvedusers.php">Approved Users</a></li>
                  <li class="nav-item"> <a class="nav-link" href="declinedusers.php">Declined Users</a></li>
                   <li class="nav-item"> <a class="nav-link" href="pendingusers.php">Pending Users</a></li>
                     <li class="nav-item"> <a class="nav-link" href="paidusers.php">Paid Users</a></li>
                </ul>
              </div>
            </li>
            
            
                <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Requests</span>
                <i class="menu-arrow"></i>
                <i class="fa fa-archive"></i>
              </a>
              <div class="collapse" id="ui">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="managerequests.php">Manage Requests</a></li>
                  <li class="nav-item"> <a class="nav-link" href="approvedrequests.php">Approved Requests</a></li>
                  <li class="nav-item"> <a class="nav-link" href="declinedrequests.php">Declined Requests</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pendingrequests.php">Pending Requests</a></li>
                  
                  
              
                </ul>
              </div>
            </li>
            
            
               <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#uid" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Discounts</span>
                <i class="menu-arrow"></i>
                <i class="fa fa-gift"></i>
              </a>
              <div class="collapse" id="uid">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="creatediscounts.php">Create Discount Plan</a></li>
                  <li class="nav-item"> <a class="nav-link" href="managediscounts.php">Manage Discount Plans</a></li>
                  <li class="nav-item"> <a class="nav-link" href="createvouchers.php">Create Voucher Plans </a></li>
                  <li class="nav-item"> <a class="nav-link" href="managevouchers.php">Manage Voucher Plans</a></li>
                  
                  
              
                </ul>
              </div>
            </li>
            
            
             <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-b" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Services</span>
                <i class="menu-arrow"></i>
                <i class="fa fa-handshake-o"></i>
              </a>
              <div class="collapse" id="ui-b">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="createservices.php">Create Services  </a></li>
                       <li class="nav-item"> <a class="nav-link" href="createsubservices.php">Create Sub Services  </a></li>
                  <li class="nav-item"> <a class="nav-link" href="manageservices.php">Manage Services </a></li>
                           <li class="nav-item"> <a class="nav-link" href="managesubservices.php">Manage Sub Services  </a></li>
           
                    
                     <li class="nav-item"> <a class="nav-link" href="assignservices.php">Assign Services </a></li>
                     <li class="nav-item"> <a class="nav-link" href="manageassignservices.php">Manage Assigned Services </a></li>
                     
                     
                </ul>
              </div>
            </li>
            
            
                <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pags" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title"> Documents </span>
                <i class="menu-arrow"></i>
                <i class="fa fa-folder"></i>
              </a>
              <div class="collapse" id="general-pags">
                <ul class="nav flex-column sub-menu">
                
                  <li class="nav-item"> <a class="nav-link" href="uploadinvoices.php"> Upload Invoices </a></li>
                      
                  <li class="nav-item"> <a class="nav-link" href="manageinvoices.php"> Manage Invoices </a></li>
                  <li class="nav-item"> <a class="nav-link" href="managepaidclients.php"> Manage Paid Clients </a></li>
                  <li class="nav-item"> <a class="nav-link" href="uploadebooks.php "> Upload E-Books </a></li>
                  <li class="nav-item"> <a class="nav-link" href="manageebooks.php "> Manage E-Books </a></li>
                                    <li class="nav-item"> <a class="nav-link" href="uploadbookcover.php "> Upload Book Cover </a></li>
                                              <li class="nav-item"> <a class="nav-link" href="managebookcover.php "> Manage Book Cover </a></li>
                </ul>
              </div>
            </li>
            
            
             <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basics" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Careers </span>
                <i class="menu-arrow"></i>
                <i class="fa fa-briefcase"></i>
              </a>
              <div class="collapse" id="ui-basics">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="createvacancy.php">Create Vacancies </a></li>
                  <li class="nav-item"> <a class="nav-link" href="managevacancy.php">Manage Vacancies </a></li>
                                  <li class="nav-item"> <a class="nav-link" href="jobapplications.php">Job Applications </a></li>
                </ul>
              </div>
            </li>
            
                  <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-ba" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Resources</span>
                <i class="menu-arrow"></i>
                <i class="fa fa-suitcase"></i>
              </a>
              <div class="collapse" id="ui-ba">
                <ul class="nav flex-column sub-menu">
                  
                  
                    <p  style="font-size:14px;" class="font-weight-normal mb-3">Podcasts</p>
                    
                  <li class="nav-item"> <a class="nav-link" href="createpodcasts.php">Create Podcasts Channel </a></li>
                  <li class="nav-item"> <a class="nav-link" href="uploadpodcasts.php"> Upload Podcasts  </a></li>
                   <li class="nav-item"> <a class="nav-link" href="managepodcastschannel.php"> Manage Podcasts Channel  </a></li>
                  <li class="nav-item"> <a class="nav-link" href="managepodcasts.php"> Manage Podcasts  </a></li>
                  
                    <p  style="font-size:14px;" class="font-weight-normal mb-3">Videos</p>
                    
                  <li class="nav-item"> <a class="nav-link" href="createvideos.php"> Create Video Channels  </a></li>
                  <li class="nav-item"> <a class="nav-link" href="uploadvideos.php"> Upload Videos  </a></li>
                   <li class="nav-item"> <a class="nav-link" href="managevideoschannel.php"> Manage Video Channels  </a></li>
                  <li class="nav-item"> <a class="nav-link" href="managevideos.php"> Manage Videos  </a></li>
                  <li class="nav-item"> <a class="nav-link" href="uploadurlvideos.php"> Upload Video Url(s)  </a></li>
                                <li class="nav-item"> <a class="nav-link" href="manageurlvideos.php"> Manage Video Url(s)  </a></li>
                    
                  
                       <h6 class="font-weight-normal mb-3" style="font-size:14px;">Documents and Workbooks</h6>
                       
                        
                  <li class="nav-item"> <a class="nav-link" href="createdocuments.php"> Create Folder  </a></li>
                  <li class="nav-item"> <a class="nav-link" href="uploaddocuments.php"> Upload Documents  </a></li>
                  <li class="nav-item"> <a class="nav-link" href="managedocuments.php"> Manage Documents  </a></li>
                  
                  
                  
               
                </ul>
              </div>
            </li>
            
               <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-page" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Library</span>
                <i class="menu-arrow"></i>
                <i class="fa fa-send"></i>
              </a>
              <div class="collapse" id="general-page">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="createblogs.php"> Create Library Posts </a></li>
                  <li class="nav-item"> <a class="nav-link" href="manageblogs.php"> Manage Library Posts </a></li>
               
                </ul>
              </div>
            </li>
            
            
             <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pa" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Programmes</span>
                <i class="menu-arrow"></i>
                <i class="fa fa-mortar-board"></i>
              </a>
              <div class="collapse" id="general-pa">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="createfacilitators.php"> Create Facilitators</a></li>
                  <li class="nav-item"> <a class="nav-link" href="managefacilitators.php"> Manage Facilitators </a></li>
                  <li class="nav-item"> <a class="nav-link" href="createprogrammes.php"> Create Programmes </a></li>
                  <li class="nav-item"> <a class="nav-link" href="assignfacilitators.php"> Assign Facilitator(s)  </a></li>
                       <li class="nav-item"> <a class="nav-link" href="assigndates.php"> Create Program Dates </a></li>
                                              <li class="nav-item"> <a class="nav-link" href="manageprogramdates.php"> Manage Program Dates </a></li>
                                                  <li class="nav-item"> <a class="nav-link" href="createcourses.php"> Create Program Courses </a></li>
                                                  <li class="nav-item"> <a class="nav-link" href="managecourses.php"> Manage Program Courses </a></li>
                                                  
                     <li class="nav-item"> <a class="nav-link" href="manageassignedfacilitators.php"> Assigned Facilitator(s)  </a></li>
                  <li class="nav-item"> <a class="nav-link" href="manageprogrammes.php"> Manage Programmes </a></li>
                  
                  
               
                </ul>
              </div>
            </li>
            
            
            
               <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-ages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Testimonials</span>
                <i class="menu-arrow"></i>
                <i class="fa fa-comment"></i>
              </a>
              <div class="collapse" id="general-ages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="uploadtestimonials.php"> Upload Testimonials </a></li>
                  <li class="nav-item"> <a class="nav-link" href="managetestimonials.php"> Manage Testimonials </a></li>
               
                </ul>
              </div>
            </li>
            
            
            
            
            
             <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Team</span>
                <i class="menu-arrow"></i>
                <i class="fa fa-group"></i>
              </a>
              <div class="collapse" id="general">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="createteam.php"> Create Team </a></li>
                  <li class="nav-item"> <a class="nav-link" href="manageteam.php"> Manage Team </a></li>
               
                </ul>
              </div>
            </li>
            
               <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Newsletters</span>
                <i class="menu-arrow"></i>
                <i class="fa fa-vcard"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="createnewsletters.php">Create Newsletters </a></li>
                  <li class="nav-item"> <a class="nav-link" href="managenewsletters.php"> Manage Newsletters </a></li>
               
                </ul>
              </div>
            </li>
            
            
            
            
            
               <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-p" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Notifications</span>
                <i class="menu-arrow"></i>
                <i class="fa fa-bell"></i>
              </a>
              <div class="collapse" id="general-p">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="sendnotification.php"> Send Notifications </a></li>
                  <li class="nav-item"> <a class="nav-link" href="managenotification.php"> Manage Notifications </a></li>
               
                </ul>
              </div>
            </li>
            
            
            
                 <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-sic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title"> Training </span>
                <i class="menu-arrow"></i>
                <i class="fa fa-map-marker"></i>
              </a>
              <div class="collapse" id="ui-sic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="createtraining.php">Create Training </a></li>
                  <li class="nav-item"> <a class="nav-link" href="managetraining.php"> Manage Training </a></li>
               
                </ul>
              </div>
            </li>
            
            
            
            
            
         
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-s" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Reports</span>
                <i class="menu-arrow"></i>
                <i class="fa fa-archive menu-icon"></i>
              </a>
              <div class="collapse" id="general-s">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="generateclientreports.php"> Client Reports </a></li>
                  <li class="nav-item"> <a class="nav-link" href="salesreports.php"> Sales Reports </a></li>
                <li class="nav-item"> <a class="nav-link" href="expensereports.php"> Expense Reports </a></li>
                </ul>
              </div>
            </li>
            
            
            
            
              
               <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-ges" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Reviews</span>
                <i class="menu-arrow"></i>
                <i class="fa fa-star"></i>
              </a>
              <div class="collapse" id="general-ges">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="managereviews.php"> All Reviews </a></li>
                 
               
                </ul>
              </div>
            </li>
            
            
            
        
          </ul>
        </nav>
        <!-- partial -->
      
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
        





<script>
    // jQuery code
// Prevent closing from click inside dropdown
$(document).on('click', '.dropdown-menu', function (e) {
  e.stopPropagation();
});
</script>


    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>