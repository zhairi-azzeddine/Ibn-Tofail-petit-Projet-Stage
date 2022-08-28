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
	<?php $user_details_query = mysqli_query($con, "SELECT * FROM Annulation ");//WHERE num_de_commande ='$num_achat'
      $user= mysqli_fetch_array($user_details_query); ?>
      <table class="w3-table-all w3-card-4">
        <tr class="w3-purple">
          <td>id</td>
          <td>num de commande</td>
          <td>Date</td>
        </tr>
        <?php while($row = $user_details_query->fetch_assoc())  :?>
         
        <tr>
          <td> <?php echo $row['id']; ?></td>
          <td> <?php echo $row['num_de_commande']; ?></td>
          <td> <?php echo $row['date']; ?></td>
        </tr>
        <?php endwhile; ?>
      </table>


</body>
</html>