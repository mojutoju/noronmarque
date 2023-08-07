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
  min-height: 560px;
background: url('img/bannerbook.jpg');
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

.h-100{
    height: 108%;
}

  
 .navbar-nav>li>.dropdown-menu {
  margin-top: 20px;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}

.navbar-default .navbar-nav>li>a {
  width: 200px;
  font-weight: bold
}

  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  
  
  
  .masthead {
  height: 50vh;
  min-height: 500px;


  background-position: center;
  background-repeat: no-repeat;
}


  </style>
  <script src="js/sweetalert.min.js"></script>
</head>

<body style="background-color: #fafafa;">


<?php include('navbar.php'); ?>



<header class="masthead" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                       rgba(0, 0, 0, 0.5)), url('https://images.pexels.com/photos/1370295/pexels-photo-1370295.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'); background-size:cover; background-position:center; ">
  
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
          <br><br>          <br><br>          <br><br>          <br><br>          <br><br>
        <h1 class="font-weight-800 animate__animated animate__fadeInDown " style="font-weight:800; font-size:52px; color:white;"> E-Books</h1>
        <p class="font-weight-600 animate__animated animate__fadeInUp" style="font-size:16px; color:white;"> Read and Enjoy your favorite books. </p>
    
      </div>
    </div>
  </div>
</header>


    <br><br>
    
  <div class="container" >
   

<div class="row">
    
    
    <div class="col-md-3 mb-3">
        
        
      <div class="list-container">
          
    <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true" style="   color: #fff;
    background-color: #0E62BA;">
 Home
  </a>
  <a href="#" class="list-group-item list-group-item-action">  <i class="fa fa-plus-circle"></i> Recently Added </a>
  <a href="#" class="list-group-item list-group-item-action"> <i class="	fa fa-cart-arrow-down"></i> Books for Purchase</a>
  <a href="#" class="list-group-item list-group-item-action"> <i class="fa fa-handshake-o"></i> Books for Free </a>
    <a href="#" class="list-group-item list-group-item-action active" aria-current="true" style="   color: #fff;
    background-color: #0E62BA;">
 <i class="fa fa-heart" ></i> Recommended Books
  </a>
  
  <br>
    <a href="#" class="list-group-item list-group-item-action active" aria-current="true" style="   color: #fff;
    background-color: #0E62BA;">
<i class="fa fa-book"></i> Top Rated Books
  </a>
  
</div>
      </div>
        
        
        
        
        
    </div>
    
    
    <div class="col-md-6 mb-3">
        
      
       
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slidetwo.jpg" alt="Los Angeles" class="img-fluid" style="border-radius:13px;">
    </div>
    <div class="carousel-item">
      <img src="img/slideone.jpg" alt="Chicago" class="img-fluid" style="border-radius:13px;">
    </div>
    <div class="carousel-item">
   <img src="img/slidethree.jpg" alt="Chicago" class="img-fluid" style="border-radius:13px;">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

        
        
        
        
      
      
    </div>
    
    
    <div class="col-md-3 mb-3">
        
        <div class="card" style="padding:10px;     background-color: #0E62BA;">
            
            <p style="color:white; text-align:center; font-weight:bold; font-size:20px;"> 
Request for Books
</p>

        
            <div class="text-center"> 
            <a href="#" class="btn btn btn-sm" style="border-radius:20px; background:white; color: #0E62BA;"> Click Here </a>
            </div>
        </div>
        
        

        
        
   <div class="card" style="padding:10px;     ">
            
            <p style=" text-align:center; font-weight:bold; font-size:20px;"> 
<i class="fa fa-rating"></i> Favorite E-Books
</p>

        
            <div class="text-center"> 
            <a href="#" class="btn btn btn-sm" style="border-radius:20px; background:white; color: #0E62BA;"> Click Here </a>
            </div>
        </div>
        
        
        
    </div>
    
    
</div>




 
  </div>
  
  
  
  <br><br>
  
  <div class="container">
      
      
      <h5 style="font-weight:800;"> Recently Added Books </h5>
      
      <hr>
      
      
        <div class="cardz" style="padding:13px; background-color:white;">
    <div class="row">  
    
            
      
<?php

$assign = mysqli_query($dbc,"SELECT * FROM `ebooks` WHERE 1   ");
if(mysqli_num_rows($assign) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($assign)){


$id = $rows['ebook_id'];
$docname = $rows['docname'];
$amount = $rows['amount'];
$filez = $rows['file'];
$status = $rows['status'];
$description = $rows['description'];
$type = $rows['type'];

$string = substr($description,0,130);

$assignz = mysqli_query($dbc,"SELECT * FROM `bookcover` WHERE `ebook_id` = '$id' ");

$rows = mysqli_fetch_assoc($assignz);

$ebookid = $rows['ebook_id'];
$title = $rows['title'];
$coverid = $rows['bookcoverid'];
$file = $rows['file'];


    ?>
    
    
  
        
   <div class="col-md-4 mb-3">
       
         
     
       <div class="card" style="background-image: url('noronmarque/bookcovers/<?php echo $file; ?>'); background-size: cover; height: 30vh; background-position:center; ">
           
           <div class="text" style="    position: absolute;
    right: 0;
    left: 0;
    bottom: 0;
    padding: 20px; background-color: rgb(0,0,0,.5);">
                   <h6 style="font-weight:bold; color:white;"> <?php echo $docname; ?> </h6>
              </div>
       </div>
    
      
     
       

          <h5 style="font-weight:bold; color:black;"> <?php echo $title; ?> </h5>   
          
        
          
          
          
          
          
 
         
         
        <?php
         
         if(!empty($amount)){
             ?>
             
            <strong>  N<?php echo number_format($amount); ?>  </strong>  
            
       
       <?php
         }else{
             echo "Free";
         }
         
         ?>
         
         <?php
         
         if($status == "Free"){
             
             ?>
             
        | <a target="_blank" href="noronmarque/documents/<?php echo $filez; ?>" >  <i class="fa fa-download"></i> Get </a>     
             
             <?php
         }else{}
         
         ?>
         
         <hr>
         
         <div class="card">
       
         <a class="btn btn-sm" style="padding:13px; background-color:blue; color:white; border-radius:6px; text-align:center;"  href="viewebooks.php?ebook_id=<?php echo $id; ?>"> 
       
             
             View
             
       
        
         
         </a>
 </div>
 
 <hr>
   
   </div>
    
    
    
    <?php $u++; }} ?>
      
      
  </div>

       
       </div> 
       
       
       
       <br><br>
       
       
       
          
      <h5 style="font-weight:800;"> Books for Purchase </h5>
      
      <hr>
      
      
        <div class="cardz" style="padding:13px; background-color:white;">
    <div class="row">  
    
            
      
<?php

$assign = mysqli_query($dbc,"SELECT * FROM `ebooks` WHERE `status` = 'Paid'   ");
if(mysqli_num_rows($assign) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($assign)){


$id = $rows['ebook_id'];
$docname = $rows['docname'];
$amount = $rows['amount'];
$filez = $rows['file'];
$status = $rows['status'];
$description = $rows['description'];
$type = $rows['type'];

$string = substr($description,0,130);

$assignz = mysqli_query($dbc,"SELECT * FROM `bookcover` WHERE `ebook_id` = '$id' ");

$rows = mysqli_fetch_assoc($assignz);

$ebookid = $rows['ebook_id'];
$title = $rows['title'];
$coverid = $rows['bookcoverid'];
$file = $rows['file'];


    ?>
    
    
  
        
   <div class="col-md-4 mb-3">
       
         
     
       <div class="card" style="background-image: url('noronmarque/bookcovers/<?php echo $file; ?>'); background-size: cover; height: 30vh; background-position:center; ">
           
           <div class="text" style="    position: absolute;
    right: 0;
    left: 0;
    bottom: 0;
    padding: 20px; background-color: rgb(0,0,0,.5);">
                   <h6 style="font-weight:bold; color:white;"> <?php echo $docname; ?> </h6>
              </div>
       </div>
    
      
     
       

          <h5 style="font-weight:bold; color:black;"> <?php echo $title; ?> </h5>   
          
        
          
          
          
        
         
        <?php
         
         if(!empty($amount)){
             ?>
             
            <strong>  N<?php echo number_format($amount); ?>  </strong>  
            
       
       <?php
         }else{
             echo "Free";
         }
         
         ?>
         
         <?php
         
         if($status == "Free"){
             
             ?>
             
        | <a target="_blank" href="noronmarque/documents/<?php echo $filez; ?>" >  <i class="fa fa-download"></i> Get </a>     
             
             <?php
         }else{}
         
         ?>
         
         <hr>
         
         <div class="card">
       
         <a class="btn btn-sm" style="padding:13px; background-color:blue; color:white; border-radius:6px; text-align:center;"  href="viewebooks.php?ebook_id=<?php echo $id; ?>"> 
       
             
             View
             
       
        
         
         </a>
 </div>
 
   <hr>
   
   </div>
    
    
    
    <?php $u++; }} ?>
      
      
  </div>

       
       </div> 
       
       
       
       <br><br>
       
       
            
      <h5 style="font-weight:800;"> Books for Free </h5>
      
      <hr>
      
      
        <div class="cardz" style="padding:13px; background-color:white;">
    <div class="row">  
    
            
      
<?php

$assign = mysqli_query($dbc,"SELECT * FROM `ebooks` WHERE `status` = 'Free'   ");
if(mysqli_num_rows($assign) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($assign)){


$id = $rows['ebook_id'];
$docname = $rows['docname'];
$amount = $rows['amount'];
$filez = $rows['file'];
$status = $rows['status'];
$description = $rows['description'];
$type = $rows['type'];

$string = substr($description,0,130);

$assignz = mysqli_query($dbc,"SELECT * FROM `bookcover` WHERE `ebook_id` = '$id' ");

$rows = mysqli_fetch_assoc($assignz);

$ebookid = $rows['ebook_id'];
$title = $rows['title'];
$coverid = $rows['bookcoverid'];
$file = $rows['file'];


    ?>
    
    
  
        
   <div class="col-md-4 mb-3">
       
         
     
       <div class="card" style="background-image: url('noronmarque/bookcovers/<?php echo $file; ?>'); background-size: cover; height: 30vh; background-position:center; ">
           
           <div class="text" style="    position: absolute;
    right: 0;
    left: 0;
    bottom: 0;
    padding: 20px; background-color: rgb(0,0,0,.5);">
                   <h6 style="font-weight:bold; color:white;"> <?php echo $docname; ?> </h6>
              </div>
       </div>
    
      
     
       

          <h5 style="font-weight:bold; color:black;"> <?php echo $title; ?> </h5>   
          
        
          
          
          
      
         
        <?php
         
         if(!empty($amount)){
             ?>
             
            <strong>  N<?php echo number_format($amount); ?>  </strong>  
            
       
       <?php
         }else{
             echo "Free";
         }
         
         ?>
         
         <?php
         
         if($status == "Free"){
             
             ?>
             
        | <a target="_blank" href="noronmarque/documents/<?php echo $filez; ?>" >  <i class="fa fa-download"></i> Get </a>     
             
             <?php
         }else{}
         
         ?>
         
         <hr>
         
         <div class="card">
       
         <a class="btn btn-sm" style="padding:13px; background-color:blue; color:white; border-radius:6px; text-align:center;"  href="viewebooks.php?ebook_id=<?php echo $id; ?>"> 
       
             
             View
             
       
        
         
         </a>
 </div>
 
   <hr>
   
   </div>
    
    
    
    <?php $u++; }} ?>
      
      
  </div>

       
       </div> 
       

       
       
       
       
       </div>
       
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<?php include('footer.php'); ?>

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