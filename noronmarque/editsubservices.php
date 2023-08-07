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
         
            
             <h3 class="page-title">
                <span class="page-title-icon  text-white mr-2" style="background:blue;">
                  <i class="fa fa-handshake-o"></i>
                </span> Edit Sub Services </h3>
            
            <hr>
            
            
              <?php 
            if(isset($_GET['subservice_id'])){
                
                $id = $_GET['subservice_id'];
                
                
$users = mysqli_query($dbc,"SELECT * FROM `subservices` WHERE `subservice_id` = '$id' ");
if(mysqli_num_rows($users) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($users)){

  $ids = $rows['subservice_id'];
  $servicename = $rows['servicename'];
$subservicename = $rows['subservicename'];
            $description = $rows['description'];
            
            ?>
            
            
                   
            <?php
            if(isset($_POST['subservices'])){
             
                $servicename = $_POST['servicename'];
                $subservicename = $_POST['subservicename'];
            
                $description = mysqli_real_escape_string($dbc, $_POST['description']);
                
            
$update = mysqli_query($dbc, "UPDATE `subservices` SET `servicename`='$servicename',  `subservicename` = '$subservicename' , `description`='$description',`date`='now()' WHERE `subservice_id` = '$id' ");

if($update){
    ?>
    
    
<script>
   
    swal({
          text: "Success ",
  title: "<?php echo $subservicename; ?> has been Updated ",

  icon: "success",
  button: "Close",
});

</script>  

    
    
    <?php
}else{}

}

?>
            
                     
            <form name="subservices" method="POST" action="editsubservices.php?subservice_id=<?php echo $ids; ?>">
                
                
                                   
                <label style="font-size:13px;"> Select Service Type </label>
                <select name="servicename" class="form-control">
                    <option value=""> - Select Service - </option>
                    <option selected="selected" value="<?php echo $servicename; ?>"><?php echo $servicename; ?></option>
                    
<?php

$users = mysqli_query($dbc,"SELECT * FROM `services` WHERE 1 ");
if(mysqli_num_rows($users) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($users)){
$servicename = $rows['servicename'];



    ?>
    
    <option value="<?php echo $servicename; ?>">  <?php echo $servicename; ?> </option>
    
    <?php $u++; }} ?>
                    
                </select>
                    
                     
              
                    <br>
                        
                <label style="font-size:13px;"> Name of Sub Service </label>
                <input type="text" class="form-control" style="font-size:13px;"  name="subservicename" value="<?php echo $subservicename; ?>"> 
                
                
                
                   
              
                 
                 <br>
                
               
                
            <div class="form-group">
                
                <label style="font-size:13px;"> Description </label>
                      
           
<textarea name="description" class="form-control" rows="5" cols="10"><?php echo htmlspecialchars_decode($description); ?></textarea>
                 <script>
                       var editor = CKEDITOR.replace( 'description', {
   
    filebrowserUploadUrl: 'ck_upload.php',
      filebrowserUploadMethod: "form"

                     
  
} );
                    
                </script>
                
                
            </div>
            
            <div class="form-group">
                <input type="submit" name="subservices" class="btn btn" value="Update" style="background:blue; color:white;"> 
            </div>
                
                
                
                
                
            </form>
            
            
            
            
            <?php $u++; }}} ?>
             
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
            