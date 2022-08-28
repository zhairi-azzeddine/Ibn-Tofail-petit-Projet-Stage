
<?php
include("inc/header.php");
// include("london.php");
?>
<?php 


       $con=mysqli_connect("localhost","root");
        mysqli_select_db($con,"db");
        if(!empty($_REQUEST['id']))
        {
$id=$_REQUEST['id'];
        $query="select * from add_product_admin where idproduit=$id";
      $select=$con->query($query); 

 
    $row=mysqli_fetch_assoc($select);      
        $data=$row;
        }
        if(isset($_POST['ajou']))
        {
        $user=$_POST['user'];
        $text=$_POST['text'];
        $query="insert into demander(user,textdes) value('$user','$text')";
        $select=$con->query($query); 
        echo("<script> window.location.href='voir_produit.php'; </script>");
        
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
<form method="POST">

<center>
<img src="images/<?php echo $data['image'] ?>" class="img-fluid" alt="image produit">
  <div class="form-group">
    <label for="exampleFormControlInput1">Name user</label>
    <input name="user" placeholder="entrer user"  type="text" class="form-control" id="exampleFormControlInput1" >
  </div>
 <br>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Name produit</label>
    <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3" ><?php echo $data['textdes'] ?></textarea>
  </div>
  <br><br>
  <button type="submit" name="ajou" class="btn btn-primary btn-lg btn-block" >demander</button>
  </center>
</form>
</body>
</html>