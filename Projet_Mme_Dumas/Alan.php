<?php
session_start();
//require_once "CmysqlConnect.php";
require_once "Login.html";
/*public function verifmdp () {
	if $_POST['login'] != $util->getlogin(); {

	}*/
if (isset($_POST)) {
	$log=$_POST['login'];
	$m=$_POST['mdp'];

$dbo = new PDO ( 'mysql: host = localhost; dbname = projetweb' , "root", "");
$req=$dbo->query('SELECT count(*) FROM tusers Where login="aa"')->fetchColumn();
echo "<br>Number of records : ". $req;
echo $req;
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
