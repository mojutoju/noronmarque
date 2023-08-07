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

      
  </style>
  <script src="js/sweetalert.min.js"></script>
</head>

<body>


<?php include('navbar.php'); ?>



<?php
if(isset($_GET['program_id'])){
    $id = $_GET['program_id'];
    
    
$users = mysqli_query($dbc,"SELECT * FROM `programmes` WHERE `program_id` = '$id'  ");
if(mysqli_num_rows($users) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($users)){

  $file = $rows['file'];
  $setdate = $rows['setdate'];
  $amount = $rows['amount'];
  $description = $rows['description'];
  $classname = $rows['classname'];
  $pid = $rows['program_id'];
  $briefintro = $rows['briefintro'];
    

?>


<header class="masthead" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                       rgba(0, 0, 0, 0.5)), url('noronmarque/programmes/<?php echo $file; ?>'); background-size:cover; background-position:center; ">
  
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
          <br><br>          <br><br>          <br><br>          <br><br>          <br><br>
        <h1 class="font-weight-800 animate__animated animate__fadeInDown " style="font-weight:800; font-size:52px; color:white;">Programme(s)</h1>
        <p class="font-weight-600 animate__animated animate__fadeInUp" style="font-size:30px; color:white;"> <?php echo $classname;  ?> </p>
    
      </div>
    </div>
  </div>
</header>


<main style="background: dodgerblue ; padding:20px; ">
    
   
         
       
    <ul  class="nav nav-pills list-inline mx-auto justify-content-center ">
        
			<li class="nav-link ">
        <a class=" tab-pan show active " id="home-tab" data-toggle="tab" href="#home"  role="tab" aria-controls="home" aria-selected="true" style="color:white;" >Overview</a>
			</li>
			<li class="nav-link">
			    
			    <a   style="color:white;"  id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"> Meet your Facilitators</a>
			</li>
			<li class="nav-link"><a style="color:white;"  id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"> Schedule Dates </a>
			</li>
			
			<li class="nav-link"><a style="color:white;"  id="course-tab" data-toggle="tab" href="#courses" role="tab" aria-controls="contact" aria-selected="false"> Course Materials </a>
			</li>
  		<li class="nav-link"><a style="color:white;"  id="c-tab" data-toggle="tab" href="#contacts" role="tab" aria-controls="contact" aria-selected="false"> Reserve a Seat </a>
			</li>
			
			</ul>
</main>




   <div class="section"  id="exTab1">
          <div class="tab-content" id="myTabContent">
              
       
                   
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      
      <div class="container">
      
      
      <h5> Introduction </h5>
      <hr>
      <?php echo nl2br($briefintro); ?>
      
      <br><br>
      
      <?php echo htmlspecialchars_decode($description); ?>
      
      </div>
      
      </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      
      
        <div class="container">
            
             <div class="row">
   
            <?php
                    
$assigned = mysqli_query ($dbc, "SELECT * FROM `assignfacilitators` WHERE `classname` = '$classname'  ");
if(mysqli_num_rows($assigned) > 0 ){

$a = 1;
while($rows = mysqli_fetch_assoc($assigned)){
    
$facilitator = $rows['facilitator'];

                    
                    ?>
                    
                    
                    
                     <?php
                    
$facilitatorz = mysqli_query ($dbc, "SELECT * FROM `facilitators` WHERE `fname` = '$facilitator'  ");
if(mysqli_num_rows($facilitatorz) > 0 ){

$ac = 1;
while($rows = mysqli_fetch_assoc($facilitatorz)){
    
$facname = $rows['fname'];
$file = $rows['file'];
$bio = $rows['description'];
                    
                    ?>
                         
                    
                         
                         
                         <div class="col-md-6 mb-2">
                             
                                   <div class="card" style="padding:20px;">
                               <div class="row">
                       <div class="col-md-2 mb-2">
                            <img src="noronmarque/facilitators/<?php echo $file; ?> " class="img-fluid ">         
         
                       </div> 
                        
                        
        <div class="col-md-8 mb-2">
                          <h4 style="color:black; font-weight:800;"> <?php echo $facname; ?>  </h4>  
                          <hr>
                          
                        <section style="color:black;">
                            
                            <?php echo htmlspecialchars_decode($bio); ?>
                        </section>  
                          
                        </div>
                      
                        </div>
                        
             
                       </div>
                   
                             
                         </div>
                         
                         
                
                     
                     
                     
                     
                   
                   
                   
                   <?php $ac++; }} ?> 
                    
                    <?php $a++; }} else{   ?>
               <h3> No Facilitator </h3>
               
               <?php } ?>
                     </div>
          
      </div>
      
      
      
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  
  <div class="container">
      
      


             
         <div class="table-responsive">
  <table class="table table-hover">
    <thead>
      <tr>
             
        <th scope="col">Date </th>
        <th scope="col">Time </th>
        <th scope="col">Venue </th>
        
     
    
     </tr>
    </thead>
    
    
           
      
<?php

$users = mysqli_query($dbc,"SELECT * FROM `programdates` WHERE `classname` = '$classname'  ");
if(mysqli_num_rows($users) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($users)){

  $programdate =  $rows['programdate'];
  $timein = $rows['timein'];
  $timeout = $rows['timeout'];
  $classnames = $rows['classname'];
  $id = $rows['pdate_id'];
  $venue = $rows['venue'];
    ?>
    
    
    
    
    
    
   <tbody class="searchable">
      <tr>
      
        
        <td>
      <?php echo date('Y-m-d', strtotime($programdate)); ?>
  
  </td>
  
  
        <td> <?php echo date('h:i a ', strtotime($timein)); ?> - <?php echo date('h:i a ', strtotime($timeout)); ?>  </td>
        <td> <?php echo $venue; ?> </td>
  
  
  
  
     
      
        
      
      </tr>
      
      
     
      <?php $u++; }}else{ ?>
      
      
 

  <td> No Programmes(s)</td>
  <td> Scheduled Dates</td>
  <td>Available</td>
 
 
  
  
  <?php } ?>
      
    </tbody>
  </table>
</div>
      
          
      
  </div>
  
  
  
  </div>
   <div class="tab-pane fade" id="contacts" role="tabpanel" aria-labelledby="c-tab">
   
   
   <div class="container">
       
       <br>
       
       
  
       <div class="row">
           
           
           <div class="col-md-6 mb-2">
                  
       
       <h4 style="color:white; font-weight:600;"> Reserve a Seat</h4>
       
         <p style="color:white;"> Book ahead before a scheduled date & time is released </p>
    
       
       <hr style="color:white; background:white;">
           <p style="font-weight:bold; color:white;"> Payment is required to secure reserved seat.</p>
           
           <div classs="card" style=" border-radius:12px;">
               
               <img src="https://images.unsplash.com/photo-1558008258-3256797b43f3?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwxMjA3fDB8MXxzZWFyY2h8Mnx8c2VtaW5hcnx8MHx8fA&ixlib=rb-1.2.1&q=80&w=1080" class="img-fluid">
           </div>
           
           </div>
           
           
           
    
       
    
        <div class="card" style="padding:20px; color:black;">
            
       <div class="card-header" style="background:white; color:black;">
           <h3 style="font-weight:bold; text-align:center;"> Book Your Seat </h3>
       </div>
       
         
            
             <br>
             
       <form name="reserve" method="POST" action="confirmreservation.php">
           
           
           <div class="row">
               
               
               <div class="col-md-6 mb-2">
                   
                      <div class="form-group">
                          
                          <label> Firstname</label>
               <input type="text" class="form-control" name="fname" required>
           </div>
               </div>
               
                <div class="col-md-6 mb-2">
                   
                   
                      <div class="form-group">
                          <label>Lastname</label>
               <input type="text" class="form-control" name="lname" required>
           </div>
               </div>
               
               
           </div>
        
           
           
           
           
           
                      <div class="form-group">
                          <label>E-mail Address</label>
               <input type="email" class="form-control" name="email" required>
           </div>
           
           
           
                      <div class="form-group">
                          <label>Phone No</label>
               <input type="number" class="form-control" name="phoneno" required>
           </div>
           
           
           
                      <div class="form-group">
                          <label>Amount to Pay (N)</label>
               <input type="number" class="form-control" name="amount" value="<?php echo $amount; ?>" readonly>
           </div>
           
           
           
           
           
                      <div class="form-group">
                        
               <input type="hidden" class="form-control" name="programid" value="<?php echo $pid; ?>" readonly>
           </div>
           
           
           <div class="form-group">
                          
               <input type="hidden" class="form-control" name="programname" value="<?php echo $classname; ?>" readonly>
           </div>
           
           
                      <div class="form-group">
                          
               <input type="submit" class="btn btn" name="reserve" value="Reserve" style="background:darkblue; color:white;">
           </div>
           
           
       </form>
       
       
       
   </div>
   </div>
   
   </div>
</div>


        <div class="tab-pane fade " id="courses" role="tabpanel" aria-labelledby="course-tab">
                  
                  
                  
                  <div class="container">
      
      


             
         <div class="table-responsive">
  <table class="table table-hover">
    <thead>
      <tr>
             
        <th scope="col">Course(s)</th>
        <th scope="col">Programme(s)</th>
        
        <th scope="col">Description</th>
        
    
    
     </tr>
    </thead>
    
    
           
      
<?php

$users = mysqli_query($dbc,"SELECT * FROM `courses` WHERE `classname` = '$classname'  ");
if(mysqli_num_rows($users) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($users)){

    $classname = $rows['classname'];
  $coursetitle = $rows['coursetitle'];
  $id = $rows['course_id'];
  $file = $rows['file'];
    ?>
    
    
    
    
    
    
   <tbody class="searchable">
      <tr>
      
        
        <td>
      <?php echo $coursetitle; ?>
  
  </td>
  
  
        <td> <?php echo $classname; ?>  </td>
  
        <td> <?php echo nl2br($description); ?> </td>
     
      
     
      
      </tr>
      
      
     
      <?php $u++; }}else{ ?>
      
      
 

  <td> No Course(s)</td>
  <td>Available</td>
 
 <td> Yet</td>
  
  
  <?php } ?>
      
    </tbody>
  </table>
</div>
      
          
      
  </div>
  
                  
                  
                  
                  
                  
                  
                   </div>

            </div>
      
	
			</div>
	
		
	

    



<?php $u++; }} } ?>


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




