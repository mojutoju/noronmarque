
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
    font-family: 'Helvetica' ;
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
  
  .my-custom-scrollbar {
position: relative;
height: 200px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
overflow-y : hidden;
overflow: scroll;
}

table::-webkit-scrollbar{
    overflow:hidden;
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
   
   
  
   
   
   <?php
    if(isset($_GET['email']) && isset($_GET['servicename']) && isset($_GET['service_id']) && isset($_GET['subservice_id']) && isset($_GET['subservicename'])){
       
       $email = $_GET['email'];
       $servicename = $_GET['servicename'];
       $subservicename = $_GET['subservicename'];
       $serviceid = $_GET['service_id'];
       $subserviceid = $_GET['subservice_id'];
       
       $delete = mysqli_query($dbc,"DELETE FROM  `requestcart` WHERE `subservice_id` = '$subserviceid' AND `email` = '$email' AND `subservicename` = '$subservicename'  ");
       
       if($delete){
           
           
           ?>
           
           
           
                     
              
<script>
   
    swal({
          text: "Success",
  title: "<?php echo $subservicename; ?> has been removed from cart  ",

  icon: "success",
  button: "Close",
});



setTimeout(function () {
   window.location.href = "paidrequests.php"; //will redirect to your blog page (an ex: blog.html)
}, 1000); //will call the function after 2 secs.

</script>  
  
           
           
           
           
           <?php
           
           
       }else{  }
   }
   
   ?>
   
   
   
   <?php include('navbar.php'); ?>
  


 
       <!-- partial -->
<div class="container-fluid page-body-wrapper">
			<div class="main-panel">
				<div class="content-wrapper">




<div class="container">
      
      
      <h3 style="font-weight:800; "> Paid Requests </h3>
      <HR>
  
<div class="card" style="border-radius:13px;">
             
         <div class="table-responsive">
  <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col" style="font-weight:800; ">Service(s)</th>
        <th scope="col" style="font-weight:800; "> Subservice(s)</th>
        <th scope="col" style="font-weight:800; "> Amount</th>
        <th scope="col" style="font-weight:800; "> Status </th>
     
        

        <th scope="col" style="font-weight:800; ">View</th>
        <th scope="col" style="font-weight:800; ">Delete</th>
    
     </tr>
    </thead>
    
    
           
      
<?php

$email = $_SESSION['login'];

$cart = mysqli_query($dbc,"SELECT * FROM `requestcart` WHERE `email` = '$email' AND `paymentstatus` = 'Paid' ");
if(mysqli_num_rows($cart) > 0){
    $su = 1;
 while($rows = mysqli_fetch_assoc($cart)){

$cartid = $rows['cartid'];
$emailz = $rows['email'];
$servicename = $rows['servicename'];
$id = $rows['service_id'];
$subid = $rows['subservice_id'];
$subservicename = $rows['subservicename'];
$amount = $rows['amount'];
$statuss = $rows['status'];
$payment = $rows['paymentstatus'];



    ?>
    
    
    
    
    
    
   <tbody class="searchable">
      <tr>
        <td><?php echo $servicename; ?></td>
        <td>  <?php echo $subservicename; ?> </td>
        
        <td> N<?php echo number_format($amount); ?>     </td>
     <td> <?php echo $statuss; ?> </td>
   
     
       <td> <a href="viewrequests.php?cartid=<?php echo $cartid; ?>&email=<?php echo $emailz; ?>&subservice_id=<?php echo $subid; ?>&servicename=<?php echo $servicename; ?>&subservicename=<?php echo $subservicename; ?>&amount=<?php echo $amount; ?>" class="btn btn btn-sm" style="background: blue; color:white;"> View </a>  </td>
  
  
  
     <td> <a href="paidrequests.php?email=<?php echo $emailz; ?>&servicename=<?php echo $servicename; ?>&service_id=<?php echo $id; ?>&subservice_id=<?php echo $subid; ?>&subservicename=<?php echo $subservicename; ?>" class="btn btn-danger btn-sm"> Delete </a>  </td>

     
      
        
      
      </tr>
      
      <?php $su++; }}else{ ?>
      
      
 
  <td> No</td>
  <td> Request</td>
  <td> has</td>
 <td>been</td>
  <td> added to cart </td>
  
  <?php } ?>
      
    </tbody>
  </table>
</div>
       </div>     
  
  
  
  </div>
  
  
  </div>
  
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
  
  
  