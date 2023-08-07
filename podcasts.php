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
  min-height: 500px;
  background-image: url('img/podcasts.jpg');
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


      
  </style>
  <script src="js/sweetalert.min.js"></script>
</head>

<body>


<?php include('navbar.php'); ?>






<header class="masthead">
  <div class="container h-100" style="    height: 108%!important;">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="font-weight-800" style="font-weight:800; font-size:52px; color:white;">Podcasts</h1>
    
      </div>
    </div>
  </div>
</header>


<br><br>
<div class="container">
<p> <a style="color:black;" href="index.php"> Home </a> > <a href="podcasts.php" style="color:blue;"> Podcasts </a> </p>

<hr>

</div>





















<div class="container grid-container">
<div class="row">
    
    
    
<?php

$users = mysqli_query($dbc,"SELECT * FROM `podcastchannel` WHERE 1  ");
if(mysqli_num_rows($users) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($users)){

  $id = $rows['podcast_id'];
  $podcastchannelname = $rows['podcastchannelname'];

$file = $rows['file'];

    ?>

    
    
    
    
    

    <div class="col-12 col-md-6 col-lg-4">
      <div class="card">
        <img class="card-img-top" src="noronmarque/podcastscover/<?php echo $file; ?>" alt="Card image cap" style="object-fit:cover; height:20vh;">
        <div class="card-body">
          <h5 class="card-title"> <?php echo $podcastchannelname; ?></h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
 
        

    </div>
    
    
    <?php $u++; }} ?>
    
    
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