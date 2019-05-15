<?php
$servername = "localhost";
$username = "postgres";
$password = "postgres";
$dbname = "inventaire";


try{
$prd_id = $_POST['prd_id'];
$prd_nom = $_POST['prd_nom'];
$prd_qte = $_POST['prd_qte'];
$prd_pu = $_POST['prd_pu'];
$prd_cat = $_POST['prd_cat'];


$conn = new PDO("pgsql:host=localhost;dbname=inventaire", $username,$password);

$rqt = "INSERT INTO Produit VALUES ('$prd_id','$prd_nom',$prd_qte,$prd_pu,'$prd_cat')";

	$pdoreq = $conn->query($rqt);

	echo "Produit ajouté";
	
}
catch(PDOException $e){
	echo $rqt . "<br>" . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Produit Ajouté</title>
	<link href="naruto.css" rel="stylesheet">
</head>
<body>

	<p> <a href="formulInventaire.html"><input type="button" value="Retour"></a></p>
	

</body>
</html>