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
   
   
  
   
   
   <?php
    if(isset($_GET['email']) && isset($_GET['servicename']) && isset($_GET['service_id']) && isset($_GET['subservice_id']) && isset($_GET['subservicename'])){
       
       $email = $_GET['email'];
       $servicename = $_GET['servicename'];
       $subservicename = $_GET['subservicename'];
       $serviceid = $_GET['service_id'];
       $subserviceid = $_GET['subservice_id'];
       
       $delete = mysqli_query($dbc,"DELETE FROM  `requestcart` WHERE `subservice_id` = '$subserviceid' AND `email` = '$email' AND `subservicename` = '$subservicename'  ");
       
       if($delete){
           
           
           ?>
           
           
           
                     
              
<script>
   
    swal({
          text: "Success",
  title: "<?php echo $subservicename; ?> has been removed from cart  ",

  icon: "success",
  button: "Close",
});



setTimeout(function () {
   window.location.href = "viewcart.php"; //will redirect to your blog page (an ex: blog.html)
}, 1000); //will call the function after 2 secs.

</script>  
  
           
           
           
           
           <?php
           
           
       }else{  }
   }
   
   ?>
   
   
   
   <?php include('navbar.php'); ?>
  


 
       <!-- partial -->
<div class="container-fluid page-body-wrapper">
			<div class="main-panel">
				<div class="content-wrapper">




<div class="container">
      
       
       
       <?php
       
       if(isset($_POST['confirmation'])){
           
           $cartid = $_POST['cartid'];
           $servicename = $_POST['servicename'];
           $subservicename = $_POST['subservicename'];
           $fullname = $_POST['fullname'];
           $amount = $_POST['amount'];
           $email = $_POST['email'];
           
           
          
          ?>
          
          <center>
          <img src="img/noronbanner.jpg" class="img-fluid " style="width:100%;">
          </center>
          <br>
          <br>
          
          
          <div class="card" style="padding:20px; border-radius:13px;">
          <h4> Confirm Details <?php echo $subservicename; ?> </h4>
          
          <hr>
          
             <?php
							        $txref = $email."-".$phoneno; //this is a unique reference for each payment
							      
							    ?>
          
          
          <div class="row">
              
             <div class="col-md-4 mb-3">
                     <h5 style="font-weight:800;"> Cart ID </h5>
          <p> <?php echo $cartid; ?> </p>
             </div> 
             
             
             
             <div class="col-md-4 mb-3">
                          
       <h5 style="font-weight:800;"> Service Name </h5>
          <p> <?php echo $servicename; ?> </p>
             </div>
             
             
             <div class="col-md-4 mb-3">
                   
          
           <h5 style="font-weight:800;"> Sub Servicename </h5>
          <p> <?php echo $subservicename; ?> </p>
             </div>
             
             
             
             <div class="col-md-4 mb-3">
                   
          
         <h5 style="font-weight:800;"> Full Name </h5>
          <p> <?php echo $fullname; ?> </p>
          
             </div>
             
             
             <div class="col-md-4 mb-3">
                 
                    <h5 style="font-weight:800;"> E-mail Address </h5>
          <p> <?php echo $email; ?> </p>
             </div>
             
             
             <div class="col-md-4 mb-3">
                    <h5 style="font-weight:800;"> Amount </h5>
          <p> N<?php echo $amount; ?> </p>
             </div>
              
          </div>
          
          
          
          
      
          
 
      
          
       
          
        
          
          <form method="POST">
                <script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
              
               <button type="button" class="btn btn" style="background:red; color:white;" onClick="payWithRave()">Pay</button>
               
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
                                                    window.location.href = "paymentconfirmation.php?cartid=<?php echo $cartid."&email=".$email."&servicename=".$servicename."&subservicename=".$subservicename."&amount=".$amount; ?>";     // redirect to a success page
                                                } else {
                                                    // redirect to a failure page.
                                                }
                                
                                                x.close(); // use this to close the modal immediately after payment.
                                            }
                                        });
                                    }
                                </script>
              
              
          </form>
          
          
          
          </div>
          
          
          
          
          
          
          
          
          
          <?php
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