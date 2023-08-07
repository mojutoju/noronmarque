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
   
   
  
   
   
   <?php include('navbar.php'); ?>
  


 
       <!-- partial -->
<div class="container-fluid page-body-wrapper">
			<div class="main-panel">
				<div class="content-wrapper">




<div class="container">
      
       
     
<?php
if(isset($_GET['cartid']) && isset($_GET['email']) && isset($_GET['servicename']) && isset($_GET['subservicename']) && isset($_GET['amount'])){
    
$email = $_GET['email'];

$cartid = $_GET['cartid'];
$servicename = $_GET['servicename'];
$subservicename = $_GET['subservicename'];
$amount = $_GET['amount'];

    $prev_url= $_SERVER['HTTP_REFERER'];     //this gets the url of the previous page where this page redirects from
    
  
    
 
    
   
    $cart_url = "https://noron-marque.com/users/confirmpayment.php";
    $cart_url_www = "https://www.noron-marque.com/users/confirmpayment.php";




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
    if(!isset($_GET['cartid']) || !isset($_GET['email'])  || !isset($_GET['servicename']) || !isset($_GET['subservicename']) || !isset($_GET['amount'])){
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
        
$email = $_GET['email'];
$cartid = $_GET['cartid'];
$servicename = $_GET['servicename'];
$subservicename = $_GET['subservicename'];

$amount = $_GET['amount'];


             if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile') || strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'android')) {
               $device = "Mobile";
            }
            else{
                $device = "Tablet/PC";
            }
    
        $item = explode(',', $cartid);
?>
      
      
          
<div class="card" style="padding:20px; border-radius: 15px;">
    
    
    
    <?php
    
    $update = mysqli_query($dbc, "UPDATE `requestcart` SET `paymentstatus` = 'Paid' WHERE `cartid` = '$cartid' ");
    
    if($update){
        
                          
            
$to = $email; 
$from = 'noreply@noron-marque.com'; 
$fromName = 'Noron Marque E-Payment'; 
 
$subject = "Noron Marque E-Payment Confirmation "; 
 
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
        <p>Invoice </p>
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
        <td style='padding:18px 0px 18px 0px; line-height:22px; text-align:inherit;' height='100%' valign='top' bgcolor='' role='module-content'><div><div style='font-family: inherit;'><span style='font-size: 24px'><strong>Payment Invoice </strong></span></div>
<div style='font-family: inherit; text-align: start'><br></div>
<div style='font-family: inherit; margin-left: 0px'><span style='box-sizing: border-box; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: 14px; vertical-align: baseline; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image-source: initial; border-image-slice: initial; border-image-width: initial; border-image-outset: initial; border-image-repeat: initial; color: #000000; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial'>We are pleased to inform you that your payment has been </span><span style='box-sizing: border-box; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: 14px; vertical-align: baseline; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image-source: initial; border-image-slice: initial; border-image-width: initial; border-image-outset: initial; border-image-repeat: initial; color: #000000; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial'> <strong style='color:green;'>  Confirmed. </strong></span></div>
<div style='font-family: inherit; text-align: start'><br></div>
<div style='font-family: inherit; margin-left: 0px'><span style='box-sizing: border-box; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: 14px; vertical-align: baseline; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image-source: initial; border-image-slice: initial; border-image-width: initial; border-image-outset: initial; border-image-repeat: initial; color: #000000; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial'>Login to your dashboard to view more details. </span><span style='box-sizing: border-box; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: 14px; vertical-align: baseline; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image-source: initial; border-image-slice: initial; border-image-width: initial; border-image-outset: initial; border-image-repeat: initial; color: #000000; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial'> </span></div>
<br>



<div style='font-family: inherit; margin-left: 0px'><span style='box-sizing: border-box; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: 14px; vertical-align: baseline; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image-source: initial; border-image-slice: initial; border-image-width: initial; border-image-outset: initial; border-image-repeat: initial; color: #000000; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial'> Requests Detailed Information  </span></div>
<br>

<div style='font-family: inherit; margin-left: 0px'><span style='box-sizing: border-box; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: 14px; vertical-align: baseline; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image-source: initial; border-image-slice: initial; border-image-width: initial; border-image-outset: initial; border-image-repeat: initial; color: #000000; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial'> Service Name :  $servicename </span></div>
<br>
<div style='font-family: inherit; margin-left: 0px'><span style='box-sizing: border-box; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: 14px; vertical-align: baseline; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image-source: initial; border-image-slice: initial; border-image-width: initial; border-image-outset: initial; border-image-repeat: initial; color: #000000; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial'> Sub Service Name :  $subservicename </span></div>
<br>

<div style='font-family: inherit; margin-left: 0px'><span style='box-sizing: border-box; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; font-family: inherit; font-size: 14px; vertical-align: baseline; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-top-style: initial; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-top-color: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image-source: initial; border-image-slice: initial; border-image-width: initial; border-image-outset: initial; border-image-repeat: initial; color: #000000; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial'> Service Fee :  N $amount </span></div>
<br>
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
  
    ?>
    
    
    
    
       
       
 <?php
}

?>



    
    
    <center>
        <img src="https://nicefuntours.com/wp-content/uploads/2019/12/ShyCautiousAfricanpiedkingfisher-max-1mb.gif" class="img-fluid">
    </center>
    <br>
    <h3 style="font-weight:800; text-align:center; color:black;"> Your payment has been confirmed successfully. </h3>
    <p style="text-align:center; color:black;"> Kindly locate your full invoice for your payment on your dashboard. <br> A mail has been sent to you with brief details for your purchase. </p>
    
    
    <center>
        <a href="dashboard.php" class="btn btn-lg" style="background: blue; color:white;"> Go back to dashboard </a>
    </center>
    
</div>

<?php
    }else{}
    
    }
}
}
 
 ?>
 
 
  </div>
      
      </div>
      
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