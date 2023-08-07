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
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
     <link href='https://fonts.googleapis.com/css?family=Barlow Semi Condensed' rel='stylesheet'>
       <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <!-- Bootstrap core CSS -->
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css">
  
  
  body{
      font-family: 'Barlow Semi Condensed';
     
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


  background-position: center;
  background-repeat: no-repeat;
}



.card-product .img-wrap {
    border-radius: 3px 3px 0 0;
    overflow: hidden;
    position: relative;
    height: 220px;
    text-align: center;
}
.card-product .img-wrap img {
    max-height: 100%;
    max-width: 100%;
    object-fit: cover;
}
.card-product .info-wrap {
    overflow: hidden;
    padding: 15px;
    border-top: 1px solid #eee;
}
.card-product .bottom-wrap {
    padding: 15px;
    border-top: 1px solid #eee;
}

.label-rating { margin-right:10px;
    color: #333;
    display: inline-block;
    vertical-align: middle;
}

.card-product .price-old {
    color: #999;
}



.card {
   margin-bottom: 11rem;
}

.list-view {
  .row {
    > [class*='col-'] {
      max-width: 100%;
      flex: 0 0 100%;
    }
  }
  .card {
    @media (max-width: 575.98px) {
     flex-direction: column;
    }
    flex-direction: row;
    > .card-img-top {
     width: auto;
    }
    
    .card-body {
      display: inline-block;
    }
  }
}

.project-tab {
    padding: 10%;
    margin-top: -8%;
}
.project-tab #tabs{
    background: #007b5e;
    color: #eee;
}
.project-tab #tabs h6.section-title{
    color: #eee;
}
.project-tab #tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #0062cc;
    background-color: #f3f3f3;
    border-color: transparent transparent #f3f3f3;
    border-bottom: 3px solid !important;
    font-size: 16px;
    font-weight: bold;
}
.project-tab .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    color: #0062cc;
    font-size: 16px;
    font-weight: 600;
}
.project-tab .nav-link:hover {
    border: none;
}
.project-tab thead{
    background: #f3f3f3;
    color: #333;
}
.project-tab a{
    text-decoration: none;
    color: #333;
    font-weight: 600;
}


.active{
    background: darkblue;
    color:white;
    padding:12px;
    
}

th,td{
    color:white;
    font-weight:bold;
    font-size:16px;
}

label{
    font-size:13px;
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
  <script src="js/sweetalert.min.js"></script>
</head>

<body style="background-image: linear-gradient(to right bottom, #0f52ba, #0f54c0, #0f56c5, #0f59cb, #0f5bd1);">


<?php include('navbar.php'); ?>






    
  <div class="main-container">

<div class="main">
    
    <div class="container">
                                
                     
<?php


if(isset($_GET['fname']) && isset($_GET['lname']) && isset($_GET['email']) && isset($_GET['phoneno']) && isset($_GET['amount']) && isset($_GET['programid']) && isset($_GET['programname'])){
    
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $email = $_GET['email'];
    $phoneno = $_GET['phoneno'];
    $amount = $_GET['amount'];
    $programid = $_GET['programid'];
    $programname = $_GET['programname'];
    
       $prev_url=$_SERVER['HTTP_REFERER'];     //this gets the url of the previous page where this page redirects from

    $cart_url = "https://noron-marque.com/confirmreservation.php";
    $cart_url_www = "https://www.noron-marque.com/confirmreservation.php";
    


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
    if(!isset($_GET['fname']) || !isset($_GET['lname']) || !isset($_GET['email']) || !isset($_GET['phoneno']) || !isset($_GET['amount']) || !isset($_GET['programid']) || !isset($_GET['programname'])){
        
        
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
       
         
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $email = $_GET['email'];
    $phoneno = $_GET['phoneno'];
    $amount = $_GET['amount'];
    $programid = $_GET['programid'];
    $programname = $_GET['programname'];
       $ran = uniqid();
             if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile') || strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'android')) {
               $device = "Mobile";
            }
            else{
                $device = "Tablet/PC";
            }
    
        $item = explode(',', $programid);
?>




<?php

$insert = mysqli_query($dbc, "INSERT INTO `reservations` VALUES(NULL, '$fname', '$lname', '$email', '$phoneno', '$amount', '$programid', '$programname', now()) ");

if($insert){

?>
<br><br><br><br><br><br><br>
<div class="card" style="padding:30px;">
<center> <img src="https://media1.tenor.com/images/06ae072fb343a704ee80c2c55d2da80a/tenor.gif?itemid=14090897" class="img-fluid" width="200px"></center>
<h4 class="card-text text-center " style="font-size:32px; font-weight:800; color:black;">Congratulations</h4>
<p class="card-text text-center">
   
    Your seat reservation for the <br>  
</p>

<h3 class="card-text text-center" style="font-size:20px; font-weight:bold; color:black;"> <?php echo $programname; ?>
    </h3>
<p class="card-text text-center"> has been booked successfully.  </p>
<center> 
<p> Click the button below </p>
<a href="downloadcourses.php?programid=<?php echo $programid;?>&idd=<?php echo $ran; ?>" class="btn btn-success"> Download Course Materials</a>

</center>
</div>

<?php 
}else{

?>
    <center>
            
            <h2 style="font-weight:800; font-size:50px; color:white;"> 404 Error </h2>
            

            
            <p style="color:white;"> This page is not accessible , follow the normal procedure. <br> Thank you.</p>
            
            <a href="viewprogram.php?program_id=<?php echo $programid; ?>" class="btn btn-sm" style="background-color:blue ; border-radius:20px; color:white;"> Go back to Program Page </a>
        </center>



<?php

} }}} ?>




                            
                       </div>
                            
                          
                        </div>
                    </div>
  










       <?php include('footer.php'); ?>
       
       
       
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>



<script>
    

function showList(e) {
  var $gridCont = $('.grid-container');
  e.preventDefault();
  $gridCont.hasClass('list-view') ? $gridCont.removeClass('list-view') : $gridCont.addClass('list-view');
}
function gridList(e) {
  var $gridCont = $('.grid-container')
  e.preventDefault();
  $gridCont.removeClass('list-view');
}

$(document).on('click', '.btn-grid', gridList);
$(document).on('click', '.btn-list', showList);


</script>


 
  <script type="text/javascript">

    // Animations initialization
    new WOW().init();
      
  
  </script>
</body>

</html>
