
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
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
     <link href='https://fonts.googleapis.com/css?family=Helvetica' rel='stylesheet'>
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
  height: 80vh;
  min-height: 500px;
background-image:url('img/bg.jpg');
background-size:cover;
  background-position: center;
  background-repeat: no-repeat;
}



      
  </style>
  <script src="js/sweetalert.min.js"></script>
</head>

<body>


<?php include('navbar.php'); ?>


      
<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
          
        <h1 class="font-weight-800 animate__animated animate__fadeInDown " style="font-weight:800; font-size:70px; color:white;"> Noron Marque </h1>
        <p class="animate__animated animate__fadeInUp" style=" color:white;">   A team of individuals with diverse specialties and backgrounds, working with clients to leverage on resources, develop capacities and redefine change. </p>
    <a href="aboutus.php" class="btn btn-outline-white"> Learn More</a>
            <a href="users/signup.php" class="btn btn-outline-white" > Register Today </a>
      </div>
    </div>
  </div>
</header>  
    



<section  style="background-image: url('img/coachtrans.jpg'); background-size:cover; background-position:center; background-repeat: no-repeat; padding: 70px;
    padding-bottom: 90px;">
              
              <br><br>

          <div class="container">
              
              
              <h2 class="animate__animated animate__slideInLeft" style="font-weight:800; text-align:center;" > <i class="fa fa-globe"></i> Our Programs </h2>
              <br>
              
              <p class="animate__animated animate__slideInDown" style=" text-align:center;"  >
                  Noron Marque offers business coaching workshop programs that are designed to step up progress and accelerate results in both your business and personal life. Our global community of successful entrepreneurs, our highly experienced coaches, our arsenal of proprietary tools, and our deep-dive strategy sessions are the cornerstones of our programs’ success.
              </p>
              
            <br>
            
            
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
    </section>
  
           
   
       
       <div class="container-fluid" style="overflow:hidden;">
           
           <div class="row">
               
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

 
    
    

  <script type="text/javascript">
$(document).ready(function() {
    
	$(".rating-wrap").shorten();
	
	$(".rating-wrap").shorten({showChars: 150});

 });
 
 
 (function($) {
    $.fn.shorten = function(settings) {
        "use strict";

        var config = {
            showChars: 400,
            minHideChars: 10,
            ellipsesText: "...",
            moreText: "",
            lessText: "less",
            onLess: function() {},
            onMore: function() {},
            errMsg: null,
            force: false
        };

        if (settings) {
            $.extend(config, settings);
        }

        if ($(this).data('jquery.shorten') && !config.force) {
            return false;
        }
        $(this).data('jquery.shorten', true);

        $(document).off("click", '.morelink');

        $(document).on({
            click: function() {

                var $this = $(this);
                if ($this.hasClass('less')) {
                    $this.removeClass('less');
                    $this.html(config.moreText);
                    $this.parent().prev().animate({'height':'0'+'%'}, function () { $this.parent().prev().prev().show(); }).hide('fast', function() {
                        config.onLess();
                      });

                } else {
                    $this.addClass('less');
                    $this.html(config.lessText);
                    $this.parent().prev().animate({'height':'100'+'%'}, function () { $this.parent().prev().prev().hide(); }).show('fast', function() {
                        config.onMore();
                      });
                }
                return false;
            }
        }, '.morelink');

        return this.each(function() {
            var $this = $(this);

            var content = $this.html();
            var contentlen = $this.text().length;
            if (contentlen > config.showChars + config.minHideChars) {
                var c = content.substr(0, config.showChars);
                if (c.indexOf('<') >= 0) // If there's HTML don't want to cut it
                {
                    var inTag = false; // I'm in a tag?
                    var bag = ''; // Put the characters to be shown here
                    var countChars = 0; // Current bag size
                    var openTags = []; // Stack for opened tags, so I can close them later
                    var tagName = null;

                    for (var i = 0, r = 0; r <= config.showChars; i++) {
                        if (content[i] == '<' && !inTag) {
                            inTag = true;

                            // This could be "tag" or "/tag"
                            tagName = content.substring(i + 1, content.indexOf('>', i));

                            // If its a closing tag
                            if (tagName[0] == '/') {


                                if (tagName != '/' + openTags[0]) {
                                    config.errMsg = 'ERROR en HTML: the top of the stack should be the tag that closes';
                                } else {
                                    openTags.shift(); // Pops the last tag from the open tag stack (the tag is closed in the retult HTML!)
                                }

                            } else {
                                // There are some nasty tags that don't have a close tag like <br/>
                                if (tagName.toLowerCase() != 'br') {
                                    openTags.unshift(tagName); // Add to start the name of the tag that opens
                                }
                            }
                        }
                        if (inTag && content[i] == '>') {
                            inTag = false;
                        }

                        if (inTag) { bag += content.charAt(i); } // Add tag name chars to the result
                        else {
                            r++;
                            if (countChars <= config.showChars) {
                                bag += content.charAt(i); // Fix to ie 7 not allowing you to reference string characters using the []
                                countChars++;
                            } else // Now I have the characters needed
                            {
                                if (openTags.length > 0) // I have unclosed tags
                                {
                                    //console.log('They were open tags');
                                    //console.log(openTags);
                                    for (j = 0; j < openTags.length; j++) {
                                        //console.log('Cierro tag ' + openTags[j]);
                                        bag += '</' + openTags[j] + '>'; // Close all tags that were opened

                                        // You could shift the tag from the stack to check if you end with an empty stack, that means you have closed all open tags
                                    }
                                    break;
                                }
                            }
                        }
                    }
                    c = $('<div/>').html(bag + '<span class="ellip">' + config.ellipsesText + '</span>').html();
                }else{
                    c+=config.ellipsesText;
                }

                var html = '<div class="shortcontent">' + c +
                    '</div><div class="allcontent">' + content +
                    '</div><span><a href="javascript://nop/" class="morelink">' + config.moreText + '</a></span>';

                $this.html(html);
                $this.find(".allcontent").hide(); // Hide all text
                $('.shortcontent p:last', $this).css('margin-bottom', 0); //Remove bottom margin on last paragraph as it's likely shortened
            }
        });

    };

})(jQuery);
</script>


  <script type="text/javascript">

    // Animations initialization
    new WOW().init();
      
  
  </script>
</body>

</html>
