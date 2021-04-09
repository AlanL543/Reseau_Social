<?php
require_once "maclasseUser.php";
require_once "CmysqlConnect.php";
session_start ();
$ dbo = nouveau  PDO ( 'mysql: host = localhost; dbname = projet' , root, root);
if  $_POST [ "Enregistrer" ] { //ok pour savoir si formulaire complété
  
  // a ce niveau vous récupérez toutes vos donnée avec des $_post en provenance de votre formulaire:
  $prenom=$_POST['prenom'];
  $nom=$_POST['nom'];
  $email=$_POST['email'];
  $photo=$_POST['photo'];
  
   $requete= 'INSERT INTO tusers VALUES ($id ++, $prenom, $nom, $photo)' ;
   $dbo->query($requete);
}
else
  <script type = "text/javascript" >
  alert ( 'Formulaire incomplet, merci de renseigner les informations manquantes afin de créer votre compte!' );
  </script>
?>