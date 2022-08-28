<?php
require 'config/config.php';





  // if (isset($_SESSION['username'])) {
  //   $userLoggedIn = $_SESSION['username'];
  //   $user_details_query =mysqli_query($con, "SELECT * FROM users WHERE username ='$userLoggedIn'");
  //   $user= mysqli_fetch_array($user_details_query);
  // } else {
  //   header("Location: ../regester.php");
  // }

  if (!isset($_SESSION['log_email'])) {
    header('location: regester.php');
  }else{
    $userLoggedIn = $_SESSION['log_email'];
    $user_details_query =mysqli_query($con, "SELECT * FROM users WHERE email ='$userLoggedIn'");
    $user= mysqli_fetch_array($user_details_query);
  }
  


 ?>

<!DOCTYPE html>
<html>
<title>Home Page</title>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/w3.css">
<script src="https://kit.fontawesome.com/87633b0226.js" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">


<script>

function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
  // var img = document.getElementById('img');
  // img.style.display = "none";
  // openCity('London');
  
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
  
}
</script>
<script>

function openCity(evt, cityName , test) {
 

  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-purple", ""); 
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-purple";

  // var y = document.getElementById(test);
  //  if(y.style.display = "none")
  //     y.(test).style.display = "block";
    


  // var img = document.getElementById('img');
  // img.style.display = "none";
}

  
</script>
<!-- <script>

   function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(cityName).style.display = "block";
}
</script> -->
</head>

<body>
	<style>
		.btn_close:hover {
			background-color: #ff3838;
		}
		/*statistiques*/
		.column{
			background-color: #fff;
			padding: 5px;
			border: 1px solid #D3D3D3;
			border-radius: 5px;
			box-shadow: 2px 2px 1px #D3D3D3;
			z-index: -1;
			width: 100%;
			height: 260px;
			float: left;
			margin: 5px 5px 5px 0;


			}

      .column table tr td {
        border : 1px solid black;
        border-collapse: collapse;
      }
	</style>

<!-- <div class="w3-sidebar w3-bar-block w3-card w3-animate-left " style="display:none;" id="mySidebar"> -->
  
  <div class="w3-sidebar w3-bar-block w3-light-grey w3-card w3-animate-left" style="width:130px;display:none;" id="mySidebar">
  	<button class="btn_close" style="float: right; border: none;height: 50px;width: 50px;" 
  onclick="w3_close()">&times;</button>
  <h5 class="w3-bar-item"><i class="fa fa-slideshare" aria-hidden="true"></i><b>Menu</b><i class="fa fa-slideshare" aria-hidden="true"></i></h5>
 <?php if($user['statut']== "Administrateur") :?>

  <button  class="w3-bar-item w3-button tablink" onclick="openCity(event, 'London')"><a style="text-decoration: none;" href="#" class="w3-bar-item w3-button "><i class="fa fa-money" aria-hidden="true"></i> 

   <b>Inscription Commade</b></a></button>
  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Paris')"><a style="text-decoration: none;" href="#" class="w3-bar-item w3-button"><i class="fa fa-address-card" aria-hidden="true"></i> 

  <b>Affectation Commade  </b></a></button>
  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Tokyo')"><a style="text-decoration: none;" href="#" class="w3-bar-item w3-button"><i class="fa fa-paper-plane" aria-hidden="true"></i> 
   <b>Reparation Commade</b></a></button>

 <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'produit')"><a style="text-decoration: none;" href="add_product_admin.php" class="w3-bar-item w3-button"><i class="fa fa-product-hunt" aria-hidden="true"></i> <b> Ajouter Produit</b></a></button>


  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Statistiques')"><a style="text-decoration: none;" href="#" class="w3-bar-item w3-button"><i class="fa fa-pie-chart" aria-hidden="true"></i><b> Statistiques</b></a></button>

  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Annulation')"><a style="text-decoration: none;" href="#" class="w3-bar-item w3-button"><i class="fa fa-window-close" aria-hidden="true"></i> <b> Annulation Commande</b></a></button>

  <?php endif; ?>

   
   <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'produit')"><a style="text-decoration: none;" href="voir_produit.php" class="w3-bar-item w3-button"><i class="fa fa-product-hunt" aria-hidden="true"></i> <b> Produit</b></a></button>

   



  <button class="w3-bar-item w3-button tablink" ><a href="inc/logout.php" class="w3-bar-item w3-button"><i class="fa fa-sign-out" aria-hidden="true"></i> <b>Fermer</b></a></button>
</div>


  
  <!-- <a href="#" class="w3-bar-item w3-button">Annulation d'achat</a>
  <a href="#" class="w3-bar-item w3-button">Statistiques</a>
  <a href="#" class="w3-bar-item w3-button">Fermer</a>
</div> -->

<div id="main">

<div class="w3-purple" style="height: 90px;">
  <button style="float: left;" id="openNav" class="w3-button w3-purple w3-xlarge" onclick="w3_open()">&#9776;</button>
   <div style="float: right;height: 140;margin: 18px 19px 19px 0;">
    <a href="index.php"><img src="images/abc.JPG" width="80px;"></a>
  </div>
  <div class="w3-container" style="float: left;    margin: 20px 0px 0 -19px;">
   
    <h4>Statut du compte : <small style="color: yellow;font-size: 17px"><?php echo $user['statut']; ?></small> </h4>

  </div>
  
</div>


<!-- <img src="FP.jpg" id="img" width="100%"> -->
