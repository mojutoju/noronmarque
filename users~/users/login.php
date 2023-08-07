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
  <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
  <title>Login to Account - Noron Marque : A team of individuals with diverse specialties and backgrounds, working with clients to leverage on resources, develop capacities and redefine change.</title>
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
   max-width: 500px;
    border-radius: 6px;
   
    margin: 50px auto;
  
      }
      
      .main-container{
              position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
   
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    overflow: auto;
    min-height: 100vh;
    box-sizing: border-box;
      }
      
      a:hover{
          color:blue;
      }
      
    
  </style>
  <script src="/js/sweetalert.min.js"></script>
</head>

<body style="background-color:#131313;">
    
    
    
  <div class="main-container">

<div class="main">
    
    <div class="container">
    
    <center> 
    <a href="/index.php">
    <img src="/img/nmnew.png" class="img-fluid" width="300px" >  </a>  </center>
    
    <br>
      <h3 style="color:white; text-align:center;"> Sign <strong style="color:blue;"> In </strong></h3>
            <p style="color:white; text-align:center;"> Login to access dashboard </p>
            <hr style="color:white; background-color:white;">
            
       
       
     

<?php
if(isset($_POST['login'])){
 
  $email = $_POST['email'];
  
  $password = mysqli_real_escape_string($dbc, $_POST['password']);
  $password = md5($password);

  $sql = mysqli_query($dbc, "SELECT * FROM `users` WHERE email = '".$email."' AND password = '".$password."' AND status = 'approved'");
  $num = mysqli_fetch_array($sql);

  if($num>0) {
 
    $_SESSION['login'] = $email;
      $_SESSION['id'] = $num['id'];
      $_SESSION['fname'] = $num['fname'];


?>

    
<script>
   
    swal({
          text: "Success",
  title: "Login Successful ",

  icon: "success",
  button: "Close",
});

 window.location.href = 'dashboard.php';
</script>  


<?php


  }else if (isset($_POST['login'])){

    $sql = mysqli_query($dbc, "SELECT * FROM `users` WHERE email = '".$email."' AND password = '".$password."' AND status = 'unapproved'  ");
    $num = mysqli_fetch_array($sql);
  


    if($num>0) {


?>
    
<script>
   
    swal({
          text: "Error",
  title: "Account Disabled ",

  icon: "error",
  button: "Close",
});
</script>  


<?php

  
  }else{

  
  
  ?>
  
      
<script>
   
    swal({
          text: "Error",
  title: "Incorrect Password ",

  icon: "error",
  button: "Close",
});
</script>  

  
  
  <?php
  }


  }
}
?>

                    
                  <form name="login" method="POST" action="login.php">
        
        <div class="form-group">
            
            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
            
        </div>
        
        
        <div class="form-group">
            
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            
        </div>
        
        
                    <input type="submit" class="btn btn" style="color:white; background:blue;     width: 100%;
    height: 48px;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.57;
    letter-spacing: -.11px;" value="Login" name="login"> &nbsp; &nbsp;
     
    </form>
                  
                  <p style="color:white; text-align:center;"> Don't have an account ? <a href="signup.php" style="color:blue; text-align:center;"> Click Here</a>  </p>
      
      <center>   <a  href="forgotpassword.php" style="color:white; text-align:center;"> Forgot Password?</a>
      
                    
         </center>      
    

        
        
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


