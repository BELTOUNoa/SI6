<?php

$servername = "localhost";
$username = "postgres";
$password = "postgres";
$dbname = "inventaire";

try{
$prd = $_POST['prd'];

$conn = new PDO("pgsql:host=localhost;dbname=inventaire", $username,$password);

$rqtSuppr = "DELETE FROM Produit WHERE prd_nom = '$prd' ";

$jsp = $conn->query($rqtSuppr);

echo $prd . " à ete supprimé";
}
catch(PDOException $e){
	echo $rqtSuppr . "<br>" . $e->getMessage();
}





?>

<!DOCTYPE html>
<html>
<head>
	<title>Supprimer</title>
	<link href="naruto.css" rel="stylesheet">
</head>
<body>

<p> <a href="supprimerInventaire.php"><input type="button" value="Retour"></a></p>

</body>
</html>

