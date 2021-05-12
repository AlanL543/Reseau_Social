<?php
//require_once "maclasseUser.php";
//require_once "CmysqlConnect.php";
session_start ();
$db = new  PDO ( 'mysql: host = localhost; dbname = projetweb' , "root", "");
$id=3;
//if (isset($_POST)) { //ok pour savoir si formulaire complété

  // a ce niveau vous récupérez toutes vos donnée avec des $_post en provenance de votre formulaire:
  $prenom=$_POST['prenom'];
  $nom=$_POST['nom'];
  $email=$_POST['email'];
  $photo=$_POST['photo'];
  $login=$_POST['login'];
  $mdp=$_POST['mdp'];

   $requete= "INSERT INTO tusers VALUES ('$prenom', '$nom', '$email', '$photo', '$login', '$mdp', '3')";
   $db->query($requete);
//}
//else
  echo "<script type = 'text/javascript'> alert ( 'Formulaire incomplet, merci de renseigner les informations manquantes afin de créer votre compte!' ); </script>";
?>
