<?php
session_start();
require_once "CmysqlConnect.php";
require_once "Login.html";
/*public function verifmdp () {
	if $_POST['login'] != $util->getlogin(); {
		
	}*/
if (isset($_POST['Connexion'])) {
	$log=$_POST['login']
	$mm=$_POST['mdp']

$dbo = new PDO ( 'mysql: host = localhost; dbname = projet' , "root", "root");
$requete='SELECT login, mdp FROM tusers WHERE login=$log AND mdp=$mm';
$dbo->query($requete);
$num_row = mysql_num_rows($requete);

switch ($num_row) {
	case '0':
		echo "Mot de passe éroné, veuillez réessayer ! "
		break;
	
	default:
		echo "Bienvenue cher membre ! "
		break;
}
}

?>