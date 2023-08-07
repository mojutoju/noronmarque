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
                  <i class="fa fa-mortar-board"></i>
                </span> Edit Programme(s) </h3>
            
            <hr>
            
            
            <?php 
            if(isset($_GET['program_id'])){
                
                
                $id = $_GET['program_id'];
             
              
                
                
                
$assign = mysqli_query($dbc,"SELECT * FROM `programmes` WHERE `program_id` = '$id'  ");
if(mysqli_num_rows($assign) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($assign)){
                
                
          $classname = $rows['classname'];
          $file = $rows['file'];
          $setdate = $rows['setdate'];
          $amount = $rows['amount'];
          $briefintro = $rows['briefintro'];
          $description = $rows['description'];
          
                
                
                
                
                
            
            
            ?>
            
            
            
            <?php 
            if(isset($_POST['programmes'])){
                
                
                
                $classname = $_POST['classname'];
                
                
                $setdate = $_POST['setdate'];
                $amount = $_POST['amount'];
                $briefintro = mysqli_real_escape_string($dbc,$_POST['briefintro']);
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

$allowed =  array('jpg', 'jpeg', 'png', 'webmp', 'gif'); //allowed types
$ext = pathinfo($file, PATHINFO_EXTENSION);//extension checking

             
                
                
            
if(!in_array($ext,$allowed)){

   
   ?>
   
   
   
    
<script>
   
    swal({
          text: "Error",
  title: "Invalid format make sure you upload a clear jpg, png, jpeg ",

  icon: "error",
  button: "Close",
});


</script>  


<?php

}
else
{

  if($_FILES['file']['size'] <= $limit_size)
  {
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




  }else{

  



    if($file){
    $location = "programmes/$file";
    move_uploaded_file($tmp_name, $location);

           
        $update = mysqli_query($dbc, "UPDATE `programmes` SET `classname` = '$classname', `file` = '$file', `size` = '$size', `content` = '$content', `type` = '$type', `path` = '$location', `setdate` = '$setdate',  `briefintro` = '$briefintro' , `amount` = '$amount', `description` = '$description' WHERE `program_id` = '$id'  ");
        
        
        if($update){
            
            ?>
            
              
    
<script>
   
    swal({
          text: " Success",
  title: " <?php echo $classname; ?> has been Updated ",

  icon: "success",
  button: "Close",
});

</script>  

   
            
            
            
            <?php
        }else{ echo mysqli_error($dbc);}
             
             
    }
    
  }
}
}
          
            ?>
            
            
            
            
            
            
            <div class="card" style="padding:20px;">
                
             
                
           <form name="programmes" method="POST" action="editprogramme.php?program_id=<?php echo $id; ?>"  enctype="multipart/form-data">
                   
                   
                   
                   
                   <div class="form-group">
                       
                       <label> Name of Class </label>
                       <input type="text" class="form-control" name="classname" value ="<?php echo $classname; ?>" >
                       
                       
                   </div>
                   
                   
                      
             <div class="form-group">
            <label> Upload Picture</label>        
               
               
               
                    <input type="file" class="form-control" name="file" required>
                    </div>
                    
                   
                   <div class="form-group">
                       
                       <label> Date </label>
                       <input type="date" class="form-control" name="setdate" value="<?php echo $setdate; ?>">
                       
                       
                   </div>
                   
                   
                   
                   
                   <div class="form-group">
                       
                       <label> Amount </label>
                       <input type="text" name="amount" class="form-control" value="<?php echo $amount; ?>" onkeydown="return ( event.ctrlKey || event.altKey || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106)
                    || (event.keyCode==8) || (event.keyCode==9) 
                    || (event.keyCode>34 && event.keyCode<40) 
                    || (event.keyCode==46) )"  >
                   </div>
                   
                   
                   
                     
                     <div class="form-group">
                
                <label style="font-size:13px;"> Brief Intro (Max words : 500) </label>
                      
           
<textarea name="briefintro" class="form-control" rows="5" cols="10" maxlength="500"><?php echo $briefintro; ?></textarea>
                
                
            </div>
            
                   
                     <div class="form-group">
                
                <label style="font-size:13px;"> Description </label>
                      
           
<textarea name="description" class="form-control" rows="5" cols="10"><?php echo htmlspecialchars_decode($description);?></textarea>
                 <script>
                       var editor = CKEDITOR.replace( 'description', {
   
    filebrowserUploadUrl: 'ck_upload.php',
      filebrowserUploadMethod: "form"

                     
  
} );
                    
                </script>
                
                
            </div>
            
            
                 
                 <br>
                
     
            <div class="form-group">
                <input type="submit" name="programmes" class="btn btn" value="Edit" style="background:blue; color:white;"> 
            </div>
                
                
            
                   
               </form> 
                
                
                
                
                
                
                
                
                
                
                
            </div>
            
            
            
            
            <?php 
            
            $u++; }
}
            }
            
            ?>
            
            
            
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