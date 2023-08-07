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

     <link rel="icon" href="img/9.png" type="image/png"/>
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
                  <i class="fa fa-briefcase"></i>
                </span> Create Vacancy </h3>
            
            <hr>
            
            
            <?php
            if(isset($_POST['career'])){
             
              $jobtitle = $_POST['jobtitle'];
              $dept = $_POST['dept'];
              
              
                $description = mysqli_real_escape_string($dbc, $_POST['description']);
                
                $location = $_POST['location'];
                $qualifications = mysqli_real_escape_string($dbc, $_POST['qualifications']);
                $jobtype = $_POST['jobtype'];
                
                
                
                
$check = "SELECT * FROM `careers` WHERE jobtitle ='".$jobtitle."'";

$rs = mysqli_query($dbc,$check);

$data = mysqli_fetch_array($rs, MYSQLI_NUM);

if($data[0] > 1) {

   
   ?>
    
<script>
   
    swal({
          text: "Error",
  title: "<?php echo $jobtitle; ?> already exists ",

  icon: "error",
  button: "Close",
});

</script>  


                
                
                <?php
}else{
                $insert = mysqli_query($dbc, "INSERT INTO `careers` VALUES (NULL,  '$jobtitle', '$dept' , '$description', '$location'  ,  '$qualifications'  ,  '$jobtype' ,now()) ");
                
                ?>
                
               
        <?php 
        if($insert){
        ?>
               
<script>
   
    swal({
          text: "Success",
  title: "<?php echo $jobtitle; ?> is Added ",

  icon: "success",
  button: "Close",
});


</script> 
                
            <?php }else{} ?>    
                
                
                <?php
                
            }}
            
            ?>
            
    
            <form name="career" method="POST" action="createvacancy.php"  enctype="multipart/form-data">
                
                
                
             
                    
        <div class="form-group">
                        
                <label style="font-size:13px;"> Position Title </label>
                <input type="text" class="form-control" style="font-size:13px;" placeholder="Input Job Position" name="jobtitle" required> 
                
                
                
                   
              </div>
                 
            
                         
        <div class="form-group">
                        
                <label style="font-size:13px;"> Department </label>
                <input type="text" class="form-control" style="font-size:13px;" placeholder="Input Department" name="dept" required> 
                
                
                
                   
              </div>
                 
            
                
                  
               
                
            <div class="form-group">
                
                <label style="font-size:13px;"> Description </label>
                      
           
<textarea name="description" class="form-control" rows="5" cols="10" required="required"></textarea>
                
                
            </div>
            
            
            
            
            <div class="form-group">
                
                <select name="location" class="form-control" required>
                    
                    
                            <option value=""> - Select Location - </option>
                                   <option value="Abuja FCT">Abuja FCT</option>
              <option value="Abia">Abia</option>
              <option value="Adamawa">Adamawa</option>
              <option value="Akwa Ibom">Akwa Ibom</option>
              <option value="Anambra">Anambra</option>
              <option value="Bauchi">Bauchi</option>
              <option value="Bayelsa">Bayelsa</option>
              <option value="Benue">Benue</option>
              <option value="Borno">Borno</option>
              <option value="Cross River">Cross River</option>
              <option value="Delta">Delta</option>
              <option value="Ebonyi">Ebonyi</option>
              <option value="Edo">Edo</option>
              <option value="Ekiti">Ekiti</option>
              <option value="Enugu">Enugu</option>
              <option value="Gombe">Gombe</option>
              <option value="Imo">Imo</option>
              <option value="Jigawa">Jigawa</option>
              <option value="Kaduna">Kaduna</option>
              <option value="Kano">Kano</option>
              <option value="Katsina">Katsina</option>
              <option value="Kebbi">Kebbi</option>
              <option value="Kogi">Kogi</option>
              <option value="Kwara">Kwara</option>
              <option value="Lagos">Lagos</option>
              <option value="Nassarawa">Nassarawa</option>
              <option value="Niger">Niger</option>
              <option value="Ogun">Ogun</option>
              <option value="Ondo">Ondo</option>
              <option value="Osun">Osun</option>
              <option value="Oyo">Oyo</option>
              <option value="Plateau">Plateau</option>
              <option value="Rivers">Rivers</option>
              <option value="Sokoto">Sokoto</option>
              <option value="Taraba">Taraba</option>
              <option value="Yobe">Yobe</option>
              <option value="Zamfara">Zamfara</option>
     <option value="Outside Nigeria">Outside Nigeria</option>
                    
                    
                    
                </select>
            </div>
            
            
            <div class="form-group">
                    <label style="font-size:13px;"> What are the requirements / qualifications ? </label>
               
            <textarea name="qualifications" class="form-control" rows="5" cols="10" required="required"></textarea>
                
            </div>
            
            
            
            <div class="form-group">
                    <label style="font-size:13px;"> Job Type </label>
               
            <select name="jobtype" class="form-control" required>
                <option value=""> -Select Job Type - </option>
                <option value="Remote Job"> Remote Job</option>
                <option value="Not a Remote Job"> Not a Remote Job </option>
            </select>
                
            </div>
            
            
            
            
            <div class="form-group">
                <input type="submit" name="career" class="btn btn" value="Create" style="background:blue; color:white;"> 
            </div>
                
                
            </form>
            
            
            
            
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