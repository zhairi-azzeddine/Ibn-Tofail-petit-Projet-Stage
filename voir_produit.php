<?php
include("inc/header.php");
// include("london.php");
?>
<?php 
       $con=mysqli_connect("localhost","root");
        mysqli_select_db($con,"db");

        $query="select * from add_product_admin";
      $select=$con->query($query); 
      $rows=null;
      while($row=mysqli_fetch_assoc($select))
      {
        $rows[]=$row;
      }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Document</title>
  <style>
  .card-body img{
    width: 100%;
    height: 100%;
  }
  .card-body{
    height: 100%;
  }
  .card-body button{
    width: 100%;
    height: 100%;
  }
  .card{
    height: 100%;
    
  }
  </style>
</head>
<body>

<div class="row">
<?php

foreach($rows as $data)
{
?>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <center>  <img src="images/<?php echo $data['image'] ?>" alt="">
        <p class="card-text"><?php echo $data['textdes'] ?></p>
        <a href="demmande_produit.php?id=<?php echo $data['idproduit'] ?>"><button type="button" class="btn btn-primary btn-lg btn-block">demmander</button></a></center>
        
        <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'produit')"><a style="text-decoration: none;" href="add_product_admin.php" class="w3-bar-item w3-button"><i class="fa fa-product-hunt" aria-hidden="true"></i> <b>Produit</b></a></button>
        </div>
    </div>
  </div>
<?php } ?>

</div>

</body>
</html>