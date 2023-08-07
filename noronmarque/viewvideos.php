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
       <script src="//cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
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

.file {
  visibility: hidden;
  position: absolute;
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
         
         
         <div class="container">
            
             <h3 class="page-title">
                <span class="page-title-icon  text-white mr-2" style="background:blue;">
              <i class="	fa fa-file-video-o"></i>
                </span>  View Videos </h3>
            
            <hr>
            
            <div class="row">
            
            
            <?php 
            
            if(isset($_GET['vid_id'])){
                
                $id = $_GET['vid_id'];
                
                
                
                
                     
$users = mysqli_query($dbc,"SELECT * FROM `videos` WHERE `vid_id` = '$id' ");
if(mysqli_num_rows($users) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($users)){

  $vid = $rows['vid_id'];
  $videochannelname = $rows['videochannel'];

$subtitle = $rows['subtitle'];
$hostname = $rows['hostname'];
$description = $rows['description'];
$file = $rows['file'];
$type = $rows['type'];
            
            ?>
            
            
            <div class="col-md-6 mb-2">
                
                
                <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="videos/<?php echo $file; ?>"></iframe>
</div>

                
                
                
                
                
             
            </div>
            
            
            <div class="col-md-6 mb-2">
                
                         <h4> Video Channel  </h4> <br>
                         <p> <?php echo $videochannelname; ?> </p>
                    <hr>
                    
                    
                    
                    <h4> Video Title</h4>
                    <p> <?php echo $subtitle; ?> </p>
                    
                    <hr>
    
    <h4> Description </h4>
     <p> <?php echo htmlspecialchars_decode($description); ?> </p>
 
         
         
            
            
                
            </div>
         
 
           
            
            
            <?php $u++; }}} ?>
            
            
                </div>
            </div></div>
            
            
            
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


$(document).on("click", ".browse", function() {
  var file = $(this).parents().find(".file");
  file.trigger("click");
});
$('input[type="file"]').change(function(e) {
  var fileName = e.target.files[0].name;
  $("#file").val(fileName);

  var reader = new FileReader();
  reader.onload = function(e) {
    // get loaded data and render thumbnail.
    document.getElementById("preview").src = e.target.result;
  };
  // read the image file as a data URL.
  reader.readAsDataURL(this.files[0]);
});


 
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}




    </script>
          
    <!-- End custom js for this page -->
  </body>
</html>  
            
            
            
            
            
            
            
            