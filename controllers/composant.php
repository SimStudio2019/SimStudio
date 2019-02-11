<?php
redirect_session('idUser', '/connexion', false);

$query = $bdd->prepare("SELECT * from composant");
$query->execute();
$result = $query->fetchAll();
$smarty->assign('composants', $result);