<?php include('/db/connect.php'); 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
  <title>Account Verification - Noron Marque : A team of individuals with diverse specialties and backgrounds, working with clients to leverage on resources, develop capacities and redefine change.</title>
  <link rel="icon" href="/img/99.png" type="image/png" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
     <link href='https://fonts.googleapis.com/css?family=Helvetica' rel='stylesheet'>
  <!-- Bootstrap core CSS -->
  <!-- Bootstrap core CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="/css/style.min.css" rel="stylesheet">
  <style type="text/css">
  
  
  body{
      font-family: 'Helvetica';
  }
  
  
  .navbar-nav .nav-link {
    margin-right: 14px;
    margin-left: 14px;
}


.navbar-nav .nav-item  .nav-link :hover{
    
border-bottom:3px solid white;
}

.navbar{
    -webkit-box-shadow: -4px 11px 22px -3px rgba(0,0,0,0.28);
-moz-box-shadow: -4px 11px 22px -3px rgba(0,0,0,0.28);
box-shadow: -4px 11px 22px -3px rgba(0,0,0,0.28);
}




.navbar li a:hover {

border-bottom : 2px solid dodgerblue;
}
      
      
      .masthead {
  height: 50vh;
  min-height: 500px;
  background-image: url('/img/bgblue.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

      .vertical{
	height: 100%;
	position: absolute;
	border-left: 2px solid white;
      }
      
      
      .main{
          max-width: 1000px;
    padding: 50px 10px;
    display: flex;
    flex-flow: column nowrap;
    justify-content: center;
    align-content: center;
    align-items: center;
    margin: auto;
      }
  </style>
  <script src="js/sweetalert.min.js"></script>
</head>

<body style="background-color:#0c1e22;">
    
    
    
  

<div class="main">
    
    <div class="container">
    
   <center> 
    <a href="dashboard.php">
    <img src="/img/nmnew.png" class="img-fluid" width="300px" >  </a>  </center>
    
    <br>
    
   
  
<?php

if($_SESSION["login"] != null){
    $email = $_SESSION["login"];

}
else{
 echo " <script> window.location.href = 'login.php'; </script>";
}
   ?>

 
  

<body>
    
 
<div class="d-flex" id="wrapper">
    
   
      
<?php
$select = mysqli_query($dbc,"SELECT * FROM `users` WHERE email = '".$_SESSION['login']."'  ");
if(mysqli_num_rows($select) > 0){
    $j = 1;
 while($rows = mysqli_fetch_assoc($select)){

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
      
      

<?php
if(isset($_GET['id']) && isset($_GET['email'])){
    
$email = $_GET['email'];
$id = $_GET['id'];
    $prev_url=$_SERVER['HTTP_REFERER'];     //this gets the url of the previous page where this page redirects from

    $cart_url = "https://noron-marque.com/users/dashboard.php";
    $cart_url_www = "https://www.noron-marque.com/users/dashboard.php";

if($prev_url != $cart_url && $prev_url != $cart_url_www){

?>

                  
<script>
   
    swal({
          text: "Error",
  title: "This is a bad attempt. ",

  icon: "error",
  button: "Close",
});

</script>  
  


<?php
}
else{
    if(!isset($_GET['id']) || !isset($_GET['email'])){
      ?>
      
      
                  
<script>
   
    swal({
          text: "Error",
  title: "This is a bad attempt. ",

  icon: "error",
  button: "Close",
});

</script>  
  

      
      
      <?php
    }
    else{
        $ipaddress = $_SERVER['REMOTE_ADDR'];   //this is the ip address of the customer's device
        $id = $_GET['id'];
        $email = $_GET['email'];
             if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile') || strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'android')) {
               $device = "Mobile";
            }
            else{
                $device = "Tablet/PC";
            }
    
        $item = explode(',', $id);
?>
      
      
        
        
        
        <?php
$select = mysqli_query($dbc,"SELECT * FROM `users` WHERE id = '$id' AND email = '$email'   ");
if(mysqli_num_rows($select) > 0){
    $l = 1;
 while($rows = mysqli_fetch_assoc($select)){

  $idz = $rows['id'];
  $fname = $rows['fname'];
  $lname = $rows['lname'];
  $emailz = $rows['email'];
$cpassword = $rows['cpassword'];
$status = $rows['status'];
$phoneno = $rows['phoneno'];
     $state = $rows['state'];
$date = $rows['date'];
    ?>
      
      

      
      
   <?php
   
   
  $update = mysqli_query($dbc, "UPDATE `users` SET `paymentstatus`= 'Paid'  WHERE id = '$idz' AND email = '$emailz'");
              
if($update)


{

 


                    ?>
  
        
<script>
   
    swal({
          text: "Success",
  title: "Payment Successful and Payment Status Updated  ",

  icon: "success",
  button: "Close",
});

</script>  
  
  
  
  
  
  <?php 
}else{
    
}
      ?>
      
      
      
      
    
      <?php $l++; }} ?>
      
      <?php 
    }}}else{ 
        ?>
        
        <center>
            
            <h2 style="font-weight:800; font-size:50px; color:white;"> 404 Error </h2>
            

            
            <p style="color:white;"> This page is not accessible , follow the normal procedure. <br> Thank you.</p>
            
            <a href="dashboard.php" class="btn btn-sm" style="background-color:blue ; border-radius:20px; color:white;"> Go back to dashboard</a>
        </center>
        
        
        <?php }
      ?>
          
    
    
    </div>


    
</div>
      
      
      <?php $j++; }} ?>

  <script type="text/javascript">

    // Animations initialization
    new WOW().init();
      
  
  </script>
</body>

</html>

