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
                  <i class="fa fa-mortar-board"></i>
                </span> Manage Programme(s) </h3>
            
            <hr>
            
            
                  <?php
                  if(isset($_GET['program_id'])){
                      
                      $id = $_GET['program_id'];
                      
                      
                      $delete = mysqli_query($dbc, "DELETE FROM `programmes` WHERE `program_id` = '$id' ");
                      
                      if($delete){
                          
                          ?>
                          
                          
                             <script>
   
    swal({
          text: "Success",
  title: "Program with ID <?php echo $id; ?> has been Deleted ",

  icon: "success",
  button: "Close",
});

 window.location.href = 'manageprogrammes.php';
</script>  
                          
                          
                          <?php 
                      }else{}
                  }
                  ?>
                                     
<div class="form-group">
    <input id="filter" type="text" class="form-control" placeholder="Search for programmes faster by typing the name here..." style="font-size:13px;">
</div>




<div class="card">
             
         <div class="table-responsive">
  <table class="table table-hover table-bordered">
    <thead>
      <tr>
              <th scope="col">Programme(s)</th>
        <th scope="col">Facilitator(s)</th>
    <th scope="col">View</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    
     </tr>
    </thead>
    
    
           
      
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
    ?>
    
    
    
    
    
    
   <tbody class="searchable">
      <tr>
        <td><?php echo $classname; ?></td>
        
        <td>
         <?php
  
$assigned = mysqli_query ($dbc, "SELECT * FROM `assignfacilitators` WHERE `classname` = '$classname'  ");
if(mysqli_num_rows($assigned) > 0 ){

$a = 1;
while($rows = mysqli_fetch_assoc($assigned)){
    
$facilitator = $rows['facilitator'];

  ?>
  
        
 
 
  
  <?php echo $facilitator; ?>, <?php $a++;  }} ?> 
  
  
   
  
  </td>
  
  
        <td> <a href="viewprogramme.php?program_id=<?php echo $id; ?>" class="btn btn btn-sm" style="background:blue; color:white;">  View </a> </td>
  
  
   <td> <a href="editprogramme.php?program_id=<?php echo $id; ?>" class="btn btn btn-sm" style="background:orange; color:white;">  Edit </a> </td>
  
        <td> <a href="manageprogrammes.php?program_id=<?php echo $id; ?>" class="btn btn btn-sm" style="background:red; color:white;">  Delete </a> </td>
     
      
        
      
      </tr>
      
      
     
      <?php $u++; }}else{ ?>
      
      
 
  <td> No</td>
  <td> Programmes(s)</td>
 
 
  
  
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