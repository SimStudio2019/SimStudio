<?php
redirect_session('idUser', '/connexion', false);

$query = $bdd->prepare("SELECT * from dossier WHERE idUser = ?");
$query->execute(array($_SESSION['idUser']));
$dossierModele = $query->fetch();
