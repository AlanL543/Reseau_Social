<?php
$requete='SELECT count(*) FROM tusers Where login="aa"';
$nume=$dbo->query($requete)->fetchColumn();
?>
