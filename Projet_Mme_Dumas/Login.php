<?php

try {

$pdo = new PDO("mysql:host=localhost;dbname=projetweb","root","");
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // traitement de l'erreur
} catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();}
//echo $_POST['login'];
if (isset($_POST)) {
	$logi=$_POST['login'];
	$m=$_POST['mdp'];
$req=$pdo->query('SELECT count(*) FROM tusers Where login  = "'.$logi.'" and  mdp = "'.$m.'" ' )->fetchColumn();

//print("$req\n");
switch ($req) {
	case 0:
		echo "Mot de passe éroné, veuillez réessayer ! ";
		break;

	default:
		echo "Bienvenue cher membre ! ";
		break;
}
}
?>
