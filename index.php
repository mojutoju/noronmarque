
<?php include('db/connect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Noron Marque - A team of individuals with diverse specialties and backgrounds, working with clients to leverage on resources, develop capacities and redefine change.</title>
  <link rel="icon" href="img/99.png" type="image/png" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
     <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Gotham' rel='stylesheet'>
  <!-- Bootstrap core CSS -->
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css">
  
  
  body{
      font-family: 'Montserrat';
     
  }
  
  
        
        html,
      body,
      header,
      .carousel {
        height: 80vh;
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
                  background: white;
              }
          }
.view,body,html{height:100%}@media (max-width:740px){.full-page-intro{height:1000px}}.carousel{height:80%}.carousel .carousel-inner,.carousel .carousel-inner .active,.carousel .carousel-inner .carousel-item{height:100%}@media (max-width:776px){.carousel{height:100%}}.navbar{background-color:rgba(0,0,0,.3)}.page-footer,.top-nav-collapse{background-color:#1C2331}@media only screen and (max-width:768px){.navbar{background-color:#1C2331}}


#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: skyblue;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: white;
  color:black;
}
  
     .card-product .img-wrap {
    border-radius: 3px 3px 0 0;
    overflow: hidden;
    position: relative;
    height: 220px;
    text-align: center;
}


       .card-product .info-wrap {
    overflow: hidden;
    padding: 15px;
    border-top: 1px solid #eee;
}


.masthead {
  height: 70vh;
  min-height: 495px;
background-image:url('img/bg2.svg');
background-size:cover;
  background-position: center;
  background-repeat: no-repeat;
}



.mastheads {
  height: 20vh;
  min-height: 260px;
background-image:url('img/careerz.jpg');
background-size:cover;
  background-position: 30% 20% ;
  background-repeat: no-repeat;
}



#program:hover {
     background: #0F52BA;
   color: white; 
}

/* Bottom left text */
.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
}

    
    
    .card {
	margin: 0 auto;
	border: none;
}
.card .carousel-item {
	min-height: 190px;
}
.card .carousel-caption {
	padding: 0;
	right: 15px;
	left: 15px;
	top: 15px;
	color: #3d3d3d;
	border: 1px solid #ccc;
	min-height:175px;
	padding: 15px;
}
.card .carousel-caption .col-sm-3 {
	display: flex;
	align-items: center;
}
.card .carousel-caption .col-sm-9 {
	text-align: left;
}
.card .carousel-control-prev, .card .carousel-control-next {
	color: #3d3d3d !important;
	opacity: 1 !important;
}
.carousel-control-prev-icon, .carousel-control-next-icon {
	background-image: none;
	color: #fff;
	font-size: 14px;
	background-color: #cd3a54;
	height: 32px;
	line-height: 32px;
	width: 32px;
}
.carousel-control-prev-icon:hover, .carousel-control-next-icon:hover {
	opacity: 0.85;
}
.carousel-control-prev {
	left: 40%;
	top: 110%;
}
.carousel-control-next {
	right: 40%;
	top: 110%;
}
.midline {
	width: 60px;
	border-top: 1px solid #d43025;
}
.carousel-caption h2 {
	font-size: 14px;
}
.carousel-caption h2 span {
	color: #cd3a54;
}
 @media (min-width: 320px) and (max-width: 575px) {
.carousel-caption {
	position: relative;
}
.card .carousel-caption {
	left: 0;
	top: 0;
	margin-bottom: 15px;
}
.card .carousel-caption img {
	margin: 0 auto;
}
.carousel-control-prev {
	left: 35%;
	top: 105%;
}
.carousel-control-next {
	right: 35%;
	top: 105%;
}
.card .carousel-caption h3 {
	margin-top: 0;
	font-size: 16px;
	font-weight: 700;
}
}
@media (min-width: 576px) and (max-width: 767px) {
.carousel-caption {
	position: relative;
}
.card .carousel-caption {
	left: 0;
	top: 0;
	margin-bottom: 15px;
}
.card .carousel-caption img {
	margin: 0 auto;
}
.card .carousel-caption h3, .card .carousel-caption small {
	text-align: center;
}
.carousel-control-prev {
	left: 35%;
	top: 105%;
}
.carousel-control-next {
	right: 35%;
	top: 105%;
}
}
@media (min-width: 767px) and (max-width: 991px) {
.card .carousel-caption h3 {
	margin-top: 0;
	font-size: 16px;
	font-weight: 700;
}
}


.options {
    min-width: 300px;
    height: 300px;
    background: white;
    margin: 6px;
    border-radius: 10px;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
    position: relative;
}

.items {
    display: flex;
    overflow-x: auto;
}
      
      .items::-webkit-scrollbar{
          display:none;
      }
      
      
      
      
      
      
      
  </style>
  <script src="js/sweetalert.min.js"></script>
</head>

<body>


<?php include('navbar.php'); ?>


   
<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
    
    <br><br><br><br><br><br>
    
    
    
  <div class="container h-90" >

    <div class="row h-100 align-items-center">
          
      <div class="col-md-8 ">
            
        <h5 class="font-weight-800 animate__animated animate__fadeInLeft " style="font-weight:800; font-size:15px; color:white; letter-spacing: 3px;"> WELCOME TO NORON MARQUE </h5>
        <hr style="background:white; color:white;">
        <h5 class="animate__animated animate__fadeInRight" style=" color:white; font-weight:800; line-height:29px;">   A team of individuals with diverse specialties and backgrounds,  working with clients to leverage on resources, develop capacities and redefine change. </h5>
  
 
  <div>
       <a href="aboutus.php" class="btn btn" style="background:blue; color: white;"> What We Do </a>
            <a href="users/signup.php" class="btn btn" style="background:white; color:black;" > Create an Account  </a>
  </div>
  
   

      
      
      
      
    </div>
  </div>
  
  </div>
  
</header>  
    


<br>
<br>

<BR>
    
    
    
    
    
      
<section class="hiro-section" >
              
           

          <div class="container">
              
  
  <br>
  
        
             <div class="row ">
          
  
      <div class="col-md-6 mb-3 ">
          

     
        <h2 class="animate__animated animate__fadeInRight" style=" color:black; font-weight:800; line-height:38px;">  Sometimes ideas seem so complex and so grandiose that you don't know where to begin. <br>  </h2>
  
 
            <br>
              
              <p class="animate__animated animate__slideInDown" style=" text-align:left;"  >
                That is  where we come in. Tell us all about it and we will see if we can help.
              </p>
   
  
  	<a href="# " class="btn btn program btn-sm  " id="program" style="border-radius:20px; background:white; color:#0F52BA; font-weight:bold;" data-toggle="modal" data-target="#exampleModal"> Start Your Project </a>
  
  </div>
  
  
  
  
  
  
    
    <div class="col-md-6 mb-3">
        
        
         
         
             <div class="card animate__animated animate__slideInRight" style="border-radius:9px; border:none; ">
               
               <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="img-fluid">
            
         
           </div>
           
           
        
           
        
              
      
      
    </div>
  
  
  
  
  
  
  
  
  </div>
  
  
  </div>
  
  </section>

  <br><br>
  

  
    
        
  <br><br>

  
  
  
  

  
  <div class="container  animate__animated animate__slideInDown">
      
      
      
      <h3 style="font-weight:bold; text-align:center; color:#0f52ba; "> TAKE A PEEK</h3>
      
       <center>  <hr class="black accent-4 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> </center>
      
      <div class="row">
          
          <div class="col-md-4 mb-3">
              
              <div class="card" style="padding:20px;">
                  
                  <h3 style="text-align:center; "> <i class="fa fa-book"></i> </h3>
                  <h6 style="text-align:center; font-weight:800;"> E-books Templates </h6>
                    <center>  <hr class="black accent-4 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> </center>
                  
              </div>
              
          </div>
          
          
            <div class="col-md-4 mb-3">
              
              <div class="card" style="padding:20px; background: #0f52ba; color:white;">
                  
                  <h3 style="text-align:center; "> <i class="fa fa-file"></i> </h3>
                  <h6 style="text-align:center; font-weight:800;"> Resume Templates </h6>
                    <center>  <hr class="white accent-4 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> </center>
                  
              </div>
              
          </div>
          
          
            <div class="col-md-4 mb-3">
              
              <div class="card" style="padding:20px;">
                  
                  <h3 style="text-align:center; "> <i class="	fa fa-file-excel-o"></i> </h3>
                  <h6 style="text-align:center; font-weight:800;"> Work Sheets </h6>
                    <center>  <hr class="black accent-4 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> </center>
                  
              </div>
              
          </div>
          
          
          
          
      </div>
      
  </div>
  <br>

      
  

  
  
  <br>
  

<section class="hiro-section" >
              
              

          <div class="container">
              
         
         <div class="row">
             
             <div class="col-md-6 mb-2 animate__animated animate__fadeInLeft ">
               
               
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-fluid" src="img/ebooks.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="img/podcast.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="img/videos.png" alt="Third slide">
    </div>
    
     <div class="carousel-item">
      <img class="img-fluid" src="img/toolkit.png" alt="Fourth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  
                 
                 
                 
                 
             </div>
             
             
             
             
             
             <div class="col-md-6 mb-2 animate__animated animate__fadeInRight ">
                 
                 
                
          
    <h5 class="font-weight-800 " style="font-weight:800; font-size:15px; color:blue; letter-spacing: 3px;"> RESOURCES </h5>
     
    <hr class="black accent-4 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
    
    
 
        <h2 class="animate__animated animate__fadeInRight" style=" color:black; font-weight:800; line-height:38px;">  At Noron Marque, we setup resourceful tools to help develop our clients business strategic skills.  </h2>
     
    
       <br>
              
              <p class="animate__animated animate__slideInDown" style=" text-align:left;"  >
                Our industry specialists, elite examination and business points of view are included in various output medias across the world.
              </p>
   
      
    <div>
               	<a href="ebooks.php" class="btn btn program btn-sm  " id="program" style="border-radius:20px; background:white; color:#0F52BA; font-weight:bold;"> <i class="fa fa-book"></i> Ebooks </a>	
               	       	<a href="podcasts.php" class="btn btn program btn-sm  " id="program" style="border-radius:20px; background:white; color:#0F52BA; font-weight:bold;"> <i class="fa fa-podcast"></i> Podcasts </a>	
               	       	       	<a href="videos.php" class="btn btn program btn-sm  " id="program" style="border-radius:20px; background:white; color:#0F52BA; font-weight:bold;"> <i class="fa fa-file-video-o"></i> Videos </a>	
               	       	       	       	<a href="toolkits.php" class="btn btn program btn-sm  " id="program" style="border-radius:20px; background:white; color:#0F52BA; font-weight:bold;"> <i class="fa fa-wrench"></i> ToolKits </a>	
    </div>
                
    
    
                 
             </div>
             
             
             
             
             
             
             
             
            
         </div>   
            
          
    
    
    
    </div>
    
    </section>
  
  
  
  
  
  <br>
  
  
  <?php
  
  if(isset($_POST['project'])){
      
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $phoneno = $_POST['phoneno'];
      $consultdate = $_POST['consultdate'];
      $consulttime = $_POST['consulttime'];
      $subjects =  $_POST['subject'];
      $title = $_POST['subject'];
      $projecttype = $_POST['projecttype'];
      $description = $_POST['description'];
      $expectedresults = $_POST['expectedresults'];
      $expecteddelivery = $_POST['expecteddelivery'];
      $additionalinfo = $_POST['additionalinfo'];
      
      $convertdate = date('Y-m-d', strtotime($consultdate));
      $converttime = date('h:i:s a', strtotime($consulttime));
      
      	if(empty($additionalinfo)){
	   $newinfo = "None";
	}else{
	     $newinfo = $additionalinfo;
	}

      
      $arr=json_encode(array(
	"phone"=>"2349030639334",
	"body"=>" Hello Team, 
	My name is $fname $lname, 
	
	Here are the details to my project , 
	Project Title : $subjects
	Project Type : $projecttype
	Description :	$description
	Scheduled Date :  $convertdate
	Scheduled Time : $converttime
	Expected Results :	$expectedresults
	Expected Delivery : $expecteddelivery Weeks
	Additional Info : $newinfo
	
	For more information , 
	You can contact me via
	E-mail Address : $email
	Phone Number : $phoneno
	
	Thank You,
	Regards.
	"
	
));
$url="https://eu187.chat-api.com/instance217962/sendMessage?token=j61omd3bw4xfoyjl";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$arr);
curl_setopt($ch,CURLOPT_HTTPHEADER,array(
	'Content-type:application/json',
	'Content-length:'.strlen($arr)
));
$result=curl_exec($ch);
curl_close($ch);

             
            
$to = $email; 
$from = 'noreply@noron-marque.com'; 
$fromName = 'Noron Marque'; 
 
$subject = $subjects; 
 
$htmlContent = "
    <html> 
    <head> 
        <title>Welcome to Noron Marque </title> 
    </head> 
    <body> 

 
 
 
   <center class='wrapper' data-link-color='#1188E6' data-body-style='font-size:14px; font-family:arial,helvetica,sans-serif; color:#000000; background-color:#FFFFFF;'>
        <div class='webkit'>
        <img src='https://noron-marque.com/img/11.png' class='img-fluid' width='180px'>
          <table cellpadding='0' cellspacing='0' border='0' width='100%' class='wrapper' bgcolor='#FFFFFF'>
            <tr>
              <td valign='top' bgcolor='#FFFFFF' width='100%'>
                <table width='100%' role='content-container' class='outer' align='center' cellpadding='0' cellspacing='0' border='0'>
                  <tr>
                    <td width='100%'>
                      <table width='100%' cellpadding='0' cellspacing='0' border='0'>
                          <td>
                            <!--[if mso]>
    <center>
    <table><tr><td width='600'>
  <![endif]-->
                                    <table width='100%' cellpadding='0' cellspacing='0' border='0' style='width:100%; max-width:600px;' align='center'>
                                      <tr>
                                        <td role='modules-container' style='padding:0px 0px 0px 0px; color:#000000; text-align:left;' bgcolor='#FFFFFF' width='100%' align='left'>
                                        <table class='module preheader preheader-hide' role='module' data-type='preheader' border='0' cellpadding='0' cellspacing='0' width='100%' style='display: none !important; mso-hide: all; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;'>
    <tr>
      <td role='module-content'>
        <p>Approval Mail </p>
      </td>
    </tr>
  </table>
  <table class='wrapper' role='module' data-type='image' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed;' data-muid='d336fa32-54f5-462b-9966-4e0ec832f283'>
    <tbody>
      <tr>
        <td style='font-size:6px; line-height:10px; padding:0px 0px 0px 0px;' valign='top' align='center'>
          <img class='max-width' border='0' style='display:block; color:#000000; text-decoration:none; font-family:Helvetica, arial, sans-serif; font-size:16px; max-width:100% !important; width:100%; height:auto !important;' width='600' alt='' data-proportionally-constrained='true' data-responsive='true' src='http://cdn.mcauto-images-production.sendgrid.net/54463ce5197c9a46/30f2bd8f-6392-47c5-893c-5f387bed4a3b/700x250.jpg'>
        </td>
      </tr>
    </tbody>
  </table>
  <table class='module' role='module' data-type='text' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed;' data-muid='dfe36967-dffc-494e-bc37-37bd8331ffcd'>
    <tbody>
      <tr>
        <td style='padding:18px 0px 18px 0px; line-height:22px; text-align:inherit;' height='100%' valign='top' bgcolor='' role='module-content'><div><div style='font-family: inherit;'><span style='font-size: 24px'><strong> Hello, </strong></span></div>
<div style='font-family: inherit; text-align: start'><br></div>
<div style='font-family: inherit; margin-left: 0px'><span style='box-sizing: border-box; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: 14px; vertical-align: baseline; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image-source: initial; border-image-slice: initial; border-image-width: initial; border-image-outset: initial; border-image-repeat: initial; color: #000000; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial'> My name is </span><span style='box-sizing: border-box; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: 14px; vertical-align: baseline; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image-source: initial; border-image-slice: initial; border-image-width: initial; border-image-outset: initial; border-image-repeat: initial; color: #000000; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial'> <strong style='color:green;'>  $lname $fname. </strong></span></div>
<div style='font-family: inherit; text-align: start'><br></div>
<div style='font-family: inherit; margin-left: 0px'><span style='box-sizing: border-box; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: 14px; vertical-align: baseline; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image-source: initial; border-image-slice: initial; border-image-width: initial; border-image-outset: initial; border-image-repeat: initial; color: #000000; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial'> Here are the details to my Project , <br>
	Project Title : $subjects
	Project Type : $projecttype
	Description :	$description
	Scheduled Date :  $convertdate
	Scheduled Time : $converttime
	Expected Results :	$expectedresults
	Expected Delivery : $expecteddelivery Weeks
	Additional Info : $newinfo
	
		For more information , 
	You can contact me via
	E-mail Address : $email
	Phone Number : $phoneno
	
	Thank You,
	Regards.
</span></div>
<div style='font-family: inherit; text-align: start'><br></div>

      </tr>
    </tbody>
  </table></td>
                                      </tr>
                                    </table>
                                    <!--[if mso]>
                                  </td>
                                </tr>
                              </table>
                            </center>
                            <![endif]-->
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </div>
      </center>
 
 
 
 
 
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
      
      
       
<script>
   
    swal({
          text: "Success",
  title: "Project Submitted, we will get back to you soon ",

  icon: "success",
  button: "Close",
});

</script>
      
  <?php    
      
      
      
  }else{
     ?>
     
     
         
<script>
   
    swal({
          text: "Error",
  title: "Error ",

  icon: "error",
  button: "Close",
});

</script>
      
      
      
      
      
      
      <?php
  }}
  
  
  ?>
    
  
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-weight:800;"> Start Your Project</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   
           <form name="project" method="POST" action="index.php" >
               
              
              <div class="row">
                  
                 <div class="col-md-6 mb-3">
                     
                       <div class="form-group">
                 
                 <input type="text" class="form-control" name="fname" placeholder="First Name" required="">
             </div>  
               
               
                     
                     
                     
                 </div> 
                  
                  
                  
                    <div class="col-md-6 mb-3">
                     
                       <div class="form-group">
                 
                 <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
             </div>  
               
               
                     
                     
                     
                 </div> 
                  
                  
                    <div class="col-md-6 mb-3">
                     
                       <div class="form-group">
                 
                 <input type="email" class="form-control" name="email" placeholder="E-mail Address" required>
             </div>  
               
               
                     
                     
                     
                 </div> 
                  
                  
                  
                    
                    <div class="col-md-6 mb-3">
                     
                       <div class="form-group">
                 
                 <input type="text" class="form-control" name="phoneno" placeholder="Phone No"  onkeydown="return ( event.ctrlKey || event.altKey || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106)
                    || (event.keyCode==8) || (event.keyCode==9) 
                    || (event.keyCode>34 && event.keyCode<40) 
                    || (event.keyCode==46) )" required>
             </div>  
               
               
                     
                     
                     
                 </div> 
                 
                 
                 
                   <div class="col-md-6 mb-3">
                     
                     <label> Select Date </label>
                       <div class="form-group">
                 
                 <input type="date" class="form-control" name="consultdate" placeholder="Select Date"   required>
             </div>  
               
               
                     
                     
                     
                 </div> 
                 
                    <div class="col-md-6 mb-3">
                      <label> Select Time </label>
                       <div class="form-group">
                 
                 <input type="time" class="form-control" name="consulttime" placeholder="Select Date"   required>
             </div>  
               
               
                     
                     
                     
                 </div> 
                  
                  
              </div> 
              
              
           
              <div class="form-group">
                  
                  <input type="text" name="subject" class="form-control" placeholder="Subject" required>
              </div> 
               
               
                
              <div class="form-group">
                       <label> Type of Project </label>
<textarea cols="60"  class="form-control" name="projecttype" required></textarea>
              </div> 
               
               
                 <div class="form-group">
                       <label> Description </label>
<textarea cols="60" class="form-control" name="description" required></textarea>
              </div> 
               
               
                  <div class="form-group">
                       <label> Expected Results </label>
<textarea cols="60" class="form-control" name="expectedresults" required></textarea>
              </div> 
              
              
              <div class="form-group">
                  <input type="number" class="form-control" name="expecteddelivery" placeholder="Expected Delivery (in weeks)" required>
              </div>
              
              <div class="form-group">
                       <label> Additional Information (optional) </label>
<textarea cols="60" class="form-control" name="additionalinfo" ></textarea>
              </div> 
              
              
         
              
              <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="project" value="Submit" >
              </div> 
               
           </form>
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
 
      </div>
    </div>
  </div>
</div>
		
  
<div class="modal left fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel" style="font-weight:800;"> Resume Review </h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <form>
          
          <div class="row">
              
              
             <div class="col-md-6 mb-3">
                 
                 <input type="text" class="form-control" name="fname" placeholder="First Name" required>
             </div> 
          
          
             <div class="col-md-6 mb-3">
                 
                 <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
             </div> 
              
              
              
              
          </div>
          
          <div class="form-group">
              <label> Select Schedule Date </label>
              <input type="date" class="form-control" name="scheduledate" required>
          </div>
          
             <div class="form-group">
              <label> Select Schedule Time </label>
              <input type="time" class="form-control" name="scheduledtime" required>
          </div>
          
          
              <div class="form-group">
              <label> Upload File (Max: 10mb) docx, pptx, pdf </label>
              <input type="file" class="form-control" name="file" required>
          </div>
          
          
         
        
           <div class="form-group">
              
           <select name="experience" id="types" class="form-control" style="font-size:13px;" required>
                       <option value=""> - Select Years of Experience - </option>
                  <option value="0-5years">0-5 Years</option>
                  <option value="Above 6years"> Above 6 years </option>
                    </select>
               </div>
               
          

                      <div class="form-group">
                <select name="amount" style="font-size:13px;" id="sizes" class="form-control" required>
                    
                    <option value=""> - <i class="fa fa-money"></i> Amount -  </option>
                </select>
                </div>
                    
                
                 
                   <input type="submit" class="btn btn-primary" name="review" value="Book Session">
          
      </form>
      
      </div>
     
    </div>
  </div>
</div>
      
<!-- Full Page Image Header with Vertically Centered Content -->
<header class="mastheas animate__animated animate__slideInDown" style=" height: 36vh;
  min-height: 300px;
background: url('img/session.jpg');
background-size:cover;
  background-position: center;
  background-repeat: no-repeat;" >
  <div class="container h-100" style="    height: 108%!important;">
      
  <div class="row h-100 align-items-center">
      <div class="col-12 text-center ">
          <br>
          
    
        <br>
        
        <h1 style="color:white; font-size:40px; font-weight:800;  "> Resume Review </h1>
        <p style="color:white; font-size:20px;"> Book A Session </p>
     
        	<a href="# " class="btn btn program btn-sm btn-demo  " id="program" style="border-radius:20px; background:white; color:#0F52BA; font-weight:bold;"    data-toggle="modal" data-target="#myModal" > Start your Project </a>
        	
        	
			    
    
     <br>
  </div>
</header>  
  
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
    <br><br>
       
       <div class="container animate__animated animate__fadeInDown">
           
           <div class="row">
               
               
               
               
               <div class="col-md-6 mb-3">
                   
                   
                        <h5 class="font-weight-800 animate__animated animate__fadeInLeft " style="font-weight:800; font-size:15px; color:blue; letter-spacing: 3px;"> SUCCESS STORIES </h5>
     
    <hr class="black accent-4 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                   
                   
                   <h1 style="font-weight:800;  font-size:38px; "> 
                   
                   The best businesses all over the world, big and small, trust Noron Marque for growth.
                   </h1>
                   <br>
                   <p> Noron Marque supports and works alongside with some of the best businesses all over the world. </p>
                   <br>
                   
                   <a href="#" style="font-weight:800;"> CHECK OUT FOR MORE SUCCESS STORIES </a>
               </div>
               
               
               
               
               
               
               
               
            <div class="col-md-6 mb-3">
                 <marquee direction="up" repeat="" marque-delay="7.5" loop="infinite">
                
                <div class="row">
                    
                    
                   
                    <div class="col-3 mb-3">
                        
                        <div class="card">
                        <img src="img/partners/Artboard1.png " class="img-fluid">
                        </div>
                    </div>
                    
                    
                     
                    <div class="col-3 mb-3">
                        <div class="card">
                        <img src="img/partners/Artboard2.png " class="img-fluid">
                        </div>
                    </div>
                        
                    
                         
                    <div class="col-3 mb-3">
                        <div class="card">
                        <img src="img/partners/Artboard3.png " class="img-fluid">
                        </div>
                    </div>
                    
                         
                    <div class="col-3 mb-3">
                        <div class="card">
                        <img src="img/partners/Artboard4.png " class="img-fluid">
                        </div>
                    </div>
                    
                    
                         
                    <div class="col-3 mb-3">
                        <div class="card">
                        <img src="img/partners/Artboard5.png " class="img-fluid">
                        </div>
                    </div>
                    
                        <div class="col-3 mb-3">
                        <div class="card">
                        <img src="img/partners/inflorenzahair.jpeg " class="img-fluid">
                        </div>
                    </div>
                    
                       <div class="col-3 mb-3">
                        <div class="card">
                        <img src="img/partners/summerca.jpeg " class="img-fluid">
                        </div>
                    </div>
                    
                       <div class="col-3 mb-3">
                        <div class="card">
                        <img src="img/partners/djecafoundation.jpeg " class="img-fluid">
                        </div>
                    </div>
                    
                       <div class="col-3 mb-3">
                        <div class="card">
                        <img src="img/partners/curryhouse.jpeg " class="img-fluid">
                        </div>
                        <br>
                           <div class="card">
                        <img src="img/partners/mcgrill.jpeg " class="img-fluid">
                        </div>
                        
                         <br>
                           <div class="card">
                        <img src="img/partners/universitytoronto.jpeg " class="img-fluid">
                        </div>
                        
                    </div>
                    
                    
                      <div class="col-3 mb-3">
                        <div class="card">
                        <img src="img/partners/korbus.jpeg " class="img-fluid">
                        
                        </div>
                        
                        <br>
                        
                          <div class="card">
                        <img src="img/partners/THRC.jpg " class="img-fluid">
                        </div>
                        
                        <br>
                        
                         <div class="card">
                        <img src="img/partners/larhu.jpeg " class="img-fluid">
                        </div>
                    </div>
                    
                    
                       <div class="col-3 mb-3">
                        <div class="card">
                        <img src="img/partners/legendsprints.jpeg " class="img-fluid">
                        </div>
                        
                        
                        <br>
                        
                          <div class="card">
                        <img src="img/partners/ajoo.jpg " class="img-fluid">
                        </div>
                    </div>
                    
                    
                       <div class="col-3 mb-3">
                        <div class="card">
                        <img src="img/partners/ryse.jpeg " class="img-fluid">
                        </div>
                        
                        
                         <br>
                        
                          <div class="card">
                        <img src="img/partners/uottawa.jpeg " class="img-fluid">
                        </div>
                        
                        
                    </div>
                    
                        
                    
                    
                    
                    
                </div>
                
         
                
                
                
                
                
                
                
                
                
                
                
                
            </div>   
               
               
               
                      </marquee>
               
               
               
               
               
               
               
               
               
               
               
               
               
               
               
           </div>
           
           
       </div>
       
       
       
   
  
    
  <br><br>

<section class="hiro-section" >
              
              <br>

          <div class="container">
              
         
            
             <div class="row ">
          
      <div class="col-md-6 mb-2 ">
          
    <h5 class="font-weight-800 animate__animated animate__fadeInLeft " style="font-weight:800; font-size:15px; color:blue; letter-spacing: 3px;"> OUR PROGRAMS </h5>
     
    <hr class="black accent-4 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
     
        <h2 class="animate__animated animate__fadeInRight" style=" color:black; font-weight:800; line-height:38px;">    Noron Marque offers business coaching workshop programs that are designed to step up progress and accelerate results in both your business and personal life. <br>  </h2>
  
 
            <br>
              
              <p class="animate__animated animate__slideInDown" style=" text-align:left;"  >
                 Our global community of successful entrepreneurs, our highly experienced coaches, our arsenal of proprietary tools, and our deep-dive strategy sessions are the cornerstones of our programs’ success.
              </p>
   
      
     
                
                     
      
<?php
$limit = 4;
$users = mysqli_query($dbc,"SELECT * FROM `programmes` WHERE 1 ORDER BY classname ASC LIMIT 0, $limit  ");
if(mysqli_num_rows($users) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($users)){

  $file = $rows['file'];
  $setdate = $rows['setdate'];
  $amount = $rows['amount'];
  $description = $rows['description'];
  $classname = $rows['classname'];
  $id = $rows['program_id'];
  $briefintro = $rows['briefintro'];
    ?>
    
                
           
                    
                
			    	<a href="viewprogram.php?program_id=<?php echo $id; ?>" class="btn btn program btn-sm  " id="program" style="border-radius:20px; background:white; color:#0F52BA; font-weight:bold; "><?php echo $classname; ?> </a>	
			    
		
              
                
            
            
            <?php $u++; }} ?>    
                
                
          <br>
             
                 <?php
              if(mysqli_num_rows($users) == 4){
                  ?>
                  
                 	<a href="programs.php" class="btn btn program btn-sm  " id="program" style="border-radius:20px; background:white; color:#0F52BA; font-weight:bold;"> View All </a>	
			    
               
                  <?php
              }
              
              ?>
      <div>
          
      </div>
      
    </div>
    
    
    
   
    
    
    <div class="col-md-6 mb-2">
      
         
         
             <div class="card animate__animated animate__slideInRight" style="border-radius:9px; border:none; ">
               
               <img src="https://images.unsplash.com/photo-1558008258-3256797b43f3?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwxMjA3fDB8MXxzZWFyY2h8Mnx8c2VtaW5hcnx8MHx8fA&ixlib=rb-1.2.1&q=80&w=1080" class="img-fluid" style="object-fit:cover; ">
            
         
           </div>
           
           
        
           
        
              
      
      
    </div>
    
  </div>
  
            
            
   </div>         
            
            
              
        
            
            
         
              
              
          </div>    
    </section>
  
  <br><br><br>
  
      
        
<?php
$limit = 1;
$filter = mysqli_query($dbc,"SELECT * FROM `programmes` WHERE 1 ORDER BY date DESC LIMIT 0, $limit  ");
if(mysqli_num_rows($filter) > 0){
    $uzt = 1;
 while($rows = mysqli_fetch_assoc($filter)){

  $fileZ = $rows['file'];
  $setdate = $rows['setdate'];
  $amount = $rows['amount'];
  $description = $rows['description'];
  $classname = $rows['classname'];
  $id = $rows['program_id'];
  $briefintro = $rows['briefintro'];
    ?>
    
      
<!-- Full Page Image Header with Vertically Centered Content -->
<header class="mastheas animate__animated animate__slideInDown" style=" height: 36vh;
  min-height: 548px;
background: #0f52ba;
background-size:cover;
  background-position: center;
  background-repeat: no-repeat;" >
  <div class="container h-100" style="    height: 108%!important;">
      
  <div class="row h-100 align-items-center">
      <div class="col-12 text-center ">
          <br>
          
              <h5 class="font-weight-800 animate__animated animate__fadeInLeft " style="font-weight:800; font-size:15px; color:white; letter-spacing: 3px;"> UPCOMING EVENT </h5>
     
    <hr class="white accent-4 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
    <div data-type="countdown" data-id="2384437" class="tickcounter" style="width: 100%; position: relative; padding-bottom: 25%"><a href="//www.tickcounter.com/countdown/2384437/precision-business-owners" title="Precision : Business Owners">Precision : Business Owners</a><a href="//www.tickcounter.com/" title="Countdown">Countdown</a></div><script>(function(d, s, id) { var js, pjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//www.tickcounter.com/static/js/loader.js"; pjs.parentNode.insertBefore(js, pjs); }(document, "script", "tickcounter-sdk"));</script>

        <br>
        
        <p style="color:white;"> <?php echo $briefintro; ?> </p>
     
        	<a href="viewprogram.php?program_id=<?php echo $id; ?> " class="btn btn program btn-sm  " id="program" style="border-radius:20px; background:white; color:#0F52BA; font-weight:bold;"> Reserve A Seat </a>	
			    
    
     <br>
  </div>
</header>  
    
      
      <?php $uzt++; }} ?>
      
      
      <br>
       
       
       <br>
  
  
  

<section class="hiro-section" >
              
              <br>

          <div class="container">
              
         
           
    <h5 class="font-weight-800 animate__animated animate__fadeInLeft " style="font-weight:800; font-size:15px; color:blue; letter-spacing: 3px;"> PODCAST EPISODES </h5>
     
    <hr class="black accent-4 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
     
  
   <div class="row"> 
    
             
      
<?php
$limit = 3;
$podcastchannel = mysqli_query($dbc,"SELECT * FROM `podcastchannel` WHERE 1 ORDER BY podcastchannelname ASC LIMIT 0, $limit   ");
if(mysqli_num_rows($podcastchannel) > 0){
    $pd = 1;
 while($rows = mysqli_fetch_assoc($podcastchannel)){

  $pid = $rows['podcast_id'];
  $podcastchannelname = $rows['podcastchannelname'];

$file = $rows['file'];

    ?>

        
        
    <div class="col-12 col-md-6 col-lg-4 mb-2">
      <div class="card">
        <img class="card-img-top" src="noronmarque/podcastscover/<?php echo $file; ?>" alt="Card image cap" style="object-fit:cover; height:20vh;">
        <div class="card-body">
          <h6 class="card-title"> <?php echo $podcastchannelname; ?></h6>
          <p class="card-text">  <center>	<a href="viewpodcastchannel.php?podcast_id=<?php echo $pid; ?>" class="btn btn program btn-sm   " id="program" style="border-radius:20px; background:#0F52BA; color:white; font-weight:bold;"> Listen </a>	
			    
               </center>   </p>
        </div>
      </div>
 
        

    </div>
    
    
    <?php $pd++; }} ?>
    
    
</div>


      <?php
              if(mysqli_num_rows($podcastchannel) == 3){
                  ?>
                  
                 <center>	<a href="podcasts.php" class="btn btn program btn-sm   " id="program" style="border-radius:20px; background:white; color:#0F52BA; font-weight:bold;"> View All </a>	
			    
               </center>
                  <?php
              }
              
              ?>

</div>

  
 
  </section>
  
       </div>
       </div>
  
  
  
  <br>
  
     
       <div class="container-fluid animate__animated animate__fadeInDown" style="overflow:hidden;">
           
           <div class="row">
               
               <div class="col-md-12" style=" background-image: url(img/resources.jpg); background-size:cover; background-repeat:no-repeat; background-position:center;  padding:16px; ">
                   
                   
                   <div class="text">
                       
               <br>
                       
                       <h1 style="text-align:center; color:white;"> Get Started  </h1>
                       
                       <h5 style="text-align:center; color:white;">

Our business toolkit includes everything you need to know about <br> Noron Marque perspective of various areas of life.</h5>
                       
                       <center> <a class="btn btn-outline-white" href="resources.php"> Explore </a> </center>
                       
                   </div>
                   
                   
               </div>
               
               
                
               
               
           </div>
           
       </div>

       
       
     
  
       
  
  
  
  
  
  
  
  
  
  
  
  
  <br>
  

<section class="hiro-section" >
              
              <br>

          <div class="container">
              
         
           
    <h5 class="font-weight-800 animate__animated animate__fadeInLeft " style="font-weight:800; font-size:15px; color:blue; letter-spacing: 3px;"> VIDEOS </h5>
     
    <hr class="black accent-4 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
     
  
   <div class="row"> 
    
             
      
<?php
$limit = 3;
$videos = mysqli_query($dbc,"SELECT * FROM `urlvideos` WHERE `videostatus` = 'Public' ORDER BY subtitle ASC LIMIT 0, $limit    ");
if(mysqli_num_rows($videos) > 0){
    $v = 1;
 while($rows = mysqli_fetch_assoc($videos)){

  $urlid = $rows['url_id'];
  $videochannelname = $rows['videochannel'];
$link = $rows['link'];
$subtitle = $rows['subtitle'];
$hostname = $rows['hostname'];
$description = $rows['description'];
$link = $rows['link'];


            $string     = $link;
$search     = '/youtube\.com\/watch\?v=([a-zA-Z0-9]+)/smi';
$replace    = "youtube.com/embed/$1";    
$url = preg_replace($search,$replace,$string);


    ?>
    
        
        
        
        <div class="col-md-4 mb-2  animate__animated animate__slideInDown">
                   <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="<?php echo $url; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<hr>
<h6 style="font-weight:bold; text-align:center;"> <?php echo $videochannelname; ?> </h6>
<p style="text-align:center;"> <?php echo $subtitle; ?> </p>
    
      <center>	<a href="viewurlvideos.php?url_id=<?php echo $urlid; ?>" class="btn btn program btn-sm   " id="program" style="border-radius:20px; background:#0F52BA; color:white; font-weight:bold;"> View </a>	
			    
               </center>
    </div>
    
    
    <?php $v++; }} ?>
    
    
      
    
    </div>
    
    
      <?php
              if(mysqli_num_rows($videos) == 3){
                  ?>
                  
                 <center>	<a href="videos.php" class="btn btn program btn-sm   " id="program" style="border-radius:20px; background:white; color:#0F52BA; font-weight:bold;"> View All </a>	
			    
               </center>
                  <?php
              }
              
              ?>
    
    
    
           </div>
  
  
  
  
  
  
  
  
  
  </div>
  
  </section>
  
 
  
  
  
  
  
  
  
  <br>
  
     
<!-- Full Page Image Header with Vertically Centered Content -->
<header class="mastheads">
  <div class="container h-100" style="    height: 108%!important;">
      
  <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
          
        <h1 class="font-weight-800 animate__animated animate__fadeInDown " style="font-weight:800; font-size:70px; color:white;"> Careers</h1>
        <p class="animate__animated animate__fadeInUp" style=" color:white;">  Get On Board </p>
    <a href="careers.php" class="btn btn-outline-white"> Start Here </a>
        
  </div>
</header>  
    

<br>















<br><br>

<div class="container marketing animate__animated animate__fadeInRight">
    
    
     <h5 class="font-weight-800 animate__animated animate__fadeInLeft " style="font-weight:800; font-size:15px; color:blue; letter-spacing: 3px;"> TESTIMONIALS </h5>
     
    <hr class="black accent-4 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
     
  
  
        
              
		<div class="items animate__animated animate__fadeInDown">
                       
            
		
                           
              
<?php
$limit = 10;
$testimonials = mysqli_query($dbc,"SELECT * FROM `testimonials` WHERE 1 ORDER BY fullname ASC LIMIT 0, $limit   ");
if(mysqli_num_rows($testimonials) > 0){
    $td = 1;
 while($rows = mysqli_fetch_assoc($testimonials)){

  $tid = $rows['testimonial_id'];
  
$fullname = $rows['fullname'];
$description = $rows['comments'];
$file = $rows['file'];

    ?>

 <div id="one" class="options">
     
     <br>
     
       <center>
            
            
            <img src="noronmarque/testimonials/<?php echo $file; ?>" class="rounded-circle img-fluid" style="	border-radius: 50%;
	border: 5px solid #b3d8ff;
	height: 100px;
	width: 100px;">
            
            <br><br>
            <h5 style="font-weight:800;"> <?php echo $fullname; ?> </h5>
            <hr class="black accent-4 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            
            <p>
                <?php echo $description; ?>
            </p>
            
        </center>
     
     
     
 </div>
 
 
   
       
  <?php $td++; }} ?>
  


			    	
				
				</div> 
   
  </div>
  
       
 
       
    
       <br>
       
       
    
<br><br>
  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-4664f2d6-3d78-4652-9bd0-23efa3e1efba"></div>
  
           <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
       
       <?php include('footer.php'); ?>
       
       
       
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

 
    
    

  <script type="text/javascript">
  
  
  
  
  
  
  
       
    $(document).ready(function() {

$("#types").change(function() {
    var val = $(this).val();
    if (val == "0-5years") {
        $("#sizes").html(
        "<option value='10000'>10000</option>   ");
        
    } else if (val == "Above 6years") {
        $("#sizes").html("<option value='16000'> 16000 </option>");


}


    
});


});

  
  
  
  
  
  $(document).ready(function() {
  $('#global-modal').modal('show');
});
  
  
  
  
  
  
  
  
$(document).ready(function() {
    
	$(".rating-wrap").shorten();
	
	$(".rating-wrap").shorten({showChars: 150});

 });
 
 
 (function($) {
    $.fn.shorten = function(settings) {
        "use strict";

        var config = {
            showChars: 400,
            minHideChars: 10,
            ellipsesText: "...",
            moreText: "",
            lessText: "less",
            onLess: function() {},
            onMore: function() {},
            errMsg: null,
            force: false
        };

        if (settings) {
            $.extend(config, settings);
        }

        if ($(this).data('jquery.shorten') && !config.force) {
            return false;
        }
        $(this).data('jquery.shorten', true);

        $(document).off("click", '.morelink');

        $(document).on({
            click: function() {

                var $this = $(this);
                if ($this.hasClass('less')) {
                    $this.removeClass('less');
                    $this.html(config.moreText);
                    $this.parent().prev().animate({'height':'0'+'%'}, function () { $this.parent().prev().prev().show(); }).hide('fast', function() {
                        config.onLess();
                      });

                } else {
                    $this.addClass('less');
                    $this.html(config.lessText);
                    $this.parent().prev().animate({'height':'100'+'%'}, function () { $this.parent().prev().prev().hide(); }).show('fast', function() {
                        config.onMore();
                      });
                }
                return false;
            }
        }, '.morelink');

        return this.each(function() {
            var $this = $(this);

            var content = $this.html();
            var contentlen = $this.text().length;
            if (contentlen > config.showChars + config.minHideChars) {
                var c = content.substr(0, config.showChars);
                if (c.indexOf('<') >= 0) // If there's HTML don't want to cut it
                {
                    var inTag = false; // I'm in a tag?
                    var bag = ''; // Put the characters to be shown here
                    var countChars = 0; // Current bag size
                    var openTags = []; // Stack for opened tags, so I can close them later
                    var tagName = null;

                    for (var i = 0, r = 0; r <= config.showChars; i++) {
                        if (content[i] == '<' && !inTag) {
                            inTag = true;

                            // This could be "tag" or "/tag"
                            tagName = content.substring(i + 1, content.indexOf('>', i));

                            // If its a closing tag
                            if (tagName[0] == '/') {


                                if (tagName != '/' + openTags[0]) {
                                    config.errMsg = 'ERROR en HTML: the top of the stack should be the tag that closes';
                                } else {
                                    openTags.shift(); // Pops the last tag from the open tag stack (the tag is closed in the retult HTML!)
                                }

                            } else {
                                // There are some nasty tags that don't have a close tag like <br/>
                                if (tagName.toLowerCase() != 'br') {
                                    openTags.unshift(tagName); // Add to start the name of the tag that opens
                                }
                            }
                        }
                        if (inTag && content[i] == '>') {
                            inTag = false;
                        }

                        if (inTag) { bag += content.charAt(i); } // Add tag name chars to the result
                        else {
                            r++;
                            if (countChars <= config.showChars) {
                                bag += content.charAt(i); // Fix to ie 7 not allowing you to reference string characters using the []
                                countChars++;
                            } else // Now I have the characters needed
                            {
                                if (openTags.length > 0) // I have unclosed tags
                                {
                                    //console.log('They were open tags');
                                    //console.log(openTags);
                                    for (j = 0; j < openTags.length; j++) {
                                        //console.log('Cierro tag ' + openTags[j]);
                                        bag += '</' + openTags[j] + '>'; // Close all tags that were opened

                                        // You could shift the tag from the stack to check if you end with an empty stack, that means you have closed all open tags
                                    }
                                    break;
                                }
                            }
                        }
                    }
                    c = $('<div/>').html(bag + '<span class="ellip">' + config.ellipsesText + '</span>').html();
                }else{
                    c+=config.ellipsesText;
                }

                var html = '<div class="shortcontent">' + c +
                    '</div><div class="allcontent">' + content +
                    '</div><span><a href="javascript://nop/" class="morelink">' + config.moreText + '</a></span>';

                $this.html(html);
                $this.find(".allcontent").hide(); // Hide all text
                $('.shortcontent p:last', $this).css('margin-bottom', 0); //Remove bottom margin on last paragraph as it's likely shortened
            }
        });

    };

})(jQuery);
</script>


  <script type="text/javascript">

 
    
         if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
  
  </script>
</body>

</html>