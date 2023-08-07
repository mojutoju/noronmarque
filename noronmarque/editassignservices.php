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
                </span> Edit Services </h3>
            
            <hr>
            
            
            <?php 
            if(isset($_GET['service_aid'])){
                
                $id = $_GET['service_aid'];
                
                
$users = mysqli_query($dbc,"SELECT * FROM `assignservices` WHERE `service_aid` = '$id' ");
if(mysqli_num_rows($users) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($users)){

  $sid = $rows['service_aid'];
  $servicename = $rows['servicename'];
  $amount = $rows['amount'];
                $file = $rows['file'];
            $description = $rows['description'];
            $users = $rows['users'];
            
            ?>
            
            
            
                 
            <?php
            if(isset($_POST['services'])){
             $users = $_POST['users'];
                $servicename = $_POST['servicename'];
                $amount = $_POST['amount'];
                $description = mysqli_real_escape_string($dbc, $_POST['description']);
                
                
$update = mysqli_query($dbc, "UPDATE `assignservices` SET `servicename`='$servicename',`amount`='$amount',`description`='$description',  `users` = '$users' ,`date`='now()' WHERE `service_aid` = '$id' ");

if($update){
    ?>
    
    
<script>
   
    swal({
          text: "Success ",
  title: "<?php echo $servicename; ?> has been Updated ",

  icon: "success",
  button: "Close",
});

</script>  

    
    
    <?php
}else{}

}

?>
            
            
            
            
            
            
            
            
            <form name="services" method="POST" action="editassignservices.php?service_aid=<?php echo $sid; ?>"  enctype="multipart/form-data">
                
                
                
                    
               
                        
                <label style="font-size:13px;"> Name of Service </label>
                <select name="servicename" class="form-control" required="required">
                
                    <option value="">  - Select Service : Sub Service -   </option>
                    
                    <option value="<?php echo $servicename; ?>" selected="selected"> <?php echo $servicename; ?></option>
                    
                    
                    
                    
                    
<?php

$user = mysqli_query($dbc,"SELECT * FROM `services` WHERE 1 ");
if(mysqli_num_rows($user) > 0){
    $uk = 1;
 while($rows = mysqli_fetch_assoc($user)){
$servicename = $rows['servicename'];



    ?>
    
    
    <option value="" style="font-weight:800;"> <?php echo $servicename; ?></option>
    
    
    
    
                      
                    
<?php

$userz = mysqli_query($dbc,"SELECT * FROM `subservices` WHERE 1 ");
if(mysqli_num_rows($userz) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($userz)){
$servicenames = $rows['servicename'];
$subservicename = $rows['subservicename'];


    ?>
    
    
    <?php 
    if($servicename == $servicenames){
    ?>
    
    <option value="<?php echo $servicename; ?> : <?php echo $subservicename; ?>">  <?php echo $servicename; ?> : <?php echo $subservicename; ?> </option>
    
    <?php }else{
        ?>
        
        <option value=""> - No Sub Services Found - </option>
        <?php
        
    }
    
    ?>
    
    
    <?php $u++; }} ?>
    
    
    
    
    
    
    
    
    <?php $uk++; }} ?>
                    
  
                    
                </select>
                
                <br>
                
                
                
                
                               
                <label style="font-size:13px;"> Assigned Users </label>
                <select name="users" class="form-control" required>
                    <option value=""> - Select User - </option>
                    

    <option value="<?php echo $users; ?>"> Selected - <?php echo $users; ?>  </option>
    
    
                     
<?php

$users = mysqli_query($dbc,"SELECT * FROM `users` WHERE 1 ");
if(mysqli_num_rows($users) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($users)){

  $id = $rows['id'];
  $fname = $rows['fname'];
  $lname = $rows['lname'];
  $email= $rows['email'];
$cpassword = $rows['cpassword'];
$status = $rows['status'];
$phoneno = $rows['phoneno'];
     $state = $rows['state'];
$date = $rows['date'];



    ?>
    
    <option value="<?php echo $email; ?>"> <?php echo $lname; ?> <?php echo $fname; ?> </option>
               
                 <?php $u++; }} ?>
               
                </select>
                
                
                
                
                
                
                
                
                
                <br>
                
                   <label style="font-size:13px;"> Amount </label>
                <input type="text" class="form-control" style="font-size:13px;" value="<?php echo $amount; ?>" name="amount"  onkeydown="return ( event.ctrlKey || event.altKey || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106)
                    || (event.keyCode==8) || (event.keyCode==9) 
                    || (event.keyCode>34 && event.keyCode<40) 
                    || (event.keyCode==46) )"  > 
                    
                 
                    
                
             
                 
                    
                    
                    
   
                
     
                
               
                
            <div class="form-group">
                
                <label style="font-size:13px;"> Description </label>
                <textarea class="form-control" style="font-size:13px;"  name="description" cols="30"><?php echo $description; ?></textarea>
                
            </div>
            
            <div class="form-group">
                <input type="submit" name="services" class="btn btn" value="Update" style="background:blue; color:white;"> 
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