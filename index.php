<?php
include("inc/header.php");
// include("london.php");
   
if($user['statut']!= "Administrateur"){
  
   echo("<script> window.location.href='voir_produit.php'; </script>");
      
 } 
?>


<div class="w3-container">
<div style="margin-left:130px">
  <!-- <div class="w3-padding">Vertical Tab Example (sidebar)</div> -->
  <div id="London" class="w3-container city" style="display: none;">
  <!-- =============================================================== -->
                           <!-- inscription -->
  <!-- =============================================================== -->
<?php
if(isset($_POST['register_button'])){

  $num_achat = $_POST['num_achat'];
  $Article = $_POST['Article'];
  $vendeur = $_POST['vendeur'];
  $prix = $_POST['prix'];
  $quantite = $_POST['quantite'];
  $date = date("Y-m-d");//current date

  if (strlen($Article)>9 || strlen($Article)<1) {
    array_push($error_array,"<span style='color: red;'><br>Your first name must be between 1 and 9 caracters</span><br>");
  }
  if (empty($error_array)) {
//insert the Values into our Database
$query = mysqli_query($con, "INSERT INTO inscription VALUES('','$num_achat','$Article','$vendeur','$prix','$quantite','$date')");
array_push($error_array, "<span style='color: #14c800;'>You're all set! Goahead and login<span><br>");

}}
?>
    <h2>inscription</h2>
    <br>
    <form action="london.php" method="POST">
    
          <table>
            <tr>
             
              <td><label>Num d'achat</label></td>
              <td><input type="text" name="num_achat" class="form-control"></td>

            </tr>

            <tr>
              <td><label>Article</label></td>
              <td><input type="text" name="Article" class="form-control"><?php if (in_array("<span style='color: red;'><br>Your first name must be between 2 and 25 characters</span><br>", $error_array)) echo "<span style='color: red;'><br>Your first name must be between 2 and 25 characters</span><br>"; ?></td>

            </tr>

            <tr>
              <td><label>Le vendeur</label></td>
              <td><input type="text" name="vendeur" class="form-control"></td>
            </tr>


            <tr>
              <td><label>Le prix</label></td>
              <td><input type="text" name="prix" class="form-control"></td>
            </tr>

            <tr>
              <td><label>La quantité</label></td>
              <td><input type="number" name="quantite" class="form-control"></td>
            </tr>

          </table>
      <input type="submit" class="btn btn-primary" name="register_button" value="Valider">


      <?php if(in_array("<span style='color: #14c800;'>You're all set! Goahead and login<span><br>", $error_array)) echo "<span style='color: #14c800;'>You're all set! Goahead and login<span><br>"; ?>
      
    </form>
  </div>

  <!-- =============================================================== -->
                           <!-- affectation -->
  <!-- =============================================================== -->
<?php 
if(isset($_POST['register_button2'])){

// $Article = "";
// $quantite = 0;
// $beneficiaire = "";
// $date = "";
// $error_array = array();


  $Article = $_POST['Af_Article'];
  $beneficiaire = $_POST['beneficiaire'];
  $quantite = $_POST['Af_quantite'];
  $date = date("Y-m-d");//current date

if (strlen($Article)>9 || strlen($Article)<1) {
    array_push($error_array,"Your first name must be between 2 and 25 characters<br>");
  }
  if (empty($error_array)) {
//insert the Values into our Database

$query = mysqli_query($con, "INSERT INTO affectation VALUES('','$Article','$quantite','$beneficiaire','$date')");
array_push($error_array, "<span style='color: #14c800;'>You're all set! Goahead and login<span><br>");


}}
?>

  <div id="Paris" class="w3-container city" style="display:none">
    <h2>affectation</h2>
    <br>
    <form action="affectation.php" method="POST">
    	<table>

    		<tr>
    			<td><label>Article</label></td>
    			<td><input type="text" name="Af_Article" maxlength="4" required></td>
    		</tr>


    		<tr>
    			<td><label>La quantité</label></td>
    			<td><input type="number" name="Af_quantite" required></td>
    		</tr>

    		<tr>
    			<td><label>Le bénéficiaire</label></td>
    			<td><input type="text" name="beneficiaire" maxlength="4" required></td>
    		</tr>

    	</table>
      <input type="submit" name="register_button2" value="Valider">	
      <?php if(in_array("<span style='color: #14c800;'>You're all set! Goahead and login<span><br>", $error_array)) echo "<span style='color: #14c800;'>You're all set! Goahead and login<span><br>"; ?>
    </form>
  </div>
  <!-- =============================================================== -->
                            <!-- Reparation -->
  <!-- =============================================================== -->
  <?php
  if(isset($_POST['register_btn'])){
// $num_achat = "";
// $Article = "";
// $vendeur = "";
// $quantite = 0;
// $date = "";
// $error_array = array();

  $num_achat = $_POST['Re_num_achat'];
  $Article = $_POST['Re_Article'];
  $vendeur = $_POST['Re_vendeur'];
  $quantite = $_POST['Re_quantite'];
//Date
  $date = date("Y-m-d");//current date
  if (strlen($Article)>9 || strlen($Article)<1) {
    array_push($error_array,"Your first name must be between 2 and 25 characters<br>");
  }
  if (empty($error_array)) {

//insert the Values into our Database

$query = mysqli_query($con, "INSERT INTO reparation VALUES('','$num_achat','$Article','$vendeur','$quantite','$date')");
array_push($error_array, "<span style='color: #14c800;'>You're all set! Goahead and login<span><br>");

}} ?>
  <div id="Tokyo" class="w3-container city" style="display:none">
    <h2>Reparation</h2>
    <br>
    <form action="Reparation.php" method="POST">
    	<table>
    		<tr>
    			<td><label>Num d'achat</label></td>
    			<td><input type="text" name="Re_num_achat" maxlength="4" required></td>
    		</tr>

    		<tr>
    			<td><label>Article</label></td>
    			<td><input type="text" name="Re_Article" maxlength="4" required></td>
    		</tr>

    		<tr>
    			<td><label>Le vendeur</label></td>
    			<td><input type="text" name="Re_vendeur" maxlength="4" required></td>
    		</tr>


    		<tr>
    			<td><label>La quantité</label></td>
    			<td><input type="number" name="Re_quantite" maxlength="4" required></td>
    		</tr>
    	</table>
<input type="submit" name="register_btn" value="Valider" >
<?php if(in_array("<span style='color: #14c800;'>You're all set! Goahead and login<span><br>", $error_array)) echo "<span style='color: #14c800;'>You're all set! Goahead and login<span><br>"; ?>
    </form>
    
  </div>




  <!-- =============================================================== -->
  <!-- ====================================================================-->
                            <!-- Reparation -->
  <!-- =============================================================== -->
  <?php
  if(isset($_POST['register_btn'])){
// $num_achat = "";
// $Article = "";
// $vendeur = "";
// $quantite = 0;
// $date = "";
// $error_array = array();

  $num_achat = $_POST['Re_num_achat'];
  $Article = $_POST['Re_Article'];
  $vendeur = $_POST['Re_vendeur'];
  $quantite = $_POST['Re_quantite'];
//Date
  $date = date("Y-m-d");//current date
  if (strlen($Article)>9 || strlen($Article)<1) {
    array_push($error_array,"Your first name must be between 2 and 25 characters<br>");
  }
  if (empty($error_array)) {

//insert the Values into our Database

$query = mysqli_query($con, "INSERT INTO reparation VALUES('','$num_achat','$Article','$vendeur','$quantite','$date')");
array_push($error_array, "<span style='color: #14c800;'>You're all set! Goahead and login<span><br>");

}} ?>
  <div id="Tokyo" class="w3-container city" style="display:none">
    <h2>Reparation</h2>
    <form action="Reparation.php" method="POST">
      <table>
        <tr>
          <td><label>Num d'achat</label></td>
          <td><input type="text" name="Re_num_achat" maxlength="4" required></td>
        </tr>

        <tr>
          <td><label>Article</label></td>
          <td><input type="text" name="Re_Article" maxlength="4" required></td>
        </tr>

        <tr>
          <td><label>Le vendeur</label></td>
          <td><input type="text" name="Re_vendeur" maxlength="4" required></td>
        </tr>


        <tr>
          <td><label>La quantité</label></td>
          <td><input type="number" name="Re_quantite" maxlength="4" required></td>
        </tr>
      </table>
<input type="submit" name="register_btn" value="Valider" >
<?php if(in_array("<span style='color: #14c800;'>You're all set! Goahead and login<span><br>", $error_array)) echo "<span style='color: #14c800;'>You're all set! Goahead and login<span><br>"; ?>
    </form>
    
  </div>
  <!-- =============================================================== -->
                           <!-- Annulation -->
  <!-- =============================================================== -->
  <?php if(isset($_POST['btn_annulation'])){
// $num_achat = "";
// $date = "";
// $error_array = array();

  $num_achat = $_POST['An_num'];
  
//Date
  $date = date("Y-m-d");//current date

//insert the Values into our Database
  if (strlen($num_achat)>9 || strlen($num_achat)<1) {
    array_push($error_array,"Your first name must be between 2 and 25 characters<br>");
  }
  if (empty($error_array)) {

$query = mysqli_query($con, "INSERT INTO annulation VALUES('','$num_achat','$date')");
$delete_query = mysqli_query($con, "DELETE FROM inscription WHERE num_de_commande = '$num_achat'");
array_push($error_array, "<span style='color: #14c800;'>You're all set! Goahead and login<span><br>");



    
    
    
  

}} ?>
  <div id="Annulation" class="w3-container city" style="display:none">
    <h2>Annulation</h2>
    <form action="Annulation.php" method="POST">
    	<table>
    		<tr>
    			<td><label>Num d'achat</label></td>
    			<td><input type="text" name="An_num" maxlength="4" required></td>
    		</tr>

    	</table>
    	<input type="submit" name="btn_annulation" value="Valider">
<?php if(in_array("<span style='color: #14c800;'>You're all set! Goahead and login<span><br>", $error_array)) echo "<span style='color: #14c800;'>You're all set! Goahead and login<span><br>"; ?>
    </form>

  </div>

 

</div>
</div>
  <!-- =============================================================== -->
                            <!-- Statistiques -->
  <!-- =============================================================== -->
<div >
<div style="margin-left:20px ;background-color: #c963ef">
   <div id="Statistiques" class="w3-container city" >
    <font color=#343a40>
    <h3 ><b>Les opérations</b></h3></font>
    <!-- ==================================================================== -->
                          <!-- Statistiques Les achats -->
    <!-- ==================================================================== -->

    <div class="w3-card-4" style="height: 50%;margin-bottom: 30px;border-radius: 5px">
      <!-- <small style="text-align: center;"></small><br> -->
      <h6 style="text-align:  center"><u><font color=#ffbf00><b>Les Commade</b></font></u></h6>
            <iframe style="border: none;" src='table/table_inscription.php' width="100%" height="300px" ></iframe>
      
    </div>
    <!-- ==================================================================== -->
                          <!-- Statistiques Affectations -->
    <!-- ==================================================================== -->
    <div class="w3-card-4" style="height: 100% ;margin-bottom: 30px;border-radius: 5px">
      
      <h6 style="text-align: center;"><u><font color=#ffbf00><b>Affectations</b></font></u></h6>
            <iframe style="border: none;" src='table/teble_affectations.php' width="100%" height="300px" ></iframe>
    </div>
    <!-- ==================================================================== -->
                          <!-- Statistiques Réparations -->
    <!-- ==================================================================== -->
    <div class="w3-card-4" style="height: 100%; width: 49%;;margin: 0 15px 30px 0;border-radius: 5px;float: left;">
      
      <h6 style="text-align: center;"><u><font color=#ffbf00><b>Réparations</b></font></u></h6>
              <iframe style="border: none;" src='table/table_reparations.php' width="100%" height="300px" ></iframe>
    </div>
    <!-- ==================================================================== -->
                          <!-- Statistiques Annulations -->
    <!-- ==================================================================== -->
    <div class="w3-card-4" style="height: 100%; width: 49%;;margin-bottom: 30px;border-radius: 5px;float: left;">
      
      <h6 style="text-align: center;"><u><font color=#ffbf00><b>Annulations</b></font></u></h6>
      <iframe style="border: none;" src='table/table_annulations.php' width="100%" height="300px" ></iframe>
    </div>
  </div>
</div>
</div>

</div>



</body>
</html>
