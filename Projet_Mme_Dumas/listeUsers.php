<?php
require_once "CmysqlConnect.php"
session_start();
$dbo = new PDO ('mysql:host = localhost;dbname=projet', root, root);
$requete = 'SELECT * FROM tusers';