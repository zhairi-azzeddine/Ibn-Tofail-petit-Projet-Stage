<?php
include("inc/header.php");
// include("london.php");
?>
<?php 

       $con=mysqli_connect("localhost","root");
        mysqli_select_db($con,"DB");
        if(isset($_POST['ajou']))
        {
        $image=$_FILES['exampleFormControlFile1']['name'];
        move_uploaded_file($_FILES['exampleFormControlFile1']['tmp_name'],"images/"."$image");
        $idproduit=$_POST['exampleInputEmail1'];
        $text=$_POST['exampleFormControlTextarea1'];
        $query="insert into add_product_admin values($idproduit,'$image','$text')";
        if($idproduit!="" && $text!="")
        {
         mysqli_query($con,$query);
       //$select=$con->query($query); 
       echo('<script>alert("bien ajouter")</script>');
         echo("<script> window.location.href='add_product_admin.php'; </script>");

        }else{
          echo('<script>alert("element vide!!")</script>');
        }
      }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Document</title>
  <style>
  form{
    padding: 89px 89px;
  }
  </style>
</head> 
<body>
<form  method="POST" enctype="multipart/form-data">
<center>
<form>

  <div class="form-group">
    <label for="exampleFormControlFile1">image de produit</label>
    <input type="file" class="form-control-file" name="exampleFormControlFile1" id="exampleFormControlFile1">
  </div>
</form>
 <br>
 <div class="form-group">
    <label for="exampleInputEmail1">ID produit</label>
    <input type="text" class="form-control" name="exampleInputEmail1"   id="exampleInputEmail1"  placeholder="Enter id produit">
  </div>
  <br>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Name produit</label>
    <textarea class="form-control" name="exampleFormControlTextarea1" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <br><br>
  <button type="submit" name="ajou" class="btn btn-primary btn-lg btn-block">Ajouter</button>
  </center>
</form>
</body>
</html>