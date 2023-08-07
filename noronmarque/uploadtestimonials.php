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
           <script src="//cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
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
                  <i class="fa fa-comment"></i>
                </span> Upload Testimonials  </h3>
            
            <hr>
            
            
            <div class="card" style="padding:20px;">
                
                <h4> Testimonials </h4>
                
                
                <hr>
                
                
                
                  <?php
            if(isset($_POST['testimonials'])){
             
             
                $fullname= $_POST['fullname'];
              
                $comments = mysqli_real_escape_string($dbc, $_POST['comments']);
                
                
                     
                 $file = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $type=$_FILES['file']['type'];
$limit_size = 10000;
    $tmp_name = $_FILES['file']['tmp_name'];
    $fp      = fopen($tmp_name, 'r');

    $content = fread($fp, filesize($tmp_name));

    $content = addslashes($content);

    fclose($fp);

$allowed =  array('jpg', 'jpeg', 'png', 'svg', 'gif'); //allowed types
$ext = pathinfo($file, PATHINFO_EXTENSION);//extension checking

       
                
$check = "SELECT * FROM `testimonials` WHERE fullname ='".$fullname."'";

$rs = mysqli_query($dbc,$check);

$data = mysqli_fetch_array($rs, MYSQLI_NUM);

if($data[0] > 1) {

   
   ?>
    
<script>
   
    swal({
          text: "Error",
  title: "<?php echo $fullname; ?> already exists ",

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
  title: "Invalid format make sure you upload a clear jpg, png, jpeg format",

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
          text: " Size is less than 10mb ",
  title: "Invalid Size ",

  icon: "error",
  button: "Close",
});

</script>  

      
      <?php 
      
      
  
    
      } else{
          
           if($file){
    $location = "testimonials/$file";
    move_uploaded_file($tmp_name, $location);
          
       
    


  $insert = mysqli_query($dbc, "INSERT INTO `testimonials` VALUES (NULL, '$file', '$size' , '$content', '$type', '$location' , '$fullname',   '$comments',  now()) ");
  
  if($insert){
      
      ?>
      
        
<script>
   
    swal({
          text: " Success ",
  title: "Testimonial Added",

  icon: "success",
  button: "Close",
});

</script>  

      
      
      
      
      
      
      
      <?php
  }else{}
}
}
}
}
}
   ?>
                
                
                
                
                
                
                
                
                
            <form name="testimonials" method="POST" action="uploadtestimonials.php"  enctype="multipart/form-data">
                    
                    <div class="form-group">
                        
                        <label style="font-size:13px;"> Upload Picture (jpg, png, jpeg) - MAX_LIMIT (10mb) </label>
                        
                        <input type="file" name="file" class="form-control" required >
                    </div>
                    
                    
                    
                    
                    <div class="form-group">
                        
                                        
                <label style="font-size:13px;"> Client Fullname</label>
                <input type="text" class="form-control" name="fullname" required>
                
                        
                    </div>
                    
                    
                           
                
            <div class="form-group">
                
                <label style="font-size:13px;"> Comment(s) </label>
                      
           
<textarea name="comments" class="form-control" rows="5" cols="10" required="required"></textarea>
                 <script>
                       var editor = CKEDITOR.replace( 'comments', {
   
    filebrowserUploadUrl: 'ck_upload.php',
      filebrowserUploadMethod: "form"

                     
  
} );
                    
                </script>
                
                
            </div>
            
            <div class="form-group">
                <input type="submit" name="testimonials" class="btn btn" value="Upload Testimonial" style="background:blue; color:white;"> 
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