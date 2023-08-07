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
  <script src="//cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
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
         
            
             <h3 class="page-title">
                <span class="page-title-icon  text-white mr-2" style="background:blue;">
                  <i class="fa fa-podcast"></i>
                </span> Create Podcasts </h3>
            
            <hr>
            
            
            <?php
            if(isset($_POST['podcasts'])){
             
                $podcastname = $_POST['podcastchannelname'];
              
                $description = mysqli_real_escape_string($dbc, $_POST['description']);
                
                
                     
                 $file = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $type=$_FILES['file']['type'];
$limit_size = 9000;
    $tmp_name = $_FILES['file']['tmp_name'];
    $fp      = fopen($tmp_name, 'r');

    $content = fread($fp, filesize($tmp_name));

    $content = addslashes($content);

    fclose($fp);
      list($width, $height) = getimagesize($file);

$allowed =  array('jpg', 'jpeg', 'png', 'svg', 'gif'); //allowed types
$ext = pathinfo($file, PATHINFO_EXTENSION);//extension checking

       
                
$check = "SELECT * FROM `podcastchannel` WHERE podcastchannelname ='".$podcastname."'";

$rs = mysqli_query($dbc,$check);

$data = mysqli_fetch_array($rs, MYSQLI_NUM);

if($data[0] > 1) {

   
   ?>
    
<script>
   
    swal({
          text: "Error",
  title: "<?php echo $podcastname; ?> already exists ",

  icon: "error",
  button: "Close",
});

</script>  







      <?php
      
}else{
    
    
    
            
if(!in_array($ext,$allowed)){

    
    ?>
    
    
<script>
   
    swal({
          text: "Error",
  title: "Invalid format make sure you upload a clear docx, doc, pdf, ppt, pptx ",

  icon: "error",
  button: "Close",
});


</script>  
    
    
    <?php 
}else {
    
    
      if($_FILES['file']['size'] <= $limit_size){
      ?>
      
      
         
<script>
   
    swal({
          text: " Size is less than 2mb ",
  title: "Invalid Size ",

  icon: "error",
  button: "Close",
});

</script>  

      
      <?php 
      
      
  
    
      } else{
          
           if($file){
    $location = "podcastscover/$file";
    move_uploaded_file($tmp_name, $location);
          
       
  
    
    if($width > 1000 || $height > 1000){
        ?>
        
      
         
<script>
   
    swal({
          text: " Make use of 1000px by 1000px ",
  title: "Invalid Dimensions",

  icon: "error",
  button: "Close",
});

</script>  
  
        
        
        
        <?php
        
    }else{


  $insert = mysqli_query($dbc, "INSERT INTO `podcastchannel` VALUES (NULL, '$file', '$size' , '$content', '$type', '$location',  '$podcastname', '$description', now()) ");
  
  if($insert){
      
      ?>
      
        
<script>
   
    swal({
          text: " Success ",
  title: "<?php echo $podcastname; ?> has been created ",

  icon: "success",
  button: "Close",
});

</script>  

      
      
      
      
      
      
      
      <?php
  }else{}
}
}
}}
}
}
   ?>
   
   
   
      
            
            
    
    <div class="card" style="padding:25px;">
    
            <form name="podcasts" method="POST" action="createpodcasts.php"  enctype="multipart/form-data">
                
                
                
             
                    
               
                    
                <label style="font-size:13px;"> Podcast Cover </label>    
                     <div class="form-group">
                         <input type="file" name="file" class="form-control" required>
                     </div>
              
                    
                        
                <label style="font-size:13px;"> Podcast Channel Name </label>
                <input type="text" class="form-control" style="font-size:13px;" placeholder="Input Podcast Channel Name" name="podcastchannelname" required> 
                
                
                
                   
              
                 
                 <br>
                
               
                
            <div class="form-group">
                
                <label style="font-size:13px;"> Description </label>
                      
           
<textarea name="description" class="form-control" rows="5" cols="10" required="required"></textarea>
                 <script>
                       var editor = CKEDITOR.replace( 'description', {
   
    filebrowserUploadUrl: 'ck_upload.php',
      filebrowserUploadMethod: "form"

                     
  
} );
                    
                </script>
                
                
            </div>
            
            <div class="form-group">
                <input type="submit" name="podcasts" class="btn btn" value="Create" style="background:blue; color:white;"> 
            </div>
                
                
            </form>
            
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