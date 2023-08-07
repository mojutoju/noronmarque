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
      <script src="//cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
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
              <i class="	fa fa-file-video-o"></i>
                </span> Upload Url Videos </h3>
            
            <hr>
            
            
            <div class="card" style="padding:20px;">
        
            
            
                 <?php
            if(isset($_POST['urlvideos'])){
             
             $videochannel = $_POST['videochannel'];
                $subtitle = $_POST['subtitle'];
              
                $description = mysqli_real_escape_string($dbc, $_POST['description']);
                $hostname = $_POST['hostname'];
                $videostatus = $_POST['videostatus'];
                     $link = $_POST['link'];
                     
                     
                      $url_parsed_arr = parse_url($link);
   if ($url_parsed_arr['host'] == "www.youtube.com" && $url_parsed_arr['path'] == "/watch" && substr($url_parsed_arr['query'], 0, 2) == "v=" && substr($url_parsed_arr['query'], 2) != "") {
      
      
      ?>
      
  
<script>
   
    swal({
          text: "Success",
  title: "Valid Link ",

  icon: "success",
  button: "Close",
});

</script>  
        
        <?php
        
       $insert = mysqli_query($dbc, "INSERT INTO `urlvideos` VALUES (NULL, '$videochannel', '$subtitle', '$hostname', '$link' , '$videostatus', '$description', now()) "); 
        
        if($insert){
            
            
            
            ?>
            
          
          
          
<script>
   
    swal({
          text: " Success ",
  title: "<?php echo $subtitle ?> has been uploaded  ",

  icon: "success",
  button: "Close",
});

</script>    
            
            
            <?php
        }else{}
        
   } else {
       ?>
       
        
<script>
   
    swal({
          text: "Error",
  title: "Invalid Link ",

  icon: "error",
  button: "Close",
});

</script>  
       
       
       <?php
   }

            }
                     
                     ?>
            
            
            
            
            
            
            
            <form name="urlvideos" method="POST" action="uploadurlvideos.php">
                
                
                    
                  
                    
                    
                    
                    <div class="form-group">
                        
                                        
                <label style="font-size:13px;"> Video Channel </label>
                <select name="videochannel" class="form-control" required>
                    <option value=""> - Select Channel - </option>
                    
<?php

$users = mysqli_query($dbc,"SELECT * FROM `videochannel` WHERE 1 ");
if(mysqli_num_rows($users) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($users)){

$videochannelname = $rows['videochannelname'];




    ?>
    
    <option value="<?php echo $videochannelname; ?>"> <?php echo $videochannelname; ?> </option>
    
    <?php $u++; }} ?>
                    
                </select>
                
                        
                    </div>
                    
                    
                  <div class="form-group">
                        
                        <label style="font-size:13px;"> Title </label>
                        
                        <input type="text" name="subtitle" class="form-control" required placeholder="Input the Video Title"  >
                    </div>
                    
                    
                    
                    
                          <div class="form-group">
                        
                        <label style="font-size:13px;"> Host Name(s)</label>
                        
                        <input type="text" name="hostname" class="form-control" required placeholder="Input the Host Name e.g John Doe , Ben Doe " >
                    </div>
                    
                    
                    
                          <div class="form-group">
                        
                        <label style="font-size:13px;"> Url Link</label>
                        
                        <input type="url" name="link" class="form-control" required placeholder="Input Youtube Url link  " >
                    </div>
                    
                    
                        <div class="form-group">
                        
                        <label style="font-size:13px;"> Status </label>
                        
                       <select name="videostatus" class="form-control" required>
                           <option value=""> - Select Video Status - </option>
                           <option value="Public"> Public</option>
                           <option value="Private">Private</option>
                           
                       </select>
                    </div>
                    
                    
                           
                
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
                <input type="submit" name="urlvideos" class="btn btn" value="Upload Video" style="background:blue; color:white;"> 
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