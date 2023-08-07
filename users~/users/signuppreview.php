<?php include('/db/connect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
  <title>Create an Account - Noron Marque : A team of individuals with diverse specialties and backgrounds, working with clients to leverage on resources, develop capacities and redefine change.</title>
  <link rel="icon" href="/img/99.png" type="image/png" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
     <link href='https://fonts.googleapis.com/css?family=Helvetica' rel='stylesheet'>
  <!-- Bootstrap core CSS -->
  <!-- Bootstrap core CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="/css/style.min.css" rel="stylesheet">
  <style type="text/css">
  
  
  body{
      font-family: 'Helvetica';
  }
  
  
  .navbar-nav .nav-link {
    margin-right: 14px;
    margin-left: 14px;
}


.navbar-nav .nav-item  .nav-link :hover{
    
border-bottom:3px solid white;
}

.navbar{
    -webkit-box-shadow: -4px 11px 22px -3px rgba(0,0,0,0.28);
-moz-box-shadow: -4px 11px 22px -3px rgba(0,0,0,0.28);
box-shadow: -4px 11px 22px -3px rgba(0,0,0,0.28);
}




.navbar li a:hover {

border-bottom : 2px solid dodgerblue;
}
      
      
      .masthead {
  height: 50vh;
  min-height: 500px;
  background-image: url('/img/bgblue.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

      .vertical{
	height: 100%;
	position: absolute;
	border-left: 2px solid white;
      }
      
      
      .main{
          max-width: 1000px;
    padding: 50px 10px;
    display: flex;
    flex-flow: column nowrap;
    justify-content: center;
    align-content: center;
    align-items: center;
    margin: auto;
      }
  </style>
  <script src="js/sweetalert.min.js"></script>
</head>

<body style="background-color:#131313;">
    
    
    
  

<div class="main">
    
    <div class="container">
    
   <center> 
    <a href="/index.php">
    <img src="/img/nmnew.png" class="img-fluid" width="300px" >  </a>  </center>
    
    <br>
    
    <div class="row">
        
        
        <div class="col-md-6 mb-2">
            
            <h3 style="color:white;"> Congratulations </h3>
            <p style="color:white;"> Kindly make payment to become a fully registered user </p>
            <hr style="color:white; background-color:white;">
            
            
            <?php
            if(isset($_POST['signup'])){
                  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  
  $password = mysqli_real_escape_string($dbc, $_POST['password']);
  $password = md5($password);
  $confirmpassword = $_POST['cpassword'];
  $cpassword = mysqli_real_escape_string($dbc, $_POST['cpassword']);
  $phoneno =$_POST['phoneno'];
$state = $_POST['state'];
$status = $_POST['status'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];
$amount = 1;


            
            
            ?>
            
             <?php
							        $txref = $email."-".$phoneno; //this is a unique reference for each payment
							    ?>
            
            <form method="POST">
                  <script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
                <div class="row">
                    
                    
                    <div class="col-md-6 mb-2">
                        <input type="text" class="form-control" name="fname" value="<?php echo $fname; ?>" readonly>
                    </div>
                    
                    
                      
                     <div class="col-md-6 mb-2">
                        <input type="text" class="form-control" name="lname" value="<?php echo $lname; ?>" readonly>
                    </div>
                    
                    
                      
    <div class="col-md-6 mb-2">
                        <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" readonly>
                    </div>
                    
                    
                      
                   <div class="col-md-6 mb-2">
                        <input type="password" class="form-control" name="password"  value="<?php echo $password; ?>" readonly>
                    </div>
                    
                      
            <div class="col-md-6 mb-2">
                        <input type="text" class="form-control" name="cpassword" value="<?php echo $confirmpassword; ?>" readonly>
                    </div>
                    
                    
                    <div class="col-md-6 mb-2">
                         <input type="text" class="form-control" name="phoneno" value="<?php echo $phoneno; ?>"   onkeydown="return ( event.ctrlKey || event.altKey || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106)
                    || (event.keyCode==8) || (event.keyCode==9) 
                    || (event.keyCode>34 && event.keyCode<40) 
                    || (event.keyCode==46) )" readonly > 
                    </div>
                    
                    
                 
                    </div>
                    
                    <label style="color:white;"> State of Residence </label>
                     <select name="state" class="form-control" readonly>
                            <option value="<?php echo $state; ?>"> <?php echo $state; ?> </option>
                               
                        </select>
                        
                    <input type="hidden" name="status" value="approved">
                    
                    <label style="color:white;">
                        Amount to Pay
                    </label>
                    <input type="text" name="amount" class="form-control" value="<?php echo $amount; ?>" readonly >
                    
                    <br>
                   <button type="button" class="btn btn" style="background:blue; color:white;" onClick="payWithRave()">Make Payment</button>
                    
                </div>
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
                                                    window.location.href = "paymentsuccess.php?fname=<?php echo $fname."&lname=".$lname."&email=".$email."&password=".$password."&cpassword=".$confirmpassword."&phoneno=".$phoneno."&state=".$state."&status=".$status; ?>";     // redirect to a success page
                                                } else {
                                                    // redirect to a failure page.
                                                }
                                
                                                x.close(); // use this to close the modal immediately after payment.
                                            }
                                        });
                                    }
                                </script>
                                <!-- Rave Pay ends here -->
            
                
                
                
                
                
            </form>
            
            <?php } ?>
            <div class="col">
                
            </div>
            
            
            <div class="col-md-5 mb-2">
                
                
                
                
          <div class="card" style="height:62vh; background-image:url('/img/nmstaff.jpg'); background-size:cover; background-repeat:no-repeat; border-radius:12px;">
              
              <div class="text" style="    position: absolute;
    right: 0;
    left: 0;
    bottom: 0;
    padding: 20px;">
                  Noron Marque
              </div>
          </div>
                
            </div>
            
        </div>
        
        
        
        
    </div>
    
</div>


    
</div>
      

  <script type="text/javascript">

    // Animations initialization
    new WOW().init();
      
  
  </script>
</body>

</html>


