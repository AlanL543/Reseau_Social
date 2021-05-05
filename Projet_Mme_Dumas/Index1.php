<?php
require_once "maclasseUser.php";
require_once "CmysqlConnect.php";
session_start ();
$db = new  PDO ( 'mysql: host = localhost; dbname = projetweb' , "root", "");
if (isset($_POST)) { //ok pour savoir si formulaire complété
  
  // a ce niveau vous récupérez toutes vos donnée avec des $_post en provenance de votre formulaire:
  $prénom=$_POST['prénom'];
  $nom=$_POST['nom'];
  $email=$_POST['email'];
  //$photo=$_POST['photo'];
  
   $requete= 'INSERT INTO tusers VALUES ($id++, $prénom, $nom, $photo)';
   $db->query($requete);
}
else
  echo "<script type = 'text/javascript'>";
  echo "alert ( 'Formulaire incomplet, merci de renseigner les informations manquantes afin de créer votre compte!' );";
  echo "</script>";
?>