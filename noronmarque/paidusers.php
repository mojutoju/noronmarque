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
                </span> Paid Users </h3>
            
            <hr>
            
            
            
                                     
<div class="form-group">
    <input id="filter" type="text" class="form-control" placeholder="Search for users faster by typing the name, email here..." style="font-size:13px;">
</div>



<?php 
if(isset($_GET['id'])){
    
    $id = $_GET['id'];
    
    $delete = mysqli_query($dbc, "DELETE FROM `users` WHERE `id` = '$id' ");
    if($delete){
        
        ?>
        
        <script>
   
    swal({
          text: "Success",
  title: "User ID <?php echo $id; ?> has been Deleted ",

  icon: "success",
  button: "Close",
});

 window.location.href = 'paidusers.php';
</script>  

        
        
        
        
        <?php
    }
}
?>


<div class="card">
             
         <div class="table-responsive">
  <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">E-mail</th>
        <th scope="col">Full Name</th>
        <th scope="col">Password</th>
        <th scope="col">Phone No</th>
 
        <th scope="col">Action(s)</th>
        <th scope="col">View</th>
     
     </tr>
    </thead>
    
    
           
      
<?php

$users = mysqli_query($dbc,"SELECT * FROM `users` WHERE paymentstatus = 'Paid'  ");
if(mysqli_num_rows($users) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($users)){

  $id = $rows['id'];
  $fname = $rows['fname'];
  $lname = $rows['lname'];
  $email= $rows['email'];
$cpassword = $rows['cpassword'];
$status = $rows['status'];
$phoneno = $rows['phoneno'];
     $state = $rows['state'];
$date = $rows['date'];



    ?>
    
    
    
    
    
    
   <tbody class="searchable">
      <tr>
        <td><?php echo $email; ?></td>
        <td> <?php echo $fname; ?> <?php echo $lname; ?> </td>
        <td> <?php echo $cpassword; ?> </td>
        <td> <?php echo $phoneno; ?> </td>
     
        <td> <!-- Basic dropdown -->
<button class="btn btn-danger dropdown-toggle  btn-sm" type="button" data-toggle="dropdown"
  aria-haspopup="true" aria-expanded="false"> Action </button>

<div class="dropdown-menu">
  <a class="dropdown-item" href="approveusers.php?id=<?php echo $id; ?>">Approve</a>
  <a class="dropdown-item" href="declineusers.php?id=<?php echo $id; ?>">Unapprove</a>
    <a class="dropdown-item" href="paidusers.php?id=<?php echo $id; ?>">Delete</a>
</div>
<!-- Basic dropdown -->  </td>
        <td> <a href="viewusers.php?id=<?php echo $id; ?>&email=<?php echo $email; ?>" class="btn btn-success btn-sm"> View </a></td>
       
      </tr>
      
      <?php $u++; }}else{ ?>
      
      
 
  <td> No</td>
  <td> User</td>
  <td> has</td>
  <td> registered</td>
  <td> yet</td>
  <td> kindly wait.</td>

  
  
  <?php } ?>
      
    </tbody>
  </table>
</div>
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