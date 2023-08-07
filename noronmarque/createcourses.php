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
                </span> Create Courses </h3>
            
            <hr>
            
            
               <div class="card" style="padding:20px;">
                   
                   
                   
                   <?php 
                   if(isset($_POST['createcourse'])){
                       $coursetitle = $_POST['coursetitle'];
                       $classname = $_POST['classname'];
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

$allowed =  array('doc', 'docx', 'pdf', 'pptx', 'ppt', 'txt'); //allowed types
$ext = pathinfo($file, PATHINFO_EXTENSION);//extension checking

             
             


   

       
                
$check = "SELECT * FROM `courses` WHERE coursetitle ='".$coursetitle."'";

$rs = mysqli_query($dbc,$check);

$data = mysqli_fetch_array($rs, MYSQLI_NUM);

if($data[0] > 1) {

   
                           
                           ?>
                           
                                       
<script>
   
    swal({
          text: "Error",
  title: "Already Exists ",

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
  title: "Invalid format make sure you upload a clear doc, docx, pptx, ppt, txt, pdf format ",

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
    $location = "courses/$file";
    move_uploaded_file($tmp_name, $location);
          
       
       $insert = mysqli_query($dbc, "INSERT INTO `courses` VALUES (NULL, '$coursetitle', '$file', '$size', '$content', '$type', '$location', '$classname', '$description', now()) ");
       
       if($insert){
           
       
                   ?>
          
          
               
         
<script>
   
    swal({
          text: " Success ",
  title: "<?php echo $coursetitle; ?> has been Uploaded ",

  icon: "success",
  button: "Close",
});

</script>  
          
          
          
          
          <?php 
       }else{}
           }}}}}
          
          ?>
            <form name="createcourse" method="POST" action="createcourses.php"  enctype="multipart/form-data">
                
                
     
                    
                    
                    
                    
                    
                    <div class="form-group">
                        
                <label style="font-size:13px;"> Course Title </label>
                <input type="text" class="form-control" style="font-size:13px;" name="coursetitle" required> 
                
                </div>
                
                 
                 
                 <br>
                
                
                  <div class="form-group">
                        
                <label style="font-size:13px;"> Upload Document </label>
                <input type="file" class="form-control" style="font-size:13px;" name="file" required> 
                
                </div>
                
                
                
                
                
              
               
                
                 
                 <br>
                      
                    <div class="form-group">
                        
                        <label> Class Name </label>
                        <select name="classname" class="form-control" required>
                            
                           <option value=""> - Select Class - </option>
                    
<?php

$users = mysqli_query($dbc,"SELECT * FROM `programmes` WHERE 1 ");
if(mysqli_num_rows($users) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($users)){
$classname = $rows['classname'];



    ?>
    
    <option value="<?php echo $classname; ?>">  <?php echo $classname; ?> </option>
    
    <?php $u++; }} ?> 
                            
                        </select>
                        
                        
                    </div>
                    
                
                <div class="form-group">
                    <label> Description </label>
                    <textarea class="form-control" name="description"></textarea>
                </div>
                
     
            <div class="form-group">
                <input type="submit" name="createcourse" class="btn btn" value="Create" style="background:blue; color:white;"> 
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