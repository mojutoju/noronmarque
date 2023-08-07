<?php include('db/connect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Explore Noron Marque Careers</title>
  <link rel="icon" href="img/99.png" type="image/png" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
     <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Gotham' rel='stylesheet'>
  <!-- Bootstrap core CSS -->
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css">
  
  
  body{
      font-family: 'Montserrat';
     
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
  height: 70vh;
  min-height: 495px;
background-image: linear-gradient(rgba(0, 0, 0, 0.5),
                       rgba(0, 0, 0, 0.5)), url('https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'); 
background-size:cover;
  background-position: center;
  background-repeat: no-repeat;
}



.mastheads {
  height: 20vh;
  min-height: 260px;
background-image:url('img/careerz.jpg');
background-size:cover;
  background-position: 30% 20% ;
  background-repeat: no-repeat;
}



#program:hover {
     background: #0F52BA;
   color: white; 
}

/* Bottom left text */
.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
}

    
    
    .card {
	margin: 0 auto;
	border: none;
}
.card .carousel-item {
	min-height: 190px;
}
.card .carousel-caption {
	padding: 0;
	right: 15px;
	left: 15px;
	top: 15px;
	color: #3d3d3d;
	border: 1px solid #ccc;
	min-height:175px;
	padding: 15px;
}
.card .carousel-caption .col-sm-3 {
	display: flex;
	align-items: center;
}
.card .carousel-caption .col-sm-9 {
	text-align: left;
}
.card .carousel-control-prev, .card .carousel-control-next {
	color: #3d3d3d !important;
	opacity: 1 !important;
}
.carousel-control-prev-icon, .carousel-control-next-icon {
	background-image: none;
	color: #fff;
	font-size: 14px;
	background-color: #cd3a54;
	height: 32px;
	line-height: 32px;
	width: 32px;
}
.carousel-control-prev-icon:hover, .carousel-control-next-icon:hover {
	opacity: 0.85;
}
.carousel-control-prev {
	left: 40%;
	top: 110%;
}
.carousel-control-next {
	right: 40%;
	top: 110%;
}
.midline {
	width: 60px;
	border-top: 1px solid #d43025;
}
.carousel-caption h2 {
	font-size: 14px;
}
.carousel-caption h2 span {
	color: #cd3a54;
}
 @media (min-width: 320px) and (max-width: 575px) {
.carousel-caption {
	position: relative;
}
.card .carousel-caption {
	left: 0;
	top: 0;
	margin-bottom: 15px;
}
.card .carousel-caption img {
	margin: 0 auto;
}
.carousel-control-prev {
	left: 35%;
	top: 105%;
}
.carousel-control-next {
	right: 35%;
	top: 105%;
}
.card .carousel-caption h3 {
	margin-top: 0;
	font-size: 16px;
	font-weight: 700;
}
}
@media (min-width: 576px) and (max-width: 767px) {
.carousel-caption {
	position: relative;
}
.card .carousel-caption {
	left: 0;
	top: 0;
	margin-bottom: 15px;
}
.card .carousel-caption img {
	margin: 0 auto;
}
.card .carousel-caption h3, .card .carousel-caption small {
	text-align: center;
}
.carousel-control-prev {
	left: 35%;
	top: 105%;
}
.carousel-control-next {
	right: 35%;
	top: 105%;
}
}
@media (min-width: 767px) and (max-width: 991px) {
.card .carousel-caption h3 {
	margin-top: 0;
	font-size: 16px;
	font-weight: 700;
}
}


.options {
    min-width: 300px;
    height: 300px;
    background: white;
    margin: 6px;
    border-radius: 10px;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
    position: relative;
}

.items {
    display: flex;
    overflow-x: auto;
}
      
      .items::-webkit-scrollbar{
          display:none;
      }
      
      
      
      
      
      
      
  </style>
  <script src="js/sweetalert.min.js"></script>
</head>

<body>


<?php include('navbar.php'); ?>


   
<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
    
    <br><br><br><br><br><br>
    
    
    
  <div class="container h-90" >

    <div class="row h-100 align-items-center">
          
      <div class="col-md-8 ">
            
        <h5 class="font-weight-800 animate__animated animate__fadeInLeft " style="font-weight:800; font-size:30px; color:white; letter-spacing: 3px;"> EXPLORE  <strong style="color:blue;"> NORON MARQUE </strong>  CAREERS </h5>
        <hr style="background:white; color:white;">
        <h5 class="animate__animated animate__fadeInRight" style=" color:white; font-weight:800; line-height:29px;">  Take this quick 10-question quiz to discover the career path at Noron Marque that best fits you. </h5>
  
 
  <div>
       <a href="#quiz" class="btn btn" style="background:blue; color: white;"> Find your Fit </a>
 
  </div>
  
   

      
      
      
      
    </div>
  </div>
  
  </div>
  
</header>  





<br><br>


<div class="container animate__animated animate__fadeInDown">

<h4 style="font-weight:800;"> Join Our Team </h4>
<hr class="blue accent-4 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> 

<div class="row">
    
    <div class="col-md-5 mb-3">
    
    <h3 style="line-height:40px; font-size:30px; font-weight:800;">
        At Noron Marque, we believe everyone’s voice deserves to be heard. </h3>
<br>

<p> 
 Our values unite us: trust, customer success, innovation, and equality.  <br>
And we’re on a mission to build the most innovative teams in the world that reflect the communities in which we live and work. </p>

<div class="accordion" id="myAccordion">
  
        <div class="card-headers" id="headingOne">
            <h2 class="mb-0">
                <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" style="color:black;">1. Individual Uniqueness </button>
            </h2>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#myAccordion">
            <div class="card-body">
                <p> Be Your Authentic Self. That’s what we want to see. Our culture celebrates and supports the differences that make each of us unique. It iss how we build better products for the world and sustainable career development for you. </p>
            </div>
        </div>

   
        <div class="card-headers" id="headingTwo">
            <h2 class="mb-0">
                <button type="button" class="btn btn-link " data-toggle="collapse" data-target="#collapseTwo" style="color:black;">2. Champion the Mission </button>
            </h2>
        </div>
        <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#myAccordion">
            <div class="card-body">
                <p> We are united with our community to create a world where anyone can belong anywhere. Our deep commitment to our mission helps us accomplish incredible things. It pushes us beyond our comfort zones, encourages us to learn new skills, and emboldens us to tackle big challenges. We embrace opportunities to grow, make room for uncomfortable conversations, and respect each other’s perspectives  even when we do not achieve a consensus.</p>
            </div>
        </div>
    

        <div class="card-headers" id="headingThree">
            <h2 class="mb-0">
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" style="color:black;">3. Embrace the Adventure</button>
            </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#myAccordion">
            <div class="card-body">
                <p> We are driven by curiosity, optimism, and the belief that every person can grow under the right . A world where anyone can belong anywhere starts with a workplace where you feel welcome. We are determined and creative in transforming our bold ambitions into reality. </p>
            </div>
        </div>
        
        
          <div class="card-headers" id="headingFour"> 
            <h2 class="mb-0">
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" style="color:black;">4. Live your best life</button>
            </h2>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#myAccordion">
            <div class="card-body">
                <p>
                    There is life at work and life outside of work. We want everyone to be healthy, travel often, get time to give back, and have the financial resources and support they need. 

We want people to thrive at Noron Marque; we believe that you do your best work when you feel your best. Here are just a few benefits that we’re proud to provide our team.

                </p>
            </div>
        </div>

</div>


    </div>
    
    <div class="col"></div>
    
    <div class="col-md-6 mb-3">
        
        <img src="https://serving.photos.photobox.com/389299239604aefd839e2ee75ad0f2ae463e653c50339c67b9dcb5632ab24a8b7df4d0b8.jpg" class="img-fluid">
    </div>
    
    
    
    
</div>


</div>




    



<div class="main-section animate__animated animate__fadeInLeft" style="background-color: #fafafa  ; padding:30px;">
    
    
    <div class="container">
 

    
    <div class="row">
        
      
        
        <div class="col-md-5 mb-3">
               <h3 style="font-weight:800;"> Career Evolution & Development </h3>
    
   <hr class="blue accent-4 mb-4 mt-0 d-inline-block mx-auto" style="width: 80px;"> 
            
    <p>
        At Noron Marque, we are creating and growing a culture of career development and learning by offering to our employees training programs, exchange programs and and internal mobility. We’re hyper-collaborative in our pursuit to innovate a better tomorrow for all.
    </p>
    
    
        
     
            
           
                
                
                <h6 style="font-weight:800;"> Why You’ll Love Working with Us </h6>
                <hr>
                <p> Big Impact: Our team is small, so the work you do will materially impact how successful we are as a company. </p>
                

            
   
                
                
                <h6 style="font-weight:800;"> Growth </h6>
                <hr>
                <p> In addition to offering great tools to do your job, we offer an annual education budget to develop your skills. </p>
                
          
            
    
        
       
                
                <h6 style="font-weight:800;"> Remote </h6>
                <hr>
                <p> Work where you want to work, so far as productivity is at its optimum level. </p>
                
         
            
            
        </div>
  
    
            
      
        <div class="col"></div>
        
        
        
          <div class="col-md-6 mb-3">
              <img src="img/careerdevs.png" class="img-fluid">
            
        </div>
        
        
        
        
        
        
        
    </div>
    
    
    
    
    
    
    
    
    
    
    <br>
    
    <h2 style="font-weight:800;"> In line with our core values, we <br> </h2>
    
    <HR>
    
    <div class="row">
        
        
        
       <div class="col-md-3 mb-3">
           
           <div class="card" style="padding:20px;">
               <h6> Treat every failure as a learning opportunity. </h6>
           </div>
       </div> 
        
        
           
       <div class="col-md-3 mb-3">
           
           <div class="card" style="padding:20px; background: orange; color:black; ">
               <h6> Fertilize innovation with client inclusion. </h6>
           </div>
       </div> 
        
        
            <div class="col-md-3 mb-3">
           
           <div class="card" style="padding:20px; background: #074EB7; color:white; ">
               <h6> Build honest and transparent relationships </h6>
           </div>
       </div> 
       
       
        <div class="col-md-3 mb-3">
           
           <div class="card" style="padding:20px;">
               <h6> Be passionate but keep the fun in the workplace. </h6>
           </div>
       </div> 
        
        
          <div class="col-md-3 mb-3">
           
           <div class="card" style="padding:20px;  background: #074EB7; color:white; ">
               <h6> Breakdown complexities. </h6>
           </div>
       </div> 
       
       
        
        
            <div class="col-md-3 mb-3">
           
           <div class="card" style="padding:20px; background: black; color:white; ">
               <h6> Are Bold </h6>
           </div>
       </div> 
       
       
        
    </div>
    
    
    

</div>


</div>


<br>


<div class="container animate__animated animate__fadeInRight">
    
    <h2 style="font-weight:800;"> Benefits </h2>
    <hr>
    
    <div class="row">
        
        
        
        
        <div class="col-md-6 mb-3">
            <h5 style="font-weight:bold;"> <i class="	fa fa-gavel"></i> Equity</h5>
            <p>
                You will own a piece of the company that you help create. You will be recognized for your contributions by earning equity in the company.
            </p>
        </div>
        
         <div class="col-md-6 mb-3">
            <h5 style="font-weight:bold;"> <i class="	fa fa-plus-square"></i>  Stay Healthy </h5>
            <p>
         You will get a monthly allowance for your gym membership, meditation, yoga, cooking classes or any activities that get you moving and staying healthy outside of work.
            </p>
        </div>
        
         <div class="col-md-6 mb-3">
            <h5 style="font-weight:bold;"> <i class="	fa fa-heart"></i>  Parental Love</h5>
            <p>
                We offer paid parental leave to all new parents, including adoption.
        
            </p>
        </div>
        
         <div class="col-md-6 mb-3">
            <h5 style="font-weight:bold;"> <i class="	fa fa-handshake-o"></i>  Paid Time Off</h5>
            <p>
    5 Paid holidays, paid sick time and paid maternity leave.
            </p>
        </div>
        
         <div class="col-md-6 mb-3">
            <h5 style="font-weight:bold;"> <i class="	fa fa-calendar"></i>  Flexible Scheduling</h5>
            <p>
        We have as few meetings as possible so you can focus on developing, supporting, or designing at Noron Marque. That also means you play a significant role in your daily schedule.
            </p>
        </div>
        
           
         <div class="col-md-6 mb-3">
            <h5 style="font-weight:bold;"> <i class="	fa fa-group"></i> Company Retreats </h5>
            <p>
                  Spend a week in person with your co-workers. We have two company retreats per year, which we feel provide great team bonding opportunities.

            </p>
        </div>
        
          <div class="col-md-6 mb-3">
            <h5 style="font-weight:bold;"> <i class="	fa fa-laptop"></i> Computer of your choice </h5>
            <p>
    Laptop or desktop, assemble your perfect setup.
            </p>
        </div>
        
        
          <div class="col-md-6 mb-3">
            <h5 style="font-weight:bold;"> <i class="	fa fa-money"></i> Competitive Salary </h5>
            <p>
Get paid well and fairly to do your best work. We always offer a salary range based on industry standard and depending on your experience level. 
            </p>
        </div>
        
        
        
    </div>
    
    
    
    
    
    
    
    
    
    
</div>
    
<br>




<div class="container">
    
    
    <h3 style="font-weight:800;"> Vacancy </h3>
    
    <hr>
    
    <div class="row">
        
<?php

$users = mysqli_query($dbc,"SELECT * FROM `careers` WHERE 1 ORDER BY jobtitle ASC ");
if(mysqli_num_rows($users) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($users)){
$careerid = $rows['careerid'];
$jobtitle = $rows['jobtitle'];
$dept = $rows['dept'];
$description = $rows['description'];
$qualifications = $rows['qualifications'];
$jobtype = $rows['jobtype'];

    ?>
    
  <div class="col-md-4 mb-3">
      
      <div class="card" style="padding:20px;">
          
          
          <h6> <?php echo $jobtitle; ?> </h6>
          
          <a href="viewcareer.php?careerid=<?php echo $careerid; ?>" class="btn btn-primary btn-sm"> Apply </a>
          
      </div>
      
  </div>
    
    <?php 
    $u++;  }}
    ?>
    
    
    
    
    
    </div>
    
    
</div>

  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-4664f2d6-3d78-4652-9bd0-23efa3e1efba"></div>
  
           <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
       
       <?php include('footer.php'); ?>
       
       
       
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

 
    
    

  <script type="text/javascript">
  
  
  
  
  
  
  
       
    $(document).ready(function() {

$("#types").change(function() {
    var val = $(this).val();
    if (val == "0-5years") {
        $("#sizes").html(
        "<option value='10000'>10000</option>   ");
        
    } else if (val == "Above 6years") {
        $("#sizes").html("<option value='16000'> 16000 </option>");


}


    
});


});

  
  
  
  
  
  $(document).ready(function() {
  $('#global-modal').modal('show');
});
  
  
  
  
  
  
  
  
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

 
    
         if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
  
  </script>
</body>

</html>
    