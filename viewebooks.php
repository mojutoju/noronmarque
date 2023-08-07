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

  </style>
  <script src="js/sweetalert.min.js"></script>
</head>

<body style="background-color: #fafafa;">


<?php include('navbar.php'); ?>



    <br><br><br><br><br>
    
    

  
            <?php 
            
            if(isset($_GET['ebook_id'])){
                
                $id = $_GET['ebook_id'];
                
                
                
                
                     
$users = mysqli_query($dbc,"SELECT * FROM `ebooks` WHERE `ebook_id` = '$id' ");
if(mysqli_num_rows($users) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($users)){


$id = $rows['ebook_id'];
$docname = $rows['docname'];
$amount = $rows['amount'];
$file = $rows['file'];
$status = $rows['status'];
$description = $rows['description'];
$type = $rows['type'];




$assignz = mysqli_query($dbc,"SELECT * FROM `bookcover` WHERE `ebook_id` = '$id' ");

$rows = mysqli_fetch_assoc($assignz);

$ebookid = $rows['ebook_id'];
$title = $rows['title'];
$coverid = $rows['bookcoverid'];
$filez = $rows['file'];
                
            
            ?>



<div class="container">
    
    <p style="font-size:13px;"> Books >  <?php echo $docname; ?> > <?php echo $title; ?>  </p>
    
    <hr>
    
    <div class="row">
        
        
        
        <div class="col-md-6 mb-3">
            
            
             <div class="card" style="background-image: url('noronmarque/bookcovers/<?php echo $filez; ?>'); background-size: cover; height: 30vh; background-position:center; ">
           
         
       </div>
    
            
            
            
        </div>
        
        
        
           <div class="col-md-6 mb-3">
               
               
               <h1 style="font-weight:800; color:black;"> <?php echo $title; ?> </h1>
               
                   <p> <?php echo $docname; ?> </p>
                   
                  <a href="viewebooks.php?ebook_id=<?php echo $id; ?>" > <i class="	fa fa-plus-square"></i> Add to Recommendation Lists </a> <br><br>
             
                  
                  <?php
                  if($status == "Paid"){
                      
                      ?>
                      
                        
                    <a href="viewebooks.php?ebook_id=<?php echo $id; ?>&ddocname=<?php echo $docname; ?>&title=<?php echo $title; ?>&coverid=<?php echo $coverid; ?>" > <i class="	fa fa-plus-square"></i> Add to Wishlist </a> <br><br>
                      
                      
                      
                      
                      <?php
                  }
                  ?>
               
                    
                    <a style="color:red;" href="viewebooks.php?ebook_id=<?php echo $id; ?>" > <i class="	fa fa-heart"></i> Add to Favorites </a> <br><br>
                    
                    
                    <br>
                    
                    
               </div>
        
        
        
        
    </div>
    
    
    <div class="card-header" style="padding:13px; background-color:white;">
          <h5 style="font-weight:800;"> Description</h5>
    
        
    </div>
  <br>
    
    <?php echo nl2br($description); ?>
    
    <br><br>
    
    
      <?php
    
    if($status == "Free"){
        ?>
        
        
        
        <div class="card">
            
        <a  href="noronmarque/documents/<?php echo $file; ?>"  class="btn btn-success"> Download </a>        
        </div>
        
    
        
        
        
        <?php
        
    }else{ 
        ?>
        
        
        
        
           <div class="card">
            
        <a href="#" class="btn btn-success"> Buy Now   N<?php echo number_format($amount); ?> </a>        
        </div>
        
        
        
        <?php
        
        
    }
    
    ?>
    
  
</div>







<?php $u++; }} } ?>




<br><br>

       
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