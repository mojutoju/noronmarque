<?php include('db/connect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Explore Noron Marque Careers</title>
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
  height: 50vh;
  min-height: 500px;
background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                       rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1573164574572-cb89e39749b4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'); 
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
    
    
    <?php
    if(isset($_GET['careerid'])){
        
        
        $careerid = $_GET['careerid'];
        
        $users = mysqli_query($dbc,"SELECT * FROM `careers` WHERE careerid = '$careerid' ");
if(mysqli_num_rows($users) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($users)){
$careeridz = $rows['careerid'];
$jobtitle = $rows['jobtitle'];
$dept = $rows['dept'];
$description = $rows['description'];
$qualifications = $rows['qualifications'];
$jobtype = $rows['jobtype'];
        
        
    
    
    ?>
  <div class="container h-90  " >

    <div class="row h-100">
          
        <div class="col-md-8 ">
              <br><br><br>
   
        <h1 class="animate__animated animate__fadeInRight" style=" color:white; font-weight:800; font-size: 52px; ">  Join our <strong style="color:white;">Team</strong>  </h1>
                <hr style="background:white; color:white;">
   <p class="animate__animated animate__fadeInRight" style=" color:white;   ">  Apply for the job position by filling the form below.</p>
  
      
      
    </div>
  </div>
  
  </div>
  
</header>  



<div class="main" style="background-color:#f2edf3;">
    
    
    <br>
    
    <div class="container">
    <p style="letter-spacing:1.5px;"> JOB APPLICATION DETAILS </p>
    
    <hr>
    
    
     
            <div class="row">
                
                <div class="col-md-4 mb-3">
                    
                           <p> Job Role </p>
              <h4 style=" font-weight:800;"> 
              <?php echo $jobtitle; ?> </h4>
                    
                    
                </div>
                
                
                <div class="col-md-4 mb-3">
                    
                      <p> Department</p>
              <h4 style=" font-weight:800;"> 
              <?php echo $dept; ?> </h4>
                    
                </div>
                
                
                <div class="col-md-4 mb-3">
                      <p> Job Type</p>
              <h4 style=" font-weight:800;"> 
              <?php echo $jobtype; ?> </h4>
                     
                    
                    
                </div>
                        <hr>
            </div>
            
     <p> Description </p>
    
    <hr>
    
    <p> 
    <?php echo nl2br($description); ?>
    </p>
    
    
    <br>
    
        <h6 style="font-weight:800;"> Qualifications </h6>
        <hr>
        
        <p>
            <?php echo nl2br($qualifications); ?>
        </p>
            
  
    <br>
    
    
    <div class="card" style="padding:25px;">
        
        
        <h5 style="text-align:center; font-weight:800;"> Apply for the role of <?php echo $jobtitle; ?> </h5>
        
        <hr>
        
        
        
        <?php
        if(isset($_POST['jobapply'])){
            
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $phoneno = $_POST['phoneno'];
            $jobtitle = $_POST['jobtitle'];
            $url = $_POST['url'];
              $file = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $type=$_FILES['file']['type'];
$limit_size = 10000;
    $tmp_name = $_FILES['file']['tmp_name'];
    $fp      = fopen($tmp_name, 'r');

    $content = fread($fp, filesize($tmp_name));

    $content = addslashes($content);

    fclose($fp);

$allowed =  array('docx', 'pdf', 'doc'); //allowed types
$ext = pathinfo($file, PATHINFO_EXTENSION);//extension checking

           
             
if(!in_array($ext,$allowed)){

   
   ?>
   
   
   
    
<script>
   
    swal({
          text: "Error",
  title: "Invalid format make sure you upload a clear docx, doc, pdf ",

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
          text: " Size is less than 2mb ",
  title: "Invalid Size ",

  icon: "error",
  button: "Close",
});

</script>  

   
   
   
   
   <?php




  }else{

  



    if($file){
    $location = "jobapplication/$file";
    move_uploaded_file($tmp_name, $location);
    
    
    
    
    $insert = mysqli_query($dbc, "INSERT INTO `jobapplication` VALUES (NULL, '$fname', '$lname', '$email', '$phoneno', '$jobtitle', '$file', '$size', '$content', '$type', '$location', '$url' , now()) ");
    
    if($insert){

             ?>
        
        
             
        
<script>
   
    swal({
          text: " Success ",
  title: "Thank You for applying for the role of <?php echo $jobtitle; ?>, we will review your application and get back to you soon  ",

  icon: "success",
  button: "Close",
});

</script>  
        
        
        <?php

$to = $email; 
$from = 'recruitment@noron-marque.com'; 
$fromName = 'Noron Marque Recruitment'; 
 
$subject = "Job Application for $jobtitle"; 
 
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
        <td style='padding:18px 0px 18px 0px; line-height:22px; text-align:inherit;' height='100%' valign='top' bgcolor='' role='module-content'><div><div style='font-family: inherit;'><span style='font-size: 24px'><strong>Job Application Notification </strong></span></div>
<div style='font-family: inherit; text-align: start'><br></div>

<div style='font-family: inherit; margin-left: 0px'><span style='box-sizing: border-box; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: 14px; vertical-align: baseline; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image-source: initial; border-image-slice: initial; border-image-width: initial; border-image-outset: initial; border-image-repeat: initial; color: #000000; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial'> Dear $lname $fname,</span></div>
<div style='font-family: inherit; text-align: start'><br></div>
<div style='font-family: inherit; margin-left: 0px'><span style='box-sizing: border-box; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: 14px; vertical-align: baseline; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image-source: initial; border-image-slice: initial; border-image-width: initial; border-image-outset: initial; border-image-repeat: initial; color: #000000; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial'>Thank you for applying, your job application has been received. </span><span style='box-sizing: border-box; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: 14px; vertical-align: baseline; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image-source: initial; border-image-slice: initial; border-image-width: initial; border-image-outset: initial; border-image-repeat: initial; color: #000000; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial'> <strong style='color:green;'>  </strong></span></div>
<div style='font-family: inherit; text-align: start'><br></div>
<div style='font-family: inherit; margin-left: 0px'><span style='box-sizing: border-box; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: 14px; vertical-align: baseline; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image-source: initial; border-image-slice: initial; border-image-width: initial; border-image-outset: initial; border-image-repeat: initial; color: #000000; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial'>We will review your application and get back to you soon.</span></div>
<div style='font-family: inherit; text-align: start'><br></div>
<div style='font-family: inherit; margin-left: 0px'><span style='box-sizing: border-box; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: 14px; vertical-align: baseline; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image-source: initial; border-image-slice: initial; border-image-width: initial; border-image-outset: initial; border-image-repeat: initial; color: #000000; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial'>Thank you,</span></div>
<div style='font-family: inherit; text-align: start'><br></div>
<div style='font-family: inherit; margin-left: 0px'><span style='box-sizing: border-box; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: 14px; vertical-align: baseline; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image-source: initial; border-image-slice: initial; border-image-width: initial; border-image-outset: initial; border-image-repeat: initial; color: #000000; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial'>Regards.</span>&nbsp;</div><div></div></div></td>
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
        
    }else{
        ?>
        
        
        
        <?php
        
    }}}}}
    ?>
        <form name="jobapply" method="POST" action="viewcareer.php?careerid=<?php echo $careerid; ?>"  enctype="multipart/form-data">
            
          
           
            
            
          <div class="row">
              
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label> First Name </label>
                    <input type="text" class="form-control" name="fname" placeholder="Input First Name" required>
                    
                </div>
            </div>  
              
              
              <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label> Last Name </label>
                    <input type="text" class="form-control" name="lname" placeholder="Input Last Name" required>
                    
                </div>
            </div>  
              
             <div class="col-md-6 mb-3">
               
            <div class="form-group">
                <label> E-mail Address </label>
                <input type="email" class="form-control" name="email" placeholder="Input E-mail Address" required>
            </div>
            </div>  
              
               
                <div class="col-md-6 mb-3">
               
            <div class="form-group">
                <label> Phone No </label>
                <input type="number" class="form-control" name="phoneno" placeholder="Input Phone No e.g 081589833743" required>
            </div>
            </div>    
              
              
          </div>  
            
            
              <input type="hidden" class="form-control" name="jobtitle" value="<?php echo $jobtitle; ?>">
            
            
            
            <div class="form-group">
                <label> Upload CV (docx, pdf, doc) </label>
                <input type="file" class="form-control" name="file"  required>
            </div>
            
               
            <div class="form-group">
                <label> Link to Portfolio (optional) </label>
                <input type="url" class="form-control" name="portfolio">
            </div>
            
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="jobapply" value="Submit Application">
            </div>
            
            
            
            
        </form>
        
        
    </div>
    
    
    </div>
    
    
  
    <br><br>
    
</div>






<?php $u++; }}} ?>


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
    

<br><br>