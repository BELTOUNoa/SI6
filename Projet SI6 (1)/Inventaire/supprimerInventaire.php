<!DOCTYPE html>
<html>
<head>
	<title>Supprimer</title>
	<link href="naruto.css" rel="stylesheet">
<body>
		<?php 
$servername = "localhost";
$username = "postgres";
$password = "postgres";
$dbname = "inventaire";

$conn = new PDO("pgsql:host=localhost;dbname=inventaire", $username,$password);


		?>	
		<h1> Supprimer un produit </h1>
 
		<form action="supprimer2Inventaire.php" method="post"> 
 
		<label for="prd"> Nom du prodruit : </label> 
		<select name="prd" id="prd">
		<?php
		$reponse = $conn->query('SELECT * FROM Produit');
 
		while ($donnees = $reponse->fetch())
		{
			?>
			<option value="<?php echo $donnees['prd_nom']; ?>"> <?php echo $donnees['prd_nom']; ?> </option>
			<?php
		}
		?>	
		</select>
		</br>
		
	<input type= "submit" value= "Supprimer"> </br>

	</form>
<p> <a href="menu.html"><input type="button" value="Retour"></a></p>
	</body>
</html>