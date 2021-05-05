<?php
class user {
public $id = 0;
private $prenom;
private $nom;
private $photo;
//public $sessionid = session_id();

function __construct($id, $prenom, $nom, $photo){
  $this->id = $id;
  $this->prenom = $prenom;
  $this->nom = $nom;
  $this->photo = $photo;
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
}
 ?>
