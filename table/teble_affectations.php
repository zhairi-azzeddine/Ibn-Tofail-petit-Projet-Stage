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
<?php $query_affectations = mysqli_query($con, "SELECT * FROM affectation ");//WHERE num_de_commande ='$num_achat'
            $affectations= mysqli_fetch_array($query_affectations); ?>
            <table class="w3-table-all w3-card-4">
              <tr class="w3-purple">
                <td>id</td>
                <td>Article</td>
                <td>La quantité</td>
                <td>Le bénéficiaire</td>
                <td>Date</td>
              </tr>
              <?php while($rows = $query_affectations->fetch_assoc())  :?>
               
              <tr>
                <td> <?php echo $rows['id']; ?></td>
                <td> <?php echo $rows['Article']; ?></td>
                <td> <?php echo $rows['La quantité']; ?></td>
                <td> <?php echo $rows['Le bénéficiaire']; ?></td>
                <td> <?php echo $rows['date']; ?></td>
              </tr>
              <?php endwhile; ?>
            </table>
</body>
</html>