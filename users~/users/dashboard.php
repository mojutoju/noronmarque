<?php include('db/connect.php');
session_start();



?>
<!DOCTYPE html>
<html lang="en">
  <head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Noron Marque - A team of individuals with diverse specialties and backgrounds, working with clients to leverage on resources, develop capacities and redefine change.</title>
  <link rel="icon" href="/img/99.png" type="image/png" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
     <link href='https://fonts.googleapis.com/css?family=Helvetica' rel='stylesheet'>
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .pro-banner .pro-banner-bg {
    background: linear-gradient(230deg,#297FC8, #297FC8);
}




body{
    font-family: 'Helvetica' ;
}



.card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 148px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
  
  .my-custom-scrollbar {
position: relative;
height: 200px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
overflow-y : hidden;
overflow: scroll;
}

table::-webkit-scrollbar{
    overflow:hidden;
}
    </style>
    
  <script src="/js/sweetalert.min.js"></script>
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
   
   
   
   <?php
   if(isset($_GET['email']) && isset($_GET['servicename']) && isset($_GET['service_id']) && isset($_GET['subservice_id']) && isset($_GET['subservicename'])){
       
       $email = $_SESSION['login'];
       $servicename = $_GET['servicename'];
       $subservicename = $_GET['subservicename'];
       $serviceid = $_GET['service_id'];
       $subserviceid = $_GET['subservice_id'];
       $amount = "Waiting for Admin";
       $status = "Pending";
       $paymentstatus = "Not Paid";
       
       $insert = mysqli_query($dbc, "INSERT INTO `requestcart` VALUES (NULL, '$email', '$servicename', '$serviceid' , '$subserviceid', '$subservicename', '$amount' , '$status', '$paymentstatus' , now()) ");
       
       
       if($insert){
           
           ?>
           
              
<script>
   
    swal({
          text: "Success",
  title: "<?php echo $subservicename; ?> has been added to cart  ",

  icon: "success",
  button: "Close",
});



setTimeout(function () {
   window.location.href = "dashboard.php"; //will redirect to your blog page (an ex: blog.html)
}, 2000); //will call the function after 2 secs.

</script>  
  
           
           
           
           
           
           
           
           <?php
       }else{   }
   }
   
   ?>
   
   
   
   
   <?php include('navbar.php'); ?>
  
        
        
        <?php if($paymentstatus == "Paid"){
            ?>
            
            
            	<div class="pro-banner" id="pro-banner">
						<div class="card pro-banner-bg border-0 rounded-0">
							<div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
								<p class="mb-0 text-white font-weight-medium mb-2 mb-lg-0 mb-xl-0">Congratulations, you are now a fully registered member.</p>
								<div class="d-flex">
									<a href="viewprofile.php"  class="btn btn-danger mr-2">View Profile</a>
									<a href="opt.php?action=logout"  class="btn btn-outline-light mr-2 bg-white text-dark">Sign Out</a>
									<button id="bannerClose" class="btn border-0 p-0">
										<i class="mdi mdi-close text-white"></i>
									</button>
								</div>
						</div>
					</div>
				</div>
            
            <?php
            
        }else{}
        ?>
        
   
       <!-- partial -->
<div class="container-fluid page-body-wrapper">
			<div class="main-panel">
				<div class="content-wrapper">
				
					<div class="row">
						<div class="col-sm-6 mb-4 mb-xl-0">
							<div class="d-lg-flex align-items-center">
								<div>
									<h3 class="text-dark font-weight-bold mb-2">Hi, <?php echo $fname; ?> <?php echo $lname; ?> </h3>
									<h6 class="font-weight-normal mb-2">Today is <?php echo date("D-d-M-Y" ); ?> </h6>
								</div>
							
							</div>
						</div>
						<div class="col-sm-6">
							<div class="d-flex align-items-center justify-content-md-end">
								<div class="pr-1 mb-3 mb-xl-0">
										<a href="feedback.php"  class="btn btn-outline-inverse-info btn-icon-text">
											Feedback
											<i class="mdi mdi-message-outline btn-icon-append"></i>                          
										</a>
								</div>
								
								
							</div>
						</div>
					</div>
				
				  <hr>
   
   
   <div class="row">
       
       
       
       
       
       
         
        <?php
        if($paymentstatus == "Not Paid"){
        
        ?>
       
       
       <div class="col-md-4 mb-2">
           
           <div class="card" style="padding:13px;">
               
               <h3> Account Verification</h3>
               <hr>
               
               <p> Kindly verify your account, make payment to secure your account. </p>
               
            	 <?php
							        $txref = $id."-".$email; //this is a unique reference for each payment
							    ?>
									 <form>
                  <script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
                    <button type="button" class="btn btn-danger"  onClick="payWithRave()">Make Payment</button>
                      <script>
                                    const API_publicKey = "FLWPUBK-a4391faa9700e4656530808079ccbbeb-X";
                                
                                    function payWithRave() {
                                        var x = getpaidSetup({
                                            PBFPubKey: API_publicKey,
                                            customer_email: "<?php echo $email; ?>",
                                            customer_firstname: "<?php echo $fname; ?>",
                                            customer_lastname: "<?php echo $lname; ?>",
                                            amount: 500,
                                            currency: "NGN",
                                            txref: "<?php echo $txref; ?>",
                                            onclose: function() {},
                                            callback: function(response) {
                                                var txref = response.tx.txRef; // collect txRef returned and pass to a server page to complete status check.
                                                console.log("This is the response returned after a charge", response);
                                                if (
                                                    response.tx.chargeResponseCode == "00" ||
                                                    response.tx.chargeResponseCode == "0"
                                                ) {
                                                    window.location.href = "success.php?id=<?php echo $id."&email=".$email; ?>";     // redirect to a success page
                                                } else {
                                                    // redirect to a failure page.
                                                }
                                
                                                x.close(); // use this to close the modal immediately after payment.
                                            }
                                        });
                                    }
                                </script>
                                <!-- Rave Pay ends here -->
                  </form>
            
           </div>
           
       </div>
       
       
       <?php
        }else if($paymentstatus == "Paid"){
       
       ?>
       
        <div class="col-md-3 mb-2">
           
           <div class="card" style="padding:13px;">
               
               <h3 style="font-weight:800; color:black;"> Account Invoice</h3>
               <hr>
               
               <p> Your account payment invoice </p>
               
               <a class="btn btn-success" href="accountinvoice.php">   Download</a>
           </div>
           
       </div>
    
       
       <?php }else{} ?>
       
          
           
<?php

if(isset($_POST['images'])){
    $email = $_SESSION["login"];
    $file = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $type=$_FILES['file']['type'];
$limit_size = 2000;
    $tmp_name = $_FILES['file']['tmp_name'];
    $fp      = fopen($tmp_name, 'r');

    $content = fread($fp, filesize($tmp_name));

    $content = addslashes($content);

    fclose($fp);

$allowed =  array('jpg','png','svg', 'jpeg');//allowed types
$ext = pathinfo($file, PATHINFO_EXTENSION);//extension checking


$check = "SELECT * FROM `profileimages` WHERE email ='".$email."'";

$rs = mysqli_query($dbc,$check);

$data = mysqli_fetch_array($rs, MYSQLI_NUM);

if($data[0] > 1) {

   
   ?>
    
<script>
   
    swal({
          text: "Error",
  title: "You have an existing image ",

  icon: "error",
  button: "Close",
});

</script>  



<?php


} else{
if(!in_array($ext,$allowed) )
{

   
   ?>
   
   
   
    
<script>
   
    swal({
          text: "Error",
  title: "Invalid format make sure you upload a clear jpg, png format. ",

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
          text: "Image Size is less than 2mb ",
  title: "Invalid Size ",

  icon: "error",
  button: "Close",
});

</script>  

   
   
   
   
   <?php




  }else{

  



    if($file){
    $location = "profileimages/$file";
    move_uploaded_file($tmp_name, $location);
    $query = mysqli_query($dbc,"INSERT INTO `profileimages` (`imageid`, `email`, `file`, `size`, `content`  , `type` , `path`, `date`) VALUES (NULL, '".$email."' ,'".$file."',  '".$size."', '".$content."'  ,'".$type."' ,  '".$location."', now() )");

  if($query){
      
      ?>
      
     
<script>
   
    swal({
          text: "Success",
  title: "Profile Image Uploaded  ",

  icon: "success",
  button: "Close",
});

setTimeout(function () {
   window.location.href = "dashboard.php"; //will redirect to your blog page (an ex: blog.html)
}, 2000); //will call the function after 2 secs.
</script>  
  
      <?php
   
  } else{
    
  }


} }


}}
}




?>

       
       <div class="col-md-3 mb-2">
           
            <div class="card-counter primary">
        <i class="fa fa-handshake-o"></i>
        <span class="count-numbers">12</span>
        <span class="count-name">Requests </span>
      </div>
      
       </div>
       
        <div class="col-md-3 mb-2">
           
            <div class="card-counter success">
        <i class="fa fa-sticky-note"></i>
        <span class="count-numbers">12</span>
        <span class="count-name">Total Invoice</span>
      </div>
      
       </div>
       
       
        <div class="col-md-3 mb-2">
           
            <div class="card-counter info">
        <i class="fa fa-sticky-note"></i>
        <span class="count-numbers">12</span>
        <span class="count-name">Pending Invoice</span>
      </div>
      
       </div>
       
       
  
       <div class="col-md-3 mb-2">
            <div class="card-counter success">
        <i class="fa fa-sticky-note"></i>
        <span class="count-numbers">12</span>
        <span class="count-name">Completed Invoice</span>
      </div>
      
      </div>
      
    
      
    
         <div class="col-md-3 mb-2">
            <div class="card-counter danger">
        <i class="fa fa-sticky-note"></i>
        <span class="count-numbers">12</span>
        <span class="count-name">Unpaid Invoice</span>
      </div>
       </div>
      
      
   
        <div class="col-md-3 mb-2">
          
<?php
if(isset($_GET['imageid']) ){
$imageid = $_GET['imageid'];


$delete = mysqli_query($dbc, "DELETE FROM `profileimages` WHERE imageid = '$imageid' ");

if($delete){
  
  
 ?>
  
  
     
<script>
   
    swal({
          text: "Success",
  title: "Profile Image Deleted  ",

  icon: "success",
  button: "Close",
});

</script>  
  
 
 <?php
   
  echo "<script>window.location.replace('dashboard.php');</script>";


}else{
  
}

}

?>


      <div class="card" style="padding:15px">
          
          <h3 style="font-weight:800; color:black;"> Upload Profile Image</h3>
          
           <form action="dashboard.php"  method="post" name="images" enctype="multipart/form-data">
              
          
                  <input type="file" name="file" class="form-control" required="" accept="image/*" >
             
              
      
              
              <input type="submit" class="btn btn" style="background:blue; color:white;" value="Upload" name="images">
              
                                      
        <?php
            
                        $pic = mysqli_query($dbc, "SELECT * FROM profileimages WHERE email='".$_SESSION['login']."' ");
     $row = mysqli_fetch_assoc($pic);
     
     
     $file = $row['file'];
         $imageid = $row['imageid'];           
             
?>





         
                                            <?php
                $countrows = mysqli_num_rows($pic);
                if($countrows == 1){
      
                  ?>
                    
                   <a href="dashboard.php?imageid=<?php echo $imageid; ?>" class="btn btn-danger"> Delete Profile Picture </a>
                   
                    <?php }else{ ?>
                    
                
                    
                    
                    <?php } ?>
              
          </form>
          
      </div>
      </div>
      



      
       </div>
       
       
        
   <br>
   
    
       
        <div class="container">    	

    
           <div class="card" style="padding:20px;">
               
               <h3 style="text-align:center; color:black;"> What services do you require ? </h3>
              
              
              <hr>
              
                        
       
<?php

$user = mysqli_query($dbc,"SELECT * FROM `services` WHERE 1 ");
if(mysqli_num_rows($user) > 0){
    $uk = 1;
 while($rows = mysqli_fetch_assoc($user)){
$servicename = $rows['servicename'];



    ?>
    
    
   
                        
   
 <h3 style="font-weight:800;"> <?php echo $servicename; ?> </h3>
    <hr>
    <div class="row">
             
<?php

$users = mysqli_query($dbc,"SELECT * FROM `subservices` WHERE 1 ");
if(mysqli_num_rows($users) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($users)){
$servicenames = $rows['servicename'];
$subservicename = $rows['subservicename'];
$subid = $rows['subservice_id'];

    ?>
    
    
    <?php 
    if($servicename == $servicenames){
    ?>
    
  
        <div class="col-md-3 mb-3">

  <div class="card" style="border-radius: 11px; padding: 20px;">
            
            <p style="font-size:16px;">   <?php echo $subservicename; ?>  </p>
       
                                              
        <?php
        
    
        
        
        $emailid = $_SESSION['login'];
        
        
            
                        $cart = mysqli_query($dbc, "SELECT * FROM `requestcart` WHERE  `subservice_id` = '$subid' AND `email` = '$emailid' ");
     $row = mysqli_fetch_assoc($cart);
     
  
             
             
             
             
             
             
             
?>







         
                                            <?php
              
                 $countrow = mysqli_num_rows($cart);
             if($countrow == 1){
      
                  ?>
                    
                                     
            <a href="dashboard.php?email=<?php echo $email; ?>&servicename=<?php echo $servicename; ?>&service_id=<?php echo $id; ?>&subservice_id=<?php echo $subid; ?>&subservicename=<?php echo $subservicename; ?>" class="btn btn-success"> Add to Cart </a>
                   
                    <?php }else{ ?>
                    
                     
            <a href="dashboard.php?email=<?php echo $email; ?>&servicename=<?php echo $servicename; ?>&service_id=<?php echo $id; ?>&subservice_id=<?php echo $subid; ?>&subservicename=<?php echo $subservicename; ?>" class="btn btn-success"> Add to Cart </a>
                    
                    
                    <?php } ?>
            
            
            
            
            
            
        
   </div> </div>
    
    <?php }else{}
    
    
    
    $u++; }}
    ?>
    </div>
    
    
  

    
    <?php
    $uk++; }}
    ?>
    
		        
		

            
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
           </div>
           
    
       
 
       
       
       
       
       

   
       
   </div>
   
   
   </div>
  
  
   
   
   
   
   
				</div>
		<!-- page-body-wrapper ends -->
    </div>
    
    
    </div>
   
   
 <script>
        
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
 </script>
   <!-- End custom js for this page-->
  </body>
</html>