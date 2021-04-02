<?php
class user {
private $id;
private $prenom;
private $nom;
private $photo;

function __construct($id, $prenom, $nom, $photo){
  $this->id = $id;
  $this->prenom = $prenom;
  $this->nom = $nom;
  $this->$photo = $photo;
}

protected function get_id() {
  return $this->id;
}

public function get_prenom() {
  return $this->prenom;
}

public function get_nom() {
  return $this->nom;
}
public function get_photo() {
  return $this->photo;
}

protected function set_id($id) {
  $this->id = $id;
}

public function set_prenom($prenom) {
  $this->prenom = $prenom;
}

public function set_nom($nom) {
  $this->nom = $nom;
}

public function set_photo($photo) {
  $this->photo = $photo;
}
public function nouveauMembre() {
  $membre = new user ($this->id, $this->prenom, $this->nom, $this->photo);
}
if $POST["prenom, nom, email, photo, Enregistrer"] {
  
}
}
 ?>
