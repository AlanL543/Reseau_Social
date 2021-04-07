<?php
require_once "Index.php";
session_start();
$dbo = new PDO('mysql:host=localhost;dbname=projet', root, root);
public function nouveauMembre() {
  $membre = new user ($this->id, $this->prenom, $this->nom, $this->photo);
}
if $_POST["Enregistrer"]{
  $membre->nouveauMembre();
  $membre->'INSERT INTO tusers VALUES ($this->id++, $this->prenom, $this->nom, $this->photo)';
}
else
  <script type="text/javascript">
  alert('Formulaire incomplet, merci de renseigner les informations manquantes afin de créer votre compte ! ');
  </script>
?>