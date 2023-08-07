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
         
            
             <h3 class="page-title">
                <span class="page-title-icon  text-white mr-2" style="background:blue;">
                  <i class="fa fa-archive"></i>
                </span> Manage Requests </h3>
            
            <hr>
            
            
                  <?php
                  if(isset($_GET['cartid'])){
                      
                      $id = $_GET['cartid'];
                      
                      
                      $delete = mysqli_query($dbc, "DELETE FROM `requestcart` WHERE `cartid` = '$id' ");
                      
                      if($delete){
                          
                          ?>
                          
                          
                             <script>
   
    swal({
          text: "Success",
  title: "Request ID <?php echo $id; ?> has been Deleted ",

  icon: "success",
  button: "Close",
});

 window.location.href = 'managerequests.php';
</script>  
                          
                          
                          <?php 
                      }else{}
                  }
                  ?>
                                     
<div class="form-group">
    <input id="filter" type="text" class="form-control" placeholder="Search for requests faster by typing the name here..." style="font-size:13px;">
</div>




<div class="card">
             
         <div class="table-responsive">
  <table class="table table-hover table-bordered">
    <thead>
      <tr>
       
        
        <th scope="col">User(s)</th>
        <th scope="col">Service(s)</th>
        <th scope="col">Assign Charge(s)</th>
        <th scope="col">Status</th>
        <th scope="col">Download / Upload </th>
        <th scope="col"> Payment Status</th>
        
        <th scope="col">View</th>
    
     </tr>
    </thead>
    
    
           
      
<?php

$users = mysqli_query($dbc,"SELECT * FROM `requestcart` WHERE 1  ");
if(mysqli_num_rows($users) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($users)){


$cartid = $rows['cartid'];
$emailz = $rows['email'];
$servicename = $rows['servicename'];
$id = $rows['service_id'];
$subid = $rows['subservice_id'];
$subservicename = $rows['subservicename'];
$amount = $rows['amount'];
$statuss = $rows['status'];
$payment = $rows['paymentstatus'];


$select = mysqli_query($dbc,"SELECT * FROM `users` WHERE `email` = '$emailz'  ");

 $rows = mysqli_fetch_assoc($select);

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
$result = $lname . ' ' . $fname;



    ?>
    
    

    
    
   <tbody class="searchable">
      <tr>
        <td>
            
            <?php 
            
         
                 echo $result;
     
     
            ?>
            
            </td>
        <td> <?php echo $servicename; ?> <br>
        <?php echo $subservicename; ?>
        </td>
        <td> 
        
        <?php
        if($statuss == "Declined") {
            
            echo "Status is yet to be approved";
            
        }else if ($statuss == "Approved"){
            ?>
            
                    <a href="assigncharges.php?cartid=<?php echo $cartid; ?>&email=<?php echo $emailz; ?>&subservice_id=<?php echo $subid; ?>&servicename=<?php echo $servicename; ?>&subservicename=<?php echo $subservicename; ?>" class="btn btn btn-sm" style="background:green; color:white;"> Assign </a>
            
            <?php
        }else if($statuss == "Pending") {
            echo " Waiting for request response";
        }else{}
        ?>
        
        
 </td>
 
 
 

 
 
          <td> <!-- Basic dropdown -->
<button class="btn btn-danger dropdown-toggle  btn-sm" type="button" data-toggle="dropdown"
  aria-haspopup="true" aria-expanded="false"> Action </button>

<div class="dropdown-menu">
  <a class="dropdown-item" href="approverequests.php?cartid=<?php echo $cartid; ?>&email=<?php echo $emailz; ?>&subservice_id=<?php echo $subid; ?>&servicename=<?php echo $servicename; ?>&subservicename=<?php echo $subservicename; ?> ">Approve</a>
  <a class="dropdown-item" href="declinerequests.php?cartid=<?php echo $cartid; ?>&email=<?php echo $emailz; ?>&subservice_id=<?php echo $subid; ?>&servicename=<?php echo $servicename; ?>&subservicename=<?php echo $subservicename; ?>">Decline</a>
    <a href="managerequests.php?cartid=<?php echo $cartid; ?>" class="dropdown-item"> Delete </a>
</div>
<!-- Basic dropdown -->  </td>


 <td>
    
    
             
      
      
          
      <?php
      $docs = mysqli_query($dbc,"SELECT * FROM `docupload` WHERE `email` = '$email' AND `cartid` = '$cartid' ");
  $row = mysqli_fetch_assoc($docs);
     

$cartidz = $row['cartid'];
$servicename = $row['servicename'];
$subservicename = $row['subservicename'];
$file = $row['file'];

      
      ?>
      
      
      <?php
      
      
          
  if (mysqli_num_rows($docs) > 0) {
      
                  ?>
                    
            <a href="/users/docfiles/<?php echo $file; ?>" class="btn btn btn-sm" style="background: green; color:white;"> Download   </a>


   
          
      <?php
      $admindoc = mysqli_query($dbc,"SELECT * FROM `admindocupload` WHERE `email` = '$email' AND `cartid` = '$cartid' ");
  
       if (mysqli_num_rows($admindoc) > 0) {



      
      ?>
      
   
                    
            <a href="#" class="btn btn btn-sm" style="background: dodgerblue; color:white;"> Uploaded  </a>
                   
                    <?php 
                    
                    }else{
                    
                    ?>
                    

                    
                    
                  
      

                   <a href="uploadfile.php?cartid=<?php echo $cartid; ?>&email=<?php echo $emailz; ?>&subservice_id=<?php echo $subid; ?>&servicename=<?php echo $servicename; ?>&subservicename=<?php echo $subservicename; ?>&amount=<?php echo $amount; ?>" class="btn btn btn-sm" style="background-color: dodgerblue; color:white;" > Upload </a>
               
                 <?php } ?>
               
               
               
                    <?php }else{ ?>
                    
                  <a href="#" class="btn btn btn-sm" style="background: orange; color:white;"> Awaiting Document </a> 
                    
                    
                    <?php } ?>
      
      
          
             
          
          
          
          
          
          
     
     
 </td>



<td>
     <?php
     if($payment == "Not Paid"){
         
         ?>
         
         
         
         <p style="color:red;"> Not Paid </p>
         
         
         <?php
         
         
     }else if($payment == "Paid"){
         
         ?>
         
         <p style="color:green;"> Paid </p>
         
         <?php
     }else{}
     
     ?>
</td>


        <td> <a href="viewrequests.php?cartid=<?php echo $cartid; ?>" class="btn btn btn-sm" style="background:blue; color:white;">  View </a> </td>
     
      
        
      
      </tr>
      
      <?php $u++; }}else{ ?>
      
      
 
  <td> No</td>
  <td> Requests</td>
  <td> has</td>
  <td> been booked</td>
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






 
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}




    </script>
          
    <!-- End custom js for this page -->
  </body>
</html>  