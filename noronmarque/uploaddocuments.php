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
                  <i class="fa fa-folder"></i>
                </span> Clients Documents Upload  </h3>
            
            <hr>
            
            
              <form name="services" method="POST" action="assignservices.php"  enctype="multipart/form-data">
                
                
                
                <div class="row">
                    
                    
                    <div class="col-md-6 mb-3">
                        
                                  <div class="form-group">
     
          	         <label style="font-size:14px;"> Upload Document </label>
	
    		<input type="file" name="file" class="form-control" placeholder='Choose a file...' required="" />			
           

	
            



                </div> 
                        
                    </div>
                    
                    
                     
                <div class="col-md-6 mb-3">
                    
                        
                <label style="font-size:13px;"> Name of Document </label>
                <input type="text" class="form-control" style="font-size:13px;" placeholder="Document Title" name="docname" required> 
                
                <br>
                
                
                            
                <label style="font-size:13px;"> Assigned Users </label>
                <select name="users" class="form-control" required>
                    <option value=""> - Select User - </option>
                    
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
                </div>
                
                </div>
                
               <div class="form-group">
                <input type="submit" name="services" class="btn btn" value="Upload" style="background:blue; color:white;"> 
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






 
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}




    </script>
          
    <!-- End custom js for this page -->
  </body>
</html>  