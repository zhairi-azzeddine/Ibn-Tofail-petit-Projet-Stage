<?php
require '../config/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
	<?php $user_details_query = mysqli_query($con, "SELECT * FROM reparation ");//WHERE num_de_commande ='$num_achat'
              $user= mysqli_fetch_array($user_details_query); ?>
              <table class="w3-table-all w3-card-4">
                <tr class="w3-gray">
                  <td>id</td>
                 
                  <td>Article</td>
                  <td>client</td>
                  <td>La quantite</td>
                  <td>Date</td>
                </tr>
                <?php while($row = $user_details_query->fetch_assoc())  :?>
                 
                <tr>
                  <td> <?php echo $row['id']; ?></td>
                  
                  <td> <?php echo $row['Article']; ?></td>
                  <td> <?php echo $row['Le vendeur']; ?></td>
                  <td> <?php echo $row['La quantité']; ?></td>
                  <td> <?php echo $row['date']; ?></td>
                </tr>
                <?php endwhile; ?>
              </table>

</body>
</html>