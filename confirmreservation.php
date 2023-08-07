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



      
  </style>
  <script src="js/sweetalert.min.js"></script>
</head>

<body>


<?php include('navbar.php'); ?>



<div class="container-fluid pt-3">
    <div class="row  " style="height:46vh; background:url('img/bg.jpg'); background-size:cover; background-position:center;">
        <div class="col-12 py-8 text-center">
       <h4 style="color:white;"> Confirm Reservation </h4>
        </div>
    </div>
    <div class="row ">
        <div class="col-sm-10 mx-auto">
            <div class="row text-center mt-n5">
                <div class="col-sm pb-2 d-flex align-items-center justify-content-center">
                    <div class="card h-100 shadow   ">
                        <div class="card-body d-flex flex-column align-items-center">
                            <h4 class="card-title" style="font-weight:800;">Confirm Reservation </h4>
                     
                            
                       <div class="card-text">
                                
                            <?php 
                            if(isset($_POST['reserve'])){
                                
                                
                                $fname = $_POST['fname'];
                                $lname = $_POST['lname'];
                                $email = $_POST['email'];
                                $phoneno = $_POST['phoneno'];
                                $amount = $_POST['amount'];
                                $programid = $_POST['programid'];
                                $programname = $_POST['programname'];
                                
                                
                                    $txref = $email."-".$phoneno; //this is a unique reference for each payment
                                ?>
                                
                                
                                
                                
                              <form method="POST">
                  <script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
                                    <div class="row">
                                       <div class="col-md-6 mb-2">
                   
                      <div class="form-group">
                          
                          <label> Firstname</label>
               <input type="text" class="form-control" name="fname" value=<?php echo $fname; ?> readonly>
           </div>
               </div>
               
                <div class="col-md-6 mb-2">
                   
                   
                      <div class="form-group">
                          <label>Lastname</label>
               <input type="text" class="form-control" name="lname"  value="<?php echo $lname; ?>" readonly>
           </div>
               </div>
               
               
           </div>
        
           
           
           
           
           
                      <div class="form-group">
                          <label>E-mail Address</label>
               <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" readonly >
           </div>
           
           
           
                      <div class="form-group">
                          <label>Phone No</label>
               <input type="number" class="form-control" name="phoneno" value="<?php echo $phoneno ?>" readonly>
           </div>
           
           
           
                      <div class="form-group">
                          <label>Amount to Pay (N)</label>
               <input type="number" class="form-control" name="amount" value="<?php echo $amount; ?>" readonly>
           </div>
           
           
           
           
           
                      <div class="form-group">
                        
               <input type="hidden" class="form-control" name="programid" value="<?php echo $programid; ?>" readonly>
           </div>
           
           
           <div class="form-group">
                          
               <input type="text" class="form-control" name="programname" value="<?php echo $programname; ?>" readonly>
           </div>
                                    
                                    
                       <br>
                   <button type="button" class="btn btn" style="background:blue; color:white;" onClick="payWithRave()">Make Payment</button>
                                   
                                   
                
                
                                    
                                    
                                    
                                    
                                    
                                </form>
                                
                                   <script>
                                    const API_publicKey = "FLWPUBK-a30858e046b4421ad3ab82341deac890-X";
                                
                                    function payWithRave() {
                                        var x = getpaidSetup({
                                            PBFPubKey: API_publicKey,
                                            customer_email: "<?php echo $email; ?>",
                                            customer_firstname: "<?php echo $fname; ?>",
                                            customer_lastname: "<?php echo $lname; ?>",
                                            amount: <?php echo $amount; ?>,
                                            currency: "NGN",
                                            txref: "<?php echo $txref; ?>",
                                            onclose: function() {},
                                            callback: function(response) {
                                                var txref = response.tx.txRef; // collect txRef returned and pass to a server page to complete status check.
                                                console.log("This is the response returned after a charge", response);
                                                if (
                                                    response.tx.chargeResponseCode == "00" ||
                                                    response.tx.chargeResponseCode == "0"
                                                ) {
                                                    window.location.href = "paymentsuccess.php?fname=<?php echo $fname."&lname=".$lname."&email=".$email."&phoneno=".$phoneno."&amount=".$amount."&programid=".$programid."&programname=".$programname; ?>";     // redirect to a success page
                                                } else {
                                                    // redirect to a failure page.
                                                }
                                
                                                x.close(); // use this to close the modal immediately after payment.
                                            }
                                        });
                                    }
                                </script>
                                <!-- Rave Pay ends here -->
            
                                
                                
                                
                                
                                
                                
                                <?php
                                
                            }
                            
                            ?>
                            
                            
                            
                       </div>
                            
                          
                        </div>
                    </div>
                </div>
               
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
