<!DOCTYPE html>
<html>
<head>
	<title>Produit</title>
	<link href="naruto.css" rel="stylesheet">
</head>
<body>
	<h1>Produit par Catégorie</h1>

<?php 
$servername = "localhost";
$username = "postgres";
$password = "postgres";
$dbname = "inventaire";

$conn = new PDO("pgsql:host=localhost;dbname=inventaire", $username,$password);


try{
	$cat = $_POST['catform'];

$SelCat = "SELECT * FROM Produit WHERE prd_cat = '$cat' ";

$trucCat = $conn->query($SelCat);

	foreach ($trucCat as $vite){	
		
		
		echo $vite['prd_nom'];

	

	}
}
catch(PDOException $e){
	echo $rqtSuppr . "<br>" . $e->getMessage();
}
?>

	


</body>
</html>

	