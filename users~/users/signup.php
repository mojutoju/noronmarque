<?php include('db/connect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
  <title>Create an Account - Noron Marque : A team of individuals with diverse specialties and backgrounds, working with clients to leverage on resources, develop capacities and redefine change.</title>
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
  <script src="/js/sweetalert.min.js"></script>
</head>

<body style="background-color:#131313;">
    
    
    
  

<div class="main">
    
    <div class="container">
    
    <center> 
    <a href="/index.php">
    <img src="/img/nmnew.png" class="img-fluid" width="300px" >  </a>  </center>
    
    <br>
    
    <div class="row">
        
        
        <div class="col-md-6 mb-2">
            
            <h3 style="color:white;"> Sign <strong style="color:blue;"> Up </strong></h3>
            <p style="color:white;"> Provide form with valid information details </p>
            <hr style="color:white; background-color:white;">
            
            
              <?php
            if(isset($_POST['signup'])){
                  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  
  $password = mysqli_real_escape_string($dbc, $_POST['password']);
  $password = md5($password);
  $confirmpassword = $_POST['cpassword'];
  $cpassword = mysqli_real_escape_string($dbc, $_POST['cpassword']);
  $phoneno =$_POST['phoneno'];
$state = $_POST['state'];
$status = $_POST['status'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];
$paymentstatus = "Not Paid";


               
$pic = mysqli_query($dbc, "SELECT * FROM users WHERE email = '$email'  ");
$row = mysqli_fetch_assoc($pic);
           $countrows = mysqli_num_rows($pic);
           if($countrows == 1){
      ?>
      
      
<script>
   
    swal({
          text: "Error",
  title: "Sorry! User Exists",

  icon: "error",
  button: "Close",
});
</script>  
      
      <?php

           }else{

           
           
           
if($pass != $cpass){
    
 ?>
 
 
<script>
   
    swal({
          text: "Error",
  title: "Password does not match ",

  icon: "error",
  button: "Close",
});
</script>  
 
 
 <?php
    
}else{


$sql = mysqli_query($dbc, "INSERT INTO `users` VALUES (NULL,'$fname', '$lname', '$email', '$password', '$cpassword', '$phoneno', '$state', '$status', '$paymentstatus' , now())  ");
if($sql){
    
    
    ?>
    
    
<script>
   
    swal({
          text: "Success",
  title: "You have successfully registered, access your dashboard. ",

  icon: "success",
  button: "Close",
});
</script>  


<?php

$to = $email; 
$from = 'noreply@noron-marque.com'; 
$fromName = 'Noron Marque Admin'; 
 
$subject = "Become a User"; 
 
$htmlContent = "
    <html> 
    <head> 
        <title>Welcome to Noron Marque </title> 
    </head> 
    <body> 

 
 <div class='container'>
   
 <img src='https://serving.photos.photobox.com/820358506a99678561f3452f9cbc225c918ebc76de10646d89a9b2cf0978c63753fb01a0.jpg' class='img-fluid img-thumbnail'>

<b> <h3 style='font-size:25px;'> Dear $fname, </h3> </b> 

<h4>Thank you for creating an account with us, kindly access your dashboard to complete your registration payment.
</h4>

<h5 style='font-size:20px;'> Kindly take note of the following details. </h5> 


<h3> Firstname : $fname </h3> 
<h3> Lastname : $lname </h3>
<h3> Email Address : $email </h3> 
<h3> Password : $cpassword </h3> 
<h3> Phone number : $phoneno</h3>
<h3> State : $state </h3> 



<img src='https://noron-marque.com/img/11.png' class='img-fluid' width='200'>

<h4> Thank you, <br>
Noron Marque
</h4>

<p style='letter-spacing:1.5px;'> For more information, visit our website <a style='letter-spacing:1.5px; font-weight:bold;' href='https://www.noron-marque.com'> Noron Marque </a>   </p>

</div>

    </body> 
    </html>"; 
 
// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 

 
// Send email 
if(mail($to, $subject, $htmlContent, $headers)){ 
 
 ?>
 
  
 <?php
 
 
 
}else{ 
  
  
  ?>
  
      
<script>
   
    swal({
          text: "Error",
  title: "Sorry! E-mail Delivery Failed",

  icon: "error",
  button: "Close",
});
</script>  
  
  <?php
}

}else{}
    
    
}}}

?>    
            <form name="signup" method="POST" action="signup.php">
                
                <div class="row">
                    
                    
                    <div class="col-md-6 mb-2">
                        <input type="text" class="form-control" name="fname" required placeholder="Firstname">
                    </div>
                    
                    
                      
                     <div class="col-md-6 mb-2">
                        <input type="text" class="form-control" name="lname" required placeholder="Lastname">
                    </div>
                    
                    
                      
    <div class="col-md-6 mb-2">
                        <input type="email" class="form-control" name="email" required placeholder="E-mail Address">
                    </div>
                    
                    
                      
                   <div class="col-md-6 mb-2">
                        <input type="password" class="form-control" name="password" required placeholder="Password">
                    </div>
                    
                      
            <div class="col-md-6 mb-2">
                        <input type="password" class="form-control" name="cpassword" required placeholder="Confirm Password">
                    </div>
                    
                    
                    <div class="col-md-6 mb-2">
                         <input type="text" class="form-control" name="phoneno" placeholder="Phone No e.g +234907574832"   onkeydown="return ( event.ctrlKey || event.altKey || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106)
                    || (event.keyCode==8) || (event.keyCode==9) 
                    || (event.keyCode>34 && event.keyCode<40) 
                    || (event.keyCode==46) )" required> 
                    </div>
                    
                    
                 
                    </div>
                    
                    
                     <select name="state" class="form-control" required>
                            <option value=""> - Select State - </option>
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
                        
                    <input type="hidden" name="status" value="approved">
                   
                    <br>
                    <input type="submit" class="btn btn" style="color:white; background:blue;" value="Create Account" name="signup">
                    <hr>
                    <p style="text-align:center; color:white;"> By clicking “Create account”, you agree to <strong style="color:blue;"> Noron Marque </strong>  <a href="agreement.php"> Terms & Conditions </a> and Privacy Policy</p>
                    
                    <hr style="color:white; background:white;">
                    
                    <p style="color:white; text-align:center;"> Have an account? <a href="login.php" style="color:blue;"> Log In </a></p>
                    
                </div>
                
                
                
                
                
                
            </form>
            
            
            <div class="col">
                
            </div>
            
            
            <div class="col-md-5 mb-2">
                
                
                
                
          <div class="card" style="height:64vh; background-image:url('/img/nmteam.jpg'); background-size:cover; background-repeat:no-repeat; border-radius:12px;">
              
              <div class="text" style="    position: absolute;
    right: 0;
    left: 0;
    bottom: 0;
    padding: 20px;">
                  Noron Marque
              </div>
          </div>
                
            </div>
            
        </div>
        
        
        
        
    </div>
    
</div>


    
</div>
      

  <script type="text/javascript">

    // Animations initialization
    
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
  
  
  </script>
</body>

</html>


