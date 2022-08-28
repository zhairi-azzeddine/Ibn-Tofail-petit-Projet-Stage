<?php 
ob_start();//Turns on output buffering
session_start();

$timezone = date_default_timezone_set("America/New_York");

$con = mysqli_connect("localhost","root","","DB");//Connection variable

if (mysqli_connect_errno()) {
	echo "failed to connect: " . mysqli_connect_errno();
}

$num_achat = "";
$Article = "";
$vendeur = "";
$prix = 0;
$quantite = 0;
$date = "";
$error_array = array(); //holds error message

?>