
application/x-httpd-php manageebooks.php ( PHP script text )
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



<?php
if(isset($_GET['bookcoverid'])){
    $id = $_GET['bookcoverid'];
    
    $delete = mysqli_query($dbc, "DELETE FROM `bookcover` WHERE `bookcoverid` = '$id' ");
    
    if($delete){
        
        ?>
        
        
        <script>
   
    swal({
          text: "Success",
  title: "Ebook cover id <?php echo $id; ?> has been Deleted ",

  icon: "success",
  button: "Close",
});

 window.location.href = 'managebookcover.php';
</script>  
        
        
        
        <?php 
    }
}

?>
 
      <?php include('navbar.php'); ?>
          <div class="main-panel">
          <div class="content-wrapper">
         
            
             <h3 class="page-title">
                <span class="page-title-icon  text-white mr-2" style="background:blue;">
                  <i class="fa fa-book"></i>
                </span> Manage E-Book Covers </h3>
            
            <hr>
            
            
            
            
            
            <div class="form-group">
    <input id="filter" type="text" class="form-control" placeholder="Search for e-book covers faster by typing the name here..." style="font-size:13px;">
</div>




<div class="card">
             
         <div class="table-responsive">
  <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">Title(s)</th>
        
    
        <th scope="col">View</th>
     <th scope="col"> Delete</th>
     </tr>
    </thead>
    
    
           
      
<?php

$assign = mysqli_query($dbc,"SELECT * FROM `bookcover` WHERE 1  ");
if(mysqli_num_rows($assign) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($assign)){

$ebookid = $rows['ebook_id'];
$title = $rows['title'];
$coverid = $rows['bookcoverid'];
$file = $rows['file'];




    ?>
    
    
    
    
    
    
   <tbody class="searchable">
      <tr>
        <td><?php echo $title; ?></td>
     
        <td> <a href="viewbookcover.php?bookcoverid=<?php echo $coverid; ?>" class="btn btn-success btn-sm"> View </a></td>
        <td> <a href="managebookcover.php?bookcoverid=<?php echo $coverid; ?>" class="btn btn-danger btn-sm"> Delete </a> </td>
      
      </tr>
      
      <?php $u++; }}else{ ?>
      
      
 
  <td> No</td>
  <td> E-book Cover</td>
  <td> has</td>
  <td> been uploaded</td>
  <td> yet</td>
 

  
  
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
            