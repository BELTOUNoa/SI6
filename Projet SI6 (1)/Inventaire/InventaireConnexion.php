<?php

$servername = "localhost";
$username = "postgres";
$password = "postgres";
$dbname = "inventaire";

try{
	$id = $_POST['id'];
	$mdp = $_POST['mdp'];

	$conn = new PDO("pgsql:host=localhost;dbname=inventaire", $username,$password);

	$rqt = "SELECT * FROM Users";

	$pdoreq = $conn->query($rqt);

	var_dump($pdoreq);
	
	
	for ($pdoreq as $ligne) {
	

		if($ligne['mdp'] == $mdp){
			require 'menu.html';
		}
	}
}
		
	



catch(PDOException $e){
	echo $rqt . "<br>" . $e->getMessage();
}











?>