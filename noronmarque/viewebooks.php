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
                  <i class="fa fa-book"></i>
                </span>  View E-Books </h3>
            
            <hr>
            
            
            
            
            <?php 
            
            if(isset($_GET['ebook_id'])){
                
                $id = $_GET['ebook_id'];
                
                
                
                
                     
$users = mysqli_query($dbc,"SELECT * FROM `ebooks` WHERE `ebook_id` = '$id' ");
if(mysqli_num_rows($users) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($users)){


$id = $rows['ebook_id'];
$docname = $rows['docname'];
$amount = $rows['amount'];
$file = $rows['file'];
$status = $rows['status'];
$description = $rows['description'];
$type = $rows['type'];


                
            
            ?>
            
            
            
 
                    <h4> Filename : <?php echo $file; ?> </h4>
                    <hr>
                      <?php 
                    
if($type == "application/vnd.openxmlformats-officedocument.wordprocessingml.document"){
    ?>
    
    <h4> Type : Word Docx    </h4>
    
<?php 
}else if($type == "application/pdf"){
    ?>
    
    <h4> Type : PDF </h4>
     
    
    <?php
}else if($type == "text/plain"){

?>

<h4> Type : Text Plain </h4>
 
 
 
 
<?php

}else if($type == "application/vnd.openxmlformats-officedocument.presentationml.presentation"){
    ?>
    
<h4> Type : PowerPoint PPTX </h4>
              <?php 
}else {}
                    ?>
                    
         <hr>
         <h4>Status : <?php echo $status; ?> </h4>
         
         <hr>
         
         <h4> Amount : 
         
         <?php
         
         if(!empty($amount)){
             ?>
             
             N<?php echo number_format($amount);
         }else{
             echo "None";
         }
         
         ?>
         </h4>
            
           <hr>
           <?php 
           if(!empty($description)){
               ?>
               
           <?php echo nl2br($description); ?>     
              
              <?php 
           }else{
               echo "No Description";
           }
           ?>
         
           <hr>
           <a class="btn btn-success" href="documents/<?php echo $file; ?>"> Download </a>
            
            
            
            
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
            
            
            
            
            
            
            
            