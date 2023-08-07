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
     <link href='https://fonts.googleapis.com/css?family=Helvetica' rel='stylesheet'>
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
      font-family: 'Helvetica';
     
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
  height: 40vh;
  min-height: 400px;
background: rgb(15,82,186);
background: linear-gradient(90deg, rgba(15,82,186,1) 0%, rgba(18,72,156,1) 35%, rgba(15,171,221,1) 100%);
  background-size: cover;
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
   margin-bottom: 1rem;
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


      
  </style>
  <script src="js/sweetalert.min.js"></script>
</head>

<body>


<?php include('navbar.php'); ?>






<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
          <br><br>          <br><br>          <br><br>          <br><br>
        <h1 class="font-weight-800 animate__animated animate__fadeInDown " style="font-weight:800; font-size:48px; color:white;">Programme(s)</h1>
        <p class="font-weight-600 animate__animated animate__fadeInUp" style="font-size:30px; color:white;"> Overview </p>
    
      </div>
    </div>
  </div>
</header>


<br><br>

<div class="container  ">

<h5 class="animate__animated animate__slideInDown"> <i class="fa fa-briefcase"></i> Business Coaching Programs Designed for Entrepreneurs </h5>

<hr>

 <p class="animate__animated animate__slideInDown" style=" text-align:center;"  >
                  Noron Marque offers business coaching workshop programs that are designed to step up progress and accelerate results in both your business and personal life. Our global community of successful entrepreneurs, our highly experienced coaches, our arsenal of proprietary tools, and our deep-dive strategy sessions are the cornerstones of our programs’ success.
              </p>
              
              
              
               
            <div class="row">
                
                
                     
      
<?php

$users = mysqli_query($dbc,"SELECT * FROM `programmes` WHERE 1  ");
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
    
                
                <div class="col-md-4 mb-2">
                    
                  <figure class="card card-product" style="border-bottom: 3px solid blue; border-top: 3px solid blue;">
		<div class="img-wrap" style="background-image:url('noronmarque/programmes/<?php echo $file; ?>'); background-size:cover; background-position:center;"> </div>
		<figcaption class="info-wrap">
				<h5 style="font-weight:800; text-align:center;" class="title"> <?php echo $classname; ?> </h5>
				  
				 
				<div class="rating-wrapz">
						 <p style="text-align:center; "> <?php echo substr($briefintro,0,350);  ?> </p>
			
			
			<center>
			    	<a href="viewprogram.php?program_id=<?php echo $id; ?>" class="btn btn-sm btn-primary ">Learn More </a>	
			    	 	<a href="#" class="btn btn-sm btn-outline-primary ">Schedule Dates </a>	
			</center>
			
				</div> <!-- rating-wrap.// -->
		</figcaption>
	

	</figure>  
                    
                </div>
                
                
                
            
            
            <?php $u++; }} ?>    
                
            </div>  

</div>








     <div class="container-fluid" style="overflow:hidden;">
           
           <div class="row animate__animated animate__slideInLeft">
               
               <div class="col-md-6" style=" background-image: url(img/resources.jpg); background-size:cover; background-repeat:no-repeat; background-position:center;  padding:16px; ">
                   
                   
                   <div class="text">
                       
               <br>
                       
                       <h1 style="text-align:center; color:white;"> Get Started  </h1>
                       
                       <h5 style="text-align:center; color:white;">

Our business toolkit includes everything you need to know about <br> Noron Marque perspective of various areas of life.</h5>
                       
                       <center> <a class="btn btn-outline-white" href="resources.php"> Explore </a> </center>
                       
                   </div>
                   
                   
               </div>
               
               
                     <div class="col-md-6" style=" background-color:#0F52BA;   padding:16px; ">
                   
                   
                   <div class="text">
                       
               <br>
                       
                       <h1 style="text-align:center; color:white;"> Connect With Us </h1>
                       
                       <h5 style="text-align:center; color:white;">
What can we help you achieve?
</h5>
                       
                       <center> <a class="btn btn-outline-white" href="contactus.php"> Contact Us </a> </center>
                       
                       
                   </div>
                   
                   
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