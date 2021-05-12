<?php
require_once "CmysqlConnect.php"
session_start();
$dbo = new PDO ('mysql:host = localhost;dbname=projetweb', "root", "");
$requete = 'SELECT * FROM tusers';
echo $requete;
?>
