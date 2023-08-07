<?php include('db/connect.php');
session_start();



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Noron Marque - A team of individuals with diverse specialties and backgrounds, working with clients to leverage on resources, develop capacities and redefine change.</title>
  <!-- Font Awesome -->
     <link rel="icon" href="/img/9.png" type="image/png"/>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
     <link rel="icon" href="/img/9.png" type="image/png"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link href='https://fonts.googleapis.com/css?family=Barlow Semi Condensed' rel='stylesheet'>
  <!-- Bootstrap core CSS -->

  

    
    <style>
     
     
li.nav-item.active {
    color: blue;
}

.file {
  visibility: hidden;
  position: absolute;
}
    </style>
    <script src="js/sweetalert.min.js"> </script>
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
         if(isset($_POST['ebooks'])){
             
            $title = $_POST['title'];
            
            $ebook = $_POST['ebook_id'];
            
             
                 $file = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $type=$_FILES['file']['type'];
$limit_size = 10000;
    $tmp_name = $_FILES['file']['tmp_name'];
    $fp      = fopen($tmp_name, 'r');

    $content = fread($fp, filesize($tmp_name));

    $content = addslashes($content);

    fclose($fp);

$allowed =  array('jpg', 'png', 'jpeg', 'svg', 'gif'); //allowed types
$ext = pathinfo($file, PATHINFO_EXTENSION);//extension checking

             
                     
                        
$check = "SELECT * FROM `bookcover` WHERE title ='".$title."' AND ebook_id = '".$ebook."' ";

$rs = mysqli_query($dbc,$check);

$data = mysqli_fetch_array($rs, MYSQLI_NUM);

if($data[0] > 1) {

   
   ?>
    
<script>
   
    swal({
          text: "Error",
  title: "<?php echo $title; ?> already exists ",

  icon: "error",
  button: "Close",
});

</script>  


  <?php 
          
}else{
if(!in_array($ext,$allowed)){

   
   ?>
    
<script>
   
    swal({
          text: "Error",
  title: "Invalid format make sure you upload a clear jpg, png, jpeg format ",

  icon: "error",
  button: "Close",
});


</script>  


<?php

}
else
{

  if($_FILES['file']['size'] <= $limit_size)
  {
   ?>
   
   
    
<script>
   
    swal({
          text: " Size is less than 10mb ",
  title: "Invalid Size ",

  icon: "error",
  button: "Close",
});

</script>  

   
   
   
   
   <?php




  }else{

  



    if($file){
    $location = "bookcovers/$file";
    move_uploaded_file($tmp_name, $location);

             
             
                $insert = mysqli_query($dbc, "INSERT INTO `bookcover` VALUES (NULL, '$title', '$ebook' ,'$file', $size , '$content', '$type', '$location',  now()) ");
             
             
             if($insert){
         
         ?>
         
         
         
         
         <script>
   
    swal({
          text: "Success ",
  title: "<?php echo $title; ?> has been Uploaded ",

  icon: "success",
  button: "Close",
});

</script>  

         
         
         
         
         
         <?php }else{
         }
         }
  }
}
}
}
         ?>

 
      <?php include('navbar.php'); ?>
          <div class="main-panel">
          <div class="content-wrapper">
         
            
             <h3 class="page-title">
                <span class="page-title-icon  text-white mr-2" style="background:blue;">
                  <i class="fa fa-book"></i>
                </span> Upload E-Book Cover </h3>
            
            <hr>
            
            
              <form name="ebooks" method="POST" action="uploadbookcover.php"  enctype="multipart/form-data">
                
                
                
                <div class="form-group">
                                    <label style="font-size:14px;"> Title </label>
                    <input type="text" name="title" class="form-control" placeholder="Book Cover Title" style="font-size:13px;" required>
                    
                </div>
                
                
                
                
               
          	<div class="form-group">
          	         <label style="font-size:14px;"> Assign E-books </label>
	
      
                        <select name="ebook_id" class="form-control" required>
                            
                           <option value=""> - Select Ebook Name - </option>
                    
<?php


$assign = mysqli_query($dbc,"SELECT * FROM `ebooks` WHERE 1  ");
if(mysqli_num_rows($assign) > 0){
    $u = 1;
 while($rows = mysqli_fetch_assoc($assign)){

$ebookid = $rows['ebook_id'];
$docname = $rows['docname'];
$amount = $rows['amount'];
$file = $rows['file'];
$status = $rows['status'];

    ?>
    
    <option value="<?php echo $ebookid; ?>">  <?php echo $docname; ?> </option>
    
    <?php $u++; }} ?> 
                            
                        </select>
                        
                        
                    </div>
           

  
                
                
            
          	<div class="form-group">
          	         <label style="font-size:14px;"> Upload Cover (1920 x 1080) Max: 10mb </label>
	
    		<input type="file" name="file" class="form-control" placeholder='Choose a file...' required="" />			
           

	</div>
            
            
            
         
            <div class="form-group">
                
                <input type="submit" class="btn btn" style="background-color:blue; color:white;" name="ebooks" value="Upload">
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


$(function () {
        $("#chkPassport").click(function () {
            if ($(this).is(":checked")) {
                $("#txtPassportNumber").removeAttr("disabled");
                $("#txtPassportNumber").focus();
            } else {
                $("#txtPassportNumber").attr("disabled", "disabled");
            }
        });
    });

function bs_input_file() {
	$(".input-file").before(
		function() {
			if ( ! $(this).prev().hasClass('input-ghost') ) {
				var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
				element.attr("name",$(this).attr("name"));
				element.change(function(){
					element.next(element).find('input').val((element.val()).split('\\').pop());
				});
				$(this).find("button.btn-choose").click(function(){
					element.click();
				});
				$(this).find("button.btn-reset").click(function(){
					element.val(null);
					$(this).parents(".input-file").find('input').val('');
				});
				$(this).find('input').css("cursor","pointer");
				$(this).find('input').mousedown(function() {
					$(this).parents('.input-file').prev().click();
					return false;
				});
				return element;
			}
		}
	);
}
$(function() {
	bs_input_file();
});


  $(function () {
            $("#chkPassport2").click(function () {
                if ($(this).is(":checked")) {
                    $("#dvPassport2").show();
                } else {
                    $("#dvPassport2").hide();
                }
            });
        });




$(document).on("click", ".browse", function() {
  var file = $(this).parents().find(".file");
  file.trigger("click");
});
$('input[type="file"]').change(function(e) {
  var fileName = e.target.files[0].name;
  $("#file").val(fileName);

  var reader = new FileReader();
  reader.onload = function(e) {
    // get loaded data and render thumbnail.
    document.getElementById("preview").src = e.target.result;
  };
  // read the image file as a data URL.
  reader.readAsDataURL(this.files[0]);
});





 
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}




    </script>
          
    <!-- End custom js for this page -->
  </body>
</html>  