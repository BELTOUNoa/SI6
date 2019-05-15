<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Categorie</title>
	<link href="naruto.css" rel="stylesheet">
</head>
<body>
	<?php 
$servername = "localhost";
$username = "postgres";
$password = "postgres";
$dbname = "inventaire";

$conn = new PDO("pgsql:host=localhost;dbname=inventaire", $username,$password);

?>

<form action="ProduitCat.php" method="post"> 

	<label for="cat">Catégorie :</label>
	<select name="catform" id="catform">
		<?php
		$reponse = $conn->query('SELECT DISTINCT prd_cat FROM Produit');

		while ($donnees = $reponse->fetch()){
		?>
		<option value="<?php echo $donnees['prd_cat']; ?>"> <?php echo $donnees['prd_cat']; ?> </option>
		<?php
		}
	?>

	</select>


	<input type= "submit" value= "Selectionner"> </br>
	



</form>
<p> <a href="menu.html"><input type="button" value="Retour"></a></p>

</body>
</html>