<?php
include('db/connect.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Noron Marque - A team of individuals with diverse specialties and backgrounds, working with clients to leverage on resources, develop capacities and redefine change.</title>
  <!-- Font Awesome -->
     <link rel="icon" href="/img/9.png" type="image/png"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link href='https://fonts.googleapis.com/css?family=Helvetica' rel='stylesheet'>
  <!-- Bootstrap core CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Material Design Bootstrap -->
  <link href="/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="/css/style.min.css" rel="stylesheet">

  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #929FBA !important;
      }
    }
    
    body{
         font-family: 'Helvetica';
    }
    
    
    /*//////////////////////////////////////////////////////////////////
[ utility ]*/

/*==================================================================
[ Text ]*/
.txt1 {

  font-size: 13px;
  line-height: 1.4;
  color: #555555;
}

.txt2 {

  font-size: 13px;
  line-height: 1.4;
  color: #999999;
}


/*==================================================================
[ Size ]*/
.size1 {
  width: 355px;
  max-width: 100%;
}

.size2 {
  width: calc(100% - 43px);
}

/*==================================================================
[ Background ]*/
.bg1 {background: #3b5998;}
.bg2 {background: #1da1f2;}
.bg3 {background: #cd201f;}


/*//////////////////////////////////////////////////////////////////
[ login ]*/
.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-login100 {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  background: #f2f2f2;
}


.wrap-login100 {
  width: 100%;
  background: #fff;
  overflow: hidden;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  flex-direction: row-reverse;

}

/*==================================================================
[ login more ]*/
.login100-more {
  width: calc(100% - 560px);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  position: relative;
  z-index: 1;
}

.login100-more::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: rgba(0,0,0,0.1);
}



/*==================================================================
[ Form ]*/

.login100-form {
  width: 560px;
  min-height: 100vh;
  display: block;
  background-color: white;
  padding: 173px 55px 55px 55px;
}

.login100-form-title {
  width: 100%;
  display: block;

  font-size: 30px;
  color: #333333;
  line-height: 1.2;
  text-align: center;
}



/*------------------------------------------------------------------
[ Input ]*/

.wrap-input100 {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  align-items: flex-end;
  width: 100%;
  height: 80px;
  position: relative;
 
  border-radius: 10px;
  margin-bottom: 10px;
}

.label-input100 {

  font-size: 18px;
  color: #999999;
  line-height: 1.2;

  display: block;
  position: absolute;
  pointer-events: none;
  width: 100%;
  padding-left: 24px;
  left: 0;
  top: 30px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.input100 {
  display: block;
  width: 100%;
  background: transparent;

  font-size: 18px;
  color: #555555;
  line-height: 1.2;
  padding: 0 26px;
}

input.input100 {
  height: 100%;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

/*---------------------------------------------*/



.eff-focus-selection {
  visibility: visible;
  opacity: 1;

  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
}

.input100:focus {
  height: 48px;
}

.input100:focus + .focus-input100 + .label-input100 {
  top: 14px;
  font-size: 13px;
}

.has-val {
  height: 48px !important;
}

.has-val + .focus-input100 + .label-input100 {
  top: 14px;
  font-size: 13px;
}

/*==================================================================
[ Restyle Checkbox ]*/

.input-checkbox100 {
  display: none;
}

.label-checkbox100 {
  font-family: Poppins-Regular;
  font-size: 13px;
  color: #999999;
  line-height: 1.4;

  display: block;
  position: relative;
  padding-left: 26px;
  cursor: pointer;
}

.label-checkbox100::before {
  content: "\f00c";
  font-family: FontAwesome;
  font-size: 13px;
  color: transparent;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  width: 18px;
  height: 18px;
  border-radius: 2px;
  background: #fff;
  border: 1px solid #6675df;
  left: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
}

.input-checkbox100:checked + .label-checkbox100::before {
  color: #6675df;
}


/*------------------------------------------------------------------
[ Button ]*/
.container-login100-form-btn {
  width: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.login100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  width: 100%;
  height: 50px;
  border-radius: 10px;
  background: #6675df;


  font-size: 12px;
  color: #fff;
  line-height: 1.2;
  text-transform: uppercase;
  letter-spacing: 1px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.login100-form-btn:hover {
  background: #333333;
}



/*------------------------------------------------------------------
[ Responsive ]*/

@media (max-width: 992px) {
  .login100-form {
    width: 50%;
    padding-left: 30px;
    padding-right: 30px;
  }

  .login100-more {
    width: 50%;
  }
}

@media (max-width: 768px) {
  .login100-form {
    width: 100%;
  }

  .login100-more {
    display: none;
  }
}

@media (max-width: 576px) {
  .login100-form {
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 70px;
  }
}


/*------------------------------------------------------------------
[ Alert validate ]*/

.validate-input {
  position: relative;
}

.alert-validate::before {
  content: attr(data-validate);
  position: absolute;
  z-index: 100;
  max-width: 70%;
  background-color: #fff;
  border: 1px solid #c80000;
  border-radius: 2px;
  padding: 4px 25px 4px 10px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 12px;
  pointer-events: none;

  font-family: Poppins-Regular;
  color: #c80000;
  font-size: 13px;
  line-height: 1.4;
  text-align: left;

  visibility: hidden;
  opacity: 0;

  -webkit-transition: opacity 0.4s;
  -o-transition: opacity 0.4s;
  -moz-transition: opacity 0.4s;
  transition: opacity 0.4s;
}

.alert-validate::after {
  content: "\f12a";
  font-family: FontAwesome;
  display: block;
  position: absolute;
  z-index: 110;
  color: #c80000;
  font-size: 16px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 18px;
}

.alert-validate:hover:before {
  visibility: visible;
  opacity: 1;
}

@media (max-width: 992px) {
  .alert-validate::before {
    visibility: visible;
    opacity: 1;
  }
}



/*==================================================================
[ Social ]*/
.login100-form-social-item {
  width: 36px;
  height: 36px;
  font-size: 18px;
  color: #fff;
  border-radius: 50%;
}

.login100-form-social-item:hover {
  background: #333333;
  color: #fff;
}

  </style>
  <script src="js/sweetalert.min.js"> </script>

</head>

<body>


<?php
if(isset($_POST['login'])){
 
  $emails = $_POST['email'];
  
  $password = mysqli_real_escape_string($dbc, $_POST['password']);
  $password = md5($password);

  $sql = mysqli_query($dbc, "SELECT * FROM `admin` WHERE email = '".$emails."' AND password = '".$password."'");
  $num = mysqli_fetch_array($sql);

  if($num>0) {
 
    $_SESSION['login'] = $emails;
      $_SESSION['id'] = $num['id'];
     


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


<?php }} ?>
  
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="login.php" method="POST" name="login"  >
				    
				    
				    
				    <center>
				    
		<img src="img/11.png" class="img-fluid" width="280px">
				    
				    </center>
				    <br><br>
				    
					<span class="login100-form-title p-b-40">
						Login to continue as Admin
					</span>
					
					<hr>
					
					
					<div class="wrap-input100 validate-input" >
					    <label style="font-size:13px;"> Username </label>
						<input class="form-control" type="text" name="email" required="" style="font-size:13px;" placeholder="Input Username">
					
				
					</div>
					
					
					<div class="wrap-input100 validate-input">
					      <label style="font-size:13px;"> Password </label>
						<input class="form-control" type="password" name="password" style="font-size:13px;" required="" placeholder="Input Password">
					
					
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
					
						<div>
						
						</div>
					</div>
			

					<div class="container-login100-form-btn">
					<input type="submit" class="btn btn-primary" value="Login" style="width:100%;" name="login">
					</div>
					
		
				</form>

				<div class="login100-more" style="background-image: url('img/bg.jpg');">
				    
				  
				  <div class="bg-text wow fadeIn" style="padding:90px; padding-bottom:50px;">
				      
				      <br><br><br><br><br><br>
				      
				      <img src="img/nm2.png" class="img-fluid" width="200px">
				    
				      
				      <h1 class="wow fadeInUp" style="color:white; font-weight:bold;"  data-wow-delay="0.5s"> Welcome to Noron Marque </h1>
				      
				      <hr class="hr-light wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-name: fadeInUp; animation-delay: 0.3s;">
				      
				      
				      <p class="wow fadeInUp" data-wow-delay="0.5s"  style="color:white;"> Sign in to access your Admin Dashboard.</p>
				  </div>
				  
				  
				</div>
			</div>
		</div>
	</div>
	
	


 

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="/js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();













 
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}

  </script>
</body>

</html>
