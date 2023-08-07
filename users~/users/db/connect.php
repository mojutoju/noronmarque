<?php

$servername = "localhost";
$username = "noroerih_noronmq";
$password = "noronmarque2020";
$db = "noroerih_noronmarque";

$dbc = mysqli_connect($servername,$username,$password,$db);
    
if($dbc){

} else{
	die("dbcnecton failed: ".mysqli_connect_error());
}


?>